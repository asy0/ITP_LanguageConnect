<?php
$db = null; // Globale Variable zur Speicherung der Datenbankverbindung

function getDBConnection() {
    global $db;

    if($db != null) {
        return $db;
    }
    $servername   =  "127.0.0.1";
    $dbusername   =  "root";
    $dbpassword   =   "" ;
    $dbname       =  "languageconnect";

    $db = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if($db->connect_error) {
        echo "Verbindung zur DB konnte nicht hergestellt werden.<br>";
        echo $db->connect_error;
        die();
    }

    return $db;
}
