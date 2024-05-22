<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tutorprofil</title>
</head>

<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>
<br>
<br>

<body class="profilbody">

<div class="profilecontainer">
    <div class="profile-header">Mein Profil</div>

    <div class="profile-container">

        <?php
        include '../../root/backend/db_connect.php';
        $db = getDBConnection();
        $currentuser = $_SESSION['username'];
        $query = "SELECT anrede, firstname, lastname, username, email FROM users WHERE username = '$currentuser'";

        // Ausführen der Abfrage
        $result = mysqli_query($db, $query);

        // Überprüfen, ob Daten vorhanden sind
        if (mysqli_num_rows($result) > 0) {
            // Schleife über die Ergebnisse
            while ($row = mysqli_fetch_assoc($result)) {
                // Daten in die entsprechenden HTML-Elemente einfügen
                echo '<div class="profile-info">';
                echo '<p>Anrede: ' . $row["anrede"] . '</p>';
                echo '<p>Vorname: ' . $row["firstname"] . '</p>';
                echo '<p>Nachname: ' . $row["lastname"] . '</p>';
                echo '<p>Username: ' . $row["username"] . '</p>';
                echo '<p>E-Mail: ' . $row["email"] . '</p>';
                echo '</div>';
                echo '<br>';
            }
        } else {
            echo "Keine Daten gefunden.";
        }
        ?>

        <form id="updateForm" method="POST" action="..\backend\actions\update_profile.php">
            <div class="half-input-container">
                <div class="form-group">
                    <label for="firstname">Vorname ändern</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Vorname">
                </div>
                <div class="form-group">
                    <label for="lastname">Nachname ändern</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Nachname">
                </div>
            </div>

            <div class="form-group">
                <label for="email">E-Mail-Adresse ändern</label>
                <input type="email" id="email" name="email" placeholder="Ihre E-Mail-Adresse" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Speichern" class="save-button">
            </div>
            
        </form>
        <div class="form-group">
                <button onclick="window.location.href = '../Frontend/Kurserstellen.php';">Zu meinen Kursen</button>

            </div>
    </div>
</div>
<!--- Footer --->
<?php include './footer.php'; ?>
</body>
</html>
