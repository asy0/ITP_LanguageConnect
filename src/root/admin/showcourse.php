<?php
include_once '../backend/db_connect.php';
include_once 'adminnav.php';

$sql = "SELECT * FROM kurse";
$resultData = getDBConnection()->query($sql);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Alle Kurse</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">

    <style>
        th {
            background-color: #700727;
            color: #ece9e6;
        }
    </style>
</head>

<body>
     <div class="content">
        <br><br><h1><b><u>Alle Kurse</u></b></h1><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kursname</th>
                    <th>Sprache</th>
                    <th>Kursformat</th>
                    <th>Dauer:Anfang</th>
                    <th>Dauer:Ende</th>
                    <th>Gebucht von</th>
                    <th>Gebucht</th>
                    <th>Beschreibung</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($resultData->num_rows > 0) {
                    while ($row = $resultData->fetch_assoc()) {
                    echo "<tr>";
                        echo "<td>" . $row['KursID'] . "</td>";
                        echo "<td>" . $row['Kursname'] . "</td>";
                        echo "<td>" . $row['Sprache'] . "</td>";
                        echo "<td>" . $row['Kursformat'] . "</td>";
                        echo "<td>" . $row['Kursdauer_Anfang'] . "</td>";
                        echo "<td>" . $row['Kursdauer_Ende'] . "</td>";
                        echo "<td>" . $row['Gebucht_von'] . "</td>";
                        echo "<td>" . $row['Gebucht'] . "</td>";
                        echo "<td>" . $row['Beschreibung'] . "</td>";
                    echo "</tr>";
                    }
                }else{
                    echo "<tr><td colspan='8'>Keine Kurse gefunden</td></tr>";
                  }
                getDBConnection()->close();
                ?>
            </tbody>
        </table>
     </div>

</body>
</html>
