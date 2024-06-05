<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .buttonbox {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            margin-right: 20px;
        }
        .profile-pic img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
        }
        .info {
            display: flex;
            flex-direction: column;
        }
        .info div {
            margin-bottom: 10px;
        }
        body {
            background-color: #f0f2f5;
        }
        main {
            padding: 20px;
        }
        .welcome-heading {
            text-align: center;
            text-decoration: underline;
            font-size: 3.5rem;
            font-weight: bold;

        }
    </style>
    <title>Profil</title>
</head>

<body>
<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>

<main>
    <br><br><h1 class="welcome-heading">Kursliste</h1><br>
    
    <?php
    include_once "../backend/db_connect.php";

    // Funktion zur Verbindung mit der Datenbank
    $db = getDBConnection();

    // SQL-Abfrage, um die Kursdaten abzurufen
    $sql = "SELECT Kursname, Anbieter, Anbieter_Email, Sprache, Beschreibung, Kursformat, Zielgruppe, Kursdauer_Anfang, Kursdauer_Ende, Preis, Gebucht 
            FROM kurse 
            WHERE Gebucht = 0"; // Filterung nach nicht gebuchten Kursen

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Ausgabe der Kursdaten
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="buttonbox">
                <div class="info">
                    <div><strong>Anbieter:</strong> <?php echo $row['Anbieter']; ?></div>
                    <div><strong>Kontaktdaten:</strong> <?php echo $row['Anbieter_Email']; ?></div>
                    <div><strong>Sprache:</strong> <?php echo $row['Sprache']; ?></div>
                    <div><strong>Beschreibung:</strong> <?php echo $row['Beschreibung']; ?></div>
                    <div><strong>Format:</strong> <?php echo $row['Kursformat']; ?></div>
                    <div><strong>Bezahlung:</strong> <?php echo $row['Preis']; ?> €/h</div>
                    <div><strong>Zielgruppe:</strong> <?php echo $row['Zielgruppe']; ?></div>
                    <div><strong>Anfang:</strong> <?php echo $row['Kursdauer_Anfang']; ?></div>
                    <div><strong>Ende:</strong> <?php echo $row['Kursdauer_Ende']; ?></div>
                    <!-- Button zum Buchen des Kurses -->
                    <button class="btn btn-primary btn-buchen" data-kursname="<?php echo $row['Kursname']; ?>">Kurs buchen</button>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Keine Kurse gefunden.";
    }

    // Verbindung schließen
    $db->close();
    ?>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // AJAX-Anfrage, um den Kurs zu buchen
    $(document).ready(function() {
        $('.btn-buchen').click(function() {
            var kursname = $(this).data('kursname');
            var username = "<?php echo $_SESSION['username']; ?>";

            $.ajax({
                type: 'POST',
                url: '../backend/actions/kurs_buchen.php',
                data: { kursname: kursname, username: username },
                success: function(response) {
                    if (response == 'success') {
                        alert('Kurs erfolgreich gebucht!');
                        location.reload(); // Seite neu laden, um die aktualisierte Liste zu zeigen
                    } else {
                        alert('Fehler beim Buchen des Kurses.');
                    }
                }
            });
        });
    });
</script>
</body>
</html>
