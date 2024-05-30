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
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["status"] == 0) {
            $message = "Profil inaktiv, bitte wenden Sie sich an einen Administrator.";
        } else {
            $hashedPasswordInDB = $row["password"];
            if (password_verify($password, $hashedPasswordInDB)) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;

                if ($row["role"] == "Admin") {
                    $_SESSION['isAdmin'] = true;
                    header("Location: ../../admin/adminindex.php");
                } elseif ($row["role"] == "Tutor") {
                    $_SESSION['isTutor'] = true;
                    header("Location: ../../backend/userlogged.php");
                } else {
                    header("Location: ../../backend/userlogged.php");
                }
                exit();
            } else {
                $message = "Anmeldung fehlgeschlagen. Bitte überprüfen Sie Benutzername und Passwort.";
            }
        }
    } else {
        $message = "Benutzername nicht registriert. Bitte registrieren Sie sich zuerst.";
    }

    $stmt->close();
    $db->close();
}