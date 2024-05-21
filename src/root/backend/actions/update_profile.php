<?php
include '../../backend/db_connect.php';
session_start();  // Stelle sicher, dass die Sitzung gestartet ist

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = getDBConnection();
    $currentuser = $_SESSION['username'];

    if (empty($currentuser)) {
        die("Fehler: Benutzername nicht gesetzt.");
    }

    // Eingaben validieren und debuggen
    $firstname = isset($_POST['firstname']) ? mysqli_real_escape_string($db, $_POST['firstname']) : '';
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($db, $_POST['lastname']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : '';

    if (empty($firstname) || empty($lastname) || empty($email)) {
        die("Fehler: Alle Felder müssen ausgefüllt werden.");
    }

    // SQL-Abfrage zum Aktualisieren der Benutzerdaten
    $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE username = '$currentuser'";

    if (mysqli_query($db, $query)) {
        echo "Profil aktualisiert.";
    } else {
        echo "Fehler beim Aktualisieren des Profils: " . mysqli_error($db);
    }

    mysqli_close($db);

    // Umleitung zurück zur Profilseite
    header("Location: ../../frontend/myprofil.php");
    exit();
} else {
    echo "Ungültige Anfrage.";
}
