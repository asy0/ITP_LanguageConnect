<?php
session_start();
include_once "../db_connect.php";

// Überprüfen, ob der Benutzername in der Session gesetzt ist
if (!isset($_SESSION['username'])) {
    die("Benutzername ist nicht in der Session gesetzt.");
}

$db = getDBConnection();

// POST um daten zu erhalten
$kurs_name = $_POST['course_name'];
$anbieter = $_SESSION['username'];
$username = $anbieter; // Setze den Benutzernamen für die Abfrage

// SQL-Abfrage, um die E-Mail des Anbieters zu erhalten
$sql = "SELECT email FROM users WHERE username = ?";
$stmt = $db->prepare($sql);
if ($stmt === false) {
    die("Fehler bei der Vorbereitung der Abfrage: " . $db->error);
}
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($anbieteremail);
$stmt->fetch(); // Holen des Ergebnisses

// Statement schließen
$stmt->close();

$sprache = $_POST['subject'];
$preis = $_POST['price'];
$beschreibung = $_POST['description'];
$zielgruppe = $_POST['target_group'];
$kursformat = $_POST['format'];
$terminanfang = $_POST['termin_anfang'];
$terminende = $_POST['termin_ende'];

// SQL-Abfrage, um den neuen Kurs in die Datenbank einzufügen
$sql = "INSERT INTO kurse (Kursname, Sprache, Anbieter, Anbieter_Email, Beschreibung, Kursformat, Zielgruppe, Preis, Kursdauer_Anfang, Kursdauer_Ende) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($sql);
if ($stmt === false) {
    die("Fehler bei der Vorbereitung der Abfrage: " . $db->error);
}
$stmt->bind_param("ssssssssss", $kurs_name, $sprache, $anbieter, $anbieteremail, $beschreibung, $kursformat, $zielgruppe, $preis, $terminanfang, $terminende);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Neuer Kurs wurde erfolgreich erstellt.";
    header("location: ../../frontend/Meine-Kurse.php");
} else {
    echo "Fehler beim Erstellen des neuen Kurses.";
}

// Statement und Verbindung schließen
$stmt->close();
$db->close();
