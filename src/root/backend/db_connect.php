<?php
$db = null; // Globale Variable zur Speicherung der Datenbankverbindung

function getDBConnection() {
    global $db; // Zugriff auf die globale Variable

    // Überprüfen, ob bereits eine Verbindung besteht, und diese zurückgeben
    if($db != null) {
        return $db;
    }

    // Datenbankverbindungsinformationen
    $host = "localhost";
    $dbname = "languageconnect";
    $username = "root";
    $password = "";

    // Verbindung zur Datenbank herstellen
    $db = new mysqli($host, $username, $password, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich war
    if($db->connect_error) {
        // Fehlermeldung ausgeben und das Skript beenden
        echo "Verbindung zur DB konnte nicht hergestellt werden.<br>";
        echo $db->connect_error;
        die();
    }

    // Verbindung erfolgreich hergestellt, also geben wir sie zurück
    return $db;
}
