<?php
include_once "../db_connect.php";

// POST um daten zu erhalten
$kurs_name = $_POST['course_name'];
$sprache = $_POST['subject'];
$beschreibung = $_POST['description'];
$zielgruppe = $_POST['target_group'];
$kursformat = $_POST['format'];
$terminanfang = $_POST['termin_anfang'];
$terminende = $_POST['termin_ende'];

$db = getDBConnection();

// SQL-Abfrage, um den neuen Kurs in die Datenbank einzufügen
$sql = "INSERT INTO kurse (Kursname, Sprache, Beschreibung, Kursformat, Zielgruppe, Kursdauer_Anfang, Kursdauer_Ende) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param("sssssss", $kurs_name, $sprache, $beschreibung, $kursformat, $zielgruppe, $terminanfang, $terminende);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Neuer Kurs wurde erfolgreich erstellt.";
    header("location: ../../frontend/Meine-Kurse.php");
} else {
    echo "Fehler beim Erstellen des neuen Kurses.";
}

$stmt->close();
$db->close();
