<?php
session_start();
include_once "../db_connect.php";

// Datenbankverbindung herstellen
$db = getDBConnection();

// Kursname und Benutzername aus POST-Daten erhalten
$kursname = $_POST['kursname'];
$username = $_POST['username'];

// SQL-Statement zum Aktualisieren der Datenbank
$sql = "UPDATE kurse SET Gebucht = 1, Gebucht_von = ? WHERE Kursname = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("ss", $username, $kursname);

// Ausführen der SQL-Abfrage
if ($stmt->execute()) {
    echo 'success'; // Erfolgreich gebucht
} else {
    echo 'error'; // Fehler beim Buchen
}

// Statement und Verbindung schließen
$stmt->close();
$db->close();
