<?php
$message = "";

// Benutzername und Passwörter aus dem Formular erhalten
$benutzername = $_POST['username'];
$anrede = $_POST['foa'];
$vorname = $_POST['firstname'];
$nachname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$passwordconfirm = $_POST['pwdconfirm'];


if(strlen($password) > 100 || strlen($password) < 8){
    $message = "Das Passwort muss mindestens 8 Zeichen und nicht über 100 Zeichen haben. Bitte versuche es erneut.";
    header("Location: ../../frontend/registrierung-form.php");
}

// Überprüfen, ob die Passwörter übereinstimmen
if ($password !== $passwordconfirm) {
    $message = "Die Passwörter stimmen nicht überein. Bitte versuche es erneut.";
    header("Location: ../../frontend/registrierung-form.php");
} else {

    // Überprüfen, ob Benutzername bereits vorhanden ist
    include 'C:\xampp\htdocs\ITP_LanguageConnect\src\root\backend\db_connect.php';
    $db = getDBConnection();

    $checkStmt = $db->prepare("SELECT COUNT(*) FROM users WHERE Username = ?");
    $checkStmt->bind_param("s", $benutzername);
    $checkStmt->execute();
    $checkStmt->bind_result($count);
    $checkStmt->fetch();
    $checkStmt->close();

    if ($count > 0) {
        $message = "Benutzername bereits vorhanden. Bitte wähle einen anderen Benutzernamen.";
        header("Location: ../../frontend/registrierung-form.php");
    } else {
       

        // SQl Statement Passwort hashen
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO users (Anrede, Vorname, Nachname, EMail, Username, Passwort, admin) VALUES (?, ?, ?, ?, ?, ?, 0)");
        $stmt->bind_param("ssssss", $anrede, $vorname, $nachname, $email, $benutzername, $hashedpassword);

        // Überprüfe, ob das Prepared Statement erfolgreich vorbereitet wurde
        if ($stmt) {
            $stmt->execute();
            $stmt->close();
        } else {
            die('Fehler beim Vorbereiten des Statements: ' . $db->error);
        }
        //Registrierung erfolgreich!
        $message = "Registrierung erfolgreich! Sie können sich nun einloggen!";
        header("Location: ../../frontend/login-form.php");
    }

    $db->close();
}



