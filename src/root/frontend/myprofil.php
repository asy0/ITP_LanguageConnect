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
    <!-- Navbar -->
    <?php include './navbar.php'; ?>
</header>

<body class="profilbody">
<div class="container mt-5">
    <br><div class="profile-header text-center"><br><h1><b>Mein Profil</b></h1></div><br>

    <div class="profile-container">
        <?php
        include '../../root/backend/db_connect.php';
        $db = getDBConnection();
        $currentuser = $_SESSION['username'];
        $query = "SELECT anrede, firstname, lastname, username, email FROM users WHERE username = '$currentuser'";

        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<br><table class="table profile-table">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr><th>Anrede </th><td>' . $row["anrede"] . '</td></tr>';
                echo '<tr><th>Vorname </th><td>' . $row["firstname"] . '</td></tr>';
                echo '<tr><th>Nachname </th><td>' . $row["lastname"] . '</td></tr>';
                echo '<tr><th>Username </th><td>' . $row["username"] . '</td></tr>';
                echo '<tr><th>E-Mail </th><td>' . $row["email"] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo "<p class='text-center'>Keine Daten gefunden.</p>";
        }
        ?>

        <form id="updateForm" method="POST" action="../backend/actions/update_profile.php" class="mt-4">
            <div class="half-input-container">
                <div class="form-group w-50">
                    <label for="firstname" class="text-center"><b> &nbsp;&nbsp;&nbsp;Vorname ändern</b></label>
                    <input type="text" id="firstname" name="firstname" class="form-control rounded-pill" placeholder="Vorname">
                </div>
                <div class="form-group w-50">
                    <label for="lastname" class="text-center"><b> &nbsp;&nbsp;&nbsp;Nachname ändern</b></label>
                    <input type="text" id="lastname" name="lastname" class="form-control rounded-pill" placeholder="Nachname">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="text-center"><b>&nbsp;&nbsp;&nbsp; E-Mail-Adresse ändern</b></label>
                <input type="email" id="email" name="email" class="form-control rounded-pill" placeholder="Ihre E-Mail-Adresse" required>
            </div>

            <div class="form-group text-center">
                <input type="submit" value="Speichern" class="save-button">
            </div>
        </form>

        <div class="form-group text-center mt-4">
            <button onclick="window.location.href = 'meine-kurse.php';" class="btn btn-info">Zu meinen Kursen</button>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include './footer.php'; ?>
</body>
</html>
