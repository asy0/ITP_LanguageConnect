<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include 'C:\xampp\htdocs\ITP_LanguageConnect\src\root\backend\db_connect.php';

    $db = getDBConnection();

    $sql = "SELECT * FROM users WHERE Username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    // Überprüfen, ob ein Datensatz gefunden wurde
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Überprüfen, ob der Account inaktiv ist
        if ($row["status"] == 1) {
            $message = "Profil inaktiv, bitte wenden Sie sich an einen Administrator.";
            header("Location: ../../frontend/login-form.php");
        } else {
            // Account ist aktiv, weiter mit Passwortüberprüfung
            $hashedPasswordInDB = $row["Passwort"];

            if (password_verify($password, $hashedPasswordInDB)) {
                // Variable (isAdmin) wird gesetzt, wenn der user ein Admin ist
                if ($row["admin"] == "1") {
                    $_SESSION['isAdmin'] = true;
                }

                $message = "Anmeldung erfolgreich!";
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;

                header("Location: ../../frontend/login-form.php"); //WIRD ERST GEMACHT!! DANN AUF PROFIL AENDERN!
            } else {
                $failedAttempt = true;
                header("Location: ../../frontend/login-form.php");
                $message = "Anmeldung fehlgeschlagen. Bitte überprüfen Sie Benutzername und Passwort.";
            }
        }
    } else {
        $failedAttempt = true;
        header("Location: ../../frontend/login-form.php");
        $message = "Anmeldung fehlgeschlagen. Bitte überprüfen Sie Benutzername und Passwort.";
    }

    // Statement, Db und alle Resulte aus der DB werden geschlossen
    $stmt->close();
    $result->close();
    $db->close();

}



?>
