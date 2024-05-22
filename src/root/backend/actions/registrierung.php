<?php
$message = "";
$username = $_POST['username'];
$anrede = $_POST['anrede']; // hier war der Name im Formular "foa"
$vorname = $_POST['firstname'];
$nachname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$passwordconfirm = $_POST['pwdconfirm'];
$role = $_POST['role'];

if(strlen($password) > 100 || strlen($password) < 8){
    $message = "Das Passwort muss mindestens 8 Zeichen und nicht über 100 Zeichen haben. Bitte versuche es erneut.";
    header("Location:../../frontend/registrierung-form.php");
    exit();
}

// Überprüfen, ob die Passwörter übereinstimmen
if ($password!== $passwordconfirm) {
    $message = 'Die Passwörter stimmen nicht überein.';
    header('Location:../../frontend/registrierung-form.php?errorReg='. urlencode($message));
    exit();
} else {
    include 'C:\xampp\htdocs\ITP_LanguageConnect\src\root\backend\db_connect.php';
    $db = getDBConnection();

    $checkStmt = $db->prepare("SELECT COUNT(*) FROM users WHERE username =?");
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->bind_result($count);
    $checkStmt->fetch();
    $checkStmt->close();

    if ($count > 0) {
        $message = "Benutzername bereits vorhanden. Bitte wähle einen anderen Benutzernamen.";
        header("Location:../../frontend/registrierung-form.php");
        exit();
    } else {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $status = 1; // 1 = aktiv, 0 = inaktiv
        $stmt = $db->prepare("INSERT INTO users (anrede, firstname, lastname, email, username, password, role, status) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss", $anrede, $vorname, $nachname, $email, $username, $hashedpassword, $role,$status);

        if ($stmt->execute()) {
            $stmt->close();
            $db->close();
            // Erfolgreiche Registrierung, weiterleiten zur Login Seite
            header("Location: ../../frontend/login-form.php");
            exit();
        } else {
            die('Fehler beim Ausführen des Statements: '. $stmt->error);
        }
    }
}
