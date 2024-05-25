<?php
    include_once '../backend/db_connect.php';
    include_once 'adminnav.php';

    $sql = "SELECT * FROM users";
    $resultData = getDBConnection()->query($sql);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Alle Benutzer</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="admin.css">
    <style>
        th {
            background-color: #2a8c0a;
            color: white;
        }
        tr:nth-child(even) {
            background-color: rgb(201, 167, 99);
        }
        .status-0 {
            background-color: #ffcccc; /* Hellrote Farbe für Status 0 */
        }
    </style>
</head>

<body>
    <div class="content">
        <br><br><h1><b><u>Alle Benutzer</u></b></h1><br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Anrede</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Benutzername</th>
                <th>Rolle</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php

            while ($row = $resultData->fetch_assoc()) {
                if ($row['user_id'] == 1 && $row['role'] == 'Admin') {
                    continue; // Skip the row with ID 1 and role 'Admin'
                }
                $statusClass = $row['status'] == 0 ? 'status-0' : '';
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['anrede'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "<td class='$statusClass'>" . $row['status'] . "</td>";
                echo "</tr>";
            }
            getDBConnection()->close();
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>
