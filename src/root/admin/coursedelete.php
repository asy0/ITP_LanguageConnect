<?php
include_once '../backend/db_connect.php';

if (isset($_GET['id'])) {
    $kursID = $_GET['id'];
    $sql = "DELETE FROM kurse WHERE KursID = ?";
    $stmt = mysqli_stmt_init(getDBConnection());

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $kursID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: showcourse.php?deletesuccess");
    } else {
        echo "Fehler: " . mysqli_error(getDBConnection());
    }

    getDBConnection()->close();
} else {
    header("Location: showcourse.php?deleteerror");
}
