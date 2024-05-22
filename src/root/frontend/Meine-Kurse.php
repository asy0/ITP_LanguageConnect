<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Profil</title>
</head>


<body>
<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>

<main>
    <br><br><h1 class="welcome-heading">Meine Kurse</h1><br>


    <div class="profile-container">

        <?php
        include '../../root/backend/db_connect.php';
        $db = getDBConnection();
        $currentuser = $_SESSION['username'];
        $query = "SELECT Kursname, Sprache, Beschreibung, Kursformat, Kursdauer_Anfang, Kursdauer_Ende FROM kurse WHERE Gebucht_von = '$currentuser'";

        // Ausführen der Abfrage
        $result = mysqli_query($db, $query);

        // Überprüfen, ob Daten vorhanden sind
        if (mysqli_num_rows($result) > 0) {
            // Schleife über die Ergebnisse
            while ($row = mysqli_fetch_assoc($result)) {
                // Daten in die entsprechenden HTML-Elemente einfügen
                echo '<div class="profile-info">';
                echo '<p>Kursname: ' . $row["Kursname"] . '</p>';
                echo '<p>Sprache: ' . $row["Sprache"] . '</p>';
                echo '<p>Beschreibung: ' . $row["Beschreibung"] . '</p>';
                echo '<p>Kursformat: ' . $row["Kursformat"] . '</p>';
                echo '<p>von: ' . $row["Kursdauer_Anfang"] . '</p>';
                echo '<p>bis: ' . $row["Kursdauer_Ende"] . '</p>';
                echo '</div>';
                echo '<br>';
            }
        } else {
            echo "Keine Daten gefunden.";
        }
        ?>

    </div>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>
