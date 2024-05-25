<?php
include_once '../backend/db_connect.php';
include_once 'adminnav.php';

if (isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "UPDATE users SET status = 0 WHERE user_id = ?";
    $stmt = getDBConnection()->prepare($sql);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "Benutzer erfolgreich deaktiviert.";
    } else {
        echo "Fehler beim Deaktivieren des Benutzers.";
    }
    $stmt->close();
    getDBConnection()->close();

    header("Location: showallUsers.php");
    exit();
} else{
    echo "Ungültige Anfrage.";
  }

