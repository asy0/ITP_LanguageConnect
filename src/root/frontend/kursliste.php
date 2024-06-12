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
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table td, .table th {
            padding: 0.2rem;
        }

        .table {
            width: auto;
            margin: 0 auto;
        }

        .label {
            font-weight: bold;
            margin-bottom: 25px;
            text-align: left;
        }

        .data {
            text-align: left;
        }

        body {
            background-color: #f0f2f5;
        }

        main {
            padding: 30px;
        }

        .welcome-heading {
            text-align: center;
            text-decoration: underline;
            font-size: 3.5rem;
            font-weight: bold;
        }

        .btn-buchen {
            margin-top: 20px;
        }
        /*
        .buttonbox:nth-child(even) {
            background-color: rgba(76, 79, 84, 0.91); /* Hier kann ich die gewünschte Hintergrundfarbe für 2.Kind setzen  */
        /*}*/

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
                <table class="table table-borderless">
                    <tbody class="table-body">
                    <tr>
                        <td class="label">Anbieter &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Anbieter']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Kontaktdaten &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Anbieter_Email']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Sprache &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Sprache']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Beschreibung &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Beschreibung']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Format &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Kursformat']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Bezahlung &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Preis']; ?> €/h</td>
                    </tr>
                    <tr>
                        <td class="label">Zielgruppe &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Zielgruppe']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Anfang &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Kursdauer_Anfang']; ?></td>
                    </tr>
                    <tr>
                        <td class="label">Ende &nbsp;&nbsp;</td>
                        <td class="data"><?php echo $row['Kursdauer_Ende']; ?></td>
                    </tr>
                    </tbody>
                </table>
                <!-- Button zum Buchen des Kurses -->
                <button class="btn btn-outline-success btn-buchen" data-kursname="<?php echo $row['Kursname']; ?>">Kurs buchen</button>
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
