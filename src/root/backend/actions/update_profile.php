<?php
include '../../root/backend/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = getDBConnection();
    $currentuser = $_SESSION['username'];

    // Eingaben validieren
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    // SQL-Abfrage zum Aktualisieren der Benutzerdaten
    $query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE username = '$currentuser'";

    if (mysqli_query($db, $query)) {
        echo "Profil aktualisiert.";
    } else {
        echo "Fehler beim Aktualisieren des Profils: " . mysqli_error($db);
    }

    mysqli_close($db);

    // Umleitung zurück zur Profilseite
    header("Location: profil.php");
    exit();
} else {
    echo "Ungültige Anfrage.";
}

