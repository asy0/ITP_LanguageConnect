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
    <style>
        .profile-info {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            width: 50%;
        }
    </style>
</head>

<body>
<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>

<main>
    <br><br><h1 class="welcome-heading"><b>Meine Kurse</b></h1><br>

    <div class="profile-container">
        <?php
        include '../../root/backend/db_connect.php';
        $db = getDBConnection();
        $currentuser = $_SESSION['username'];

        // Abfrage für gebuchte Kurse
        $query = "SELECT Kursname, Anbieter, Anbieter_Email, Sprache, Beschreibung, Kursformat, Kursdauer_Anfang, Kursdauer_Ende, Preis, KursID 
                  FROM kurse 
                  WHERE Gebucht_von = '$currentuser'";

        // Abfrage für erstellte Kurse
        $query_tutor = "SELECT Kursname, Anbieter, Anbieter_Email, Sprache, Beschreibung, Kursformat, Kursdauer_Anfang, Kursdauer_Ende, Preis, KursID 
                        FROM kurse 
                        WHERE Anbieter = '$currentuser'";

        // Ausführen der Abfragen
        $result = mysqli_query($db, $query);
        $result_tutor = mysqli_query($db, $query_tutor);


        // Gebuchte Kurse anzeigen
        if(!isset($_SESSION['isTutor'])) {
            echo "<h3><b>Gebuchte Kurse</b></h3><br>";
            echo "<br>";
        }
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="profile-info">';
                    echo '<p><strong>Kursname:</strong> ' . $row["Kursname"] . '</p>';
                    echo '<p><strong>Anbieter:</strong> ' . $row["Anbieter"] . '</p>';
                    echo '<p><strong>E-Mail:</strong> ' . $row["Anbieter_Email"] . '</p>';
                    echo '<p><strong>Sprache:</strong> ' . $row["Sprache"] . '</p>';
                    echo '<p><strong>Beschreibung:</strong> ' . $row["Beschreibung"] . '</p>';
                    echo '<p><strong>Kursformat:</strong> ' . $row["Kursformat"] . '</p>';
                    echo '<p><strong>von:</strong> ' . $row["Kursdauer_Anfang"] . '</p>';
                    echo '<p><strong>bis:</strong> ' . $row["Kursdauer_Ende"] . '</p>';
                    echo '<p><strong>Preis:</strong> ' . $row["Preis"] . ' Euro</p>';
                    echo '</div>';
                    echo '<br><br>';
                }
            } else {
                if(!isset($_SESSION['isTutor'])){
                echo "Keine gebuchten Kurse gefunden.<br><br>";}
            }


        // Erstellte Kurse anzeigen
        if(isset($_SESSION['isTutor'])) {
            echo "<h3><b>Erstellte Kurse</b></h3><br>";
            echo"<br>";
            if (mysqli_num_rows($result_tutor) > 0) {
                while ($row = mysqli_fetch_assoc($result_tutor)) {
                    echo '<br><div class="profile-info">';
                    echo '<p><strong>Kursname:</strong> ' . $row["Kursname"] . '</p>';
                    echo '<p><strong>Anbieter:</strong> ' . $row["Anbieter"] . '</p>';
                    echo '<p><strong>E-Mail:</strong> ' . $row["Anbieter_Email"] . '</p>';
                    echo '<p><strong>Sprache:</strong> ' . $row["Sprache"] . '</p>';
                    echo '<p><strong>Beschreibung:</strong> ' . $row["Beschreibung"] . '</p>';
                    echo '<p><strong>Kursformat:</strong> ' . $row["Kursformat"] . '</p>';
                    echo '<p><strong>von:</strong> ' . $row["Kursdauer_Anfang"] . '</p>';
                    echo '<p><strong>bis:</strong> ' . $row["Kursdauer_Ende"] . '</p>';
                    echo '<p><strong>Preis:</strong> ' . $row["Preis"] . ' Euro</p>';
                    echo '</div>';
                    echo '<br><br>';
                    echo '<hr>';
                }
            } else {
                echo "Keine erstellten Kurse gefunden.<br><br>";
                echo '<hr>';
            }
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
