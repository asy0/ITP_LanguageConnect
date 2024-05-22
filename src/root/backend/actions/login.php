<?php
session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include 'C:\xampp\htdocs\ITP_LanguageConnect\src\root\backend\db_connect.php';

    $db = getDBConnection();

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    // Überprüfen, ob ein Datensatz gefunden wurde
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Überprüfen, ob der Account inaktiv ist
        if ($row["status"] == 0) {
            $message = "Profil inaktiv, bitte wenden Sie sich an einen Administrator.";
        } else {
            // Account ist aktiv, weiter mit Passwortüberprüfung
            $hashedPasswordInDB = $row["password"];

            if (password_verify($password, $hashedPasswordInDB)) {
                // Variable (isAdmin) wird gesetzt, wenn der Benutzer ein Admin ist
                if ($row["role"] == "Admin") {
                    $_SESSION['isAdmin'] = true;
                }
                if ($row["role"] == "Tutor"){
                    $_SESSION['isTutor'] = true;
                }

                $message = "Anmeldung erfolgreich!";
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;

                header("Location: ../../backend/userlogged.php");
                exit();
            } else {
                $message = "Anmeldung fehlgeschlagen. Bitte überprüfen Sie Benutzername und Passwort.";
            }
        }
    } else {
        $message = "Benutzername nicht registriert. Bitte registrieren Sie sich zuerst.";
    }

    // Statement und Db werden geschlossen
    $stmt->close();
    $db->close();
}