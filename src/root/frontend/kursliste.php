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
    <div class="buttonbox">
        <div class="profile-pic">
            <!-- Hier könnte Ihr Bild eingefügt werden -->
            <img src="https://www.oefb.at/oefb2/images/1278650591628556536_6e8a657959df7155a926-1,0-320x320.png" alt="Beschreibung des Bildes">
        </div>
        <div class="info">
            <div><strong>Name:</strong> Max Mustermann</div>
            <div><strong>Fach:</strong> Informatik</div>
            <div><strong>Bezahlung:</strong> 20€/h</div>
            <div><strong>Email:</strong> max@example.com</div>
        </div>
    </div>
    <div class="buttonbox">
        <div class="profile-pic">
            <!-- Hier könnte Ihr Bild eingefügt werden -->
            <img src="https://www.oefb.at/oefb2/images/1278650591628556536_6e8a657959df7155a926-1,0-320x320.png" alt="Beschreibung des Bildes">
        </div>
        <div class="info">
            <div><strong>Name:</strong> Max Mustermann</div>
            <div><strong>Fach:</strong> Informatik</div>
            <div><strong>Bezahlung:</strong> 20€/h</div>
            <div><strong>Email:</strong> max@example.com</div>
        </div>
    </div>
    <div class="buttonbox">
        <div class="profile-pic">
            <!-- Hier könnte Ihr Bild eingefügt werden -->
            <img src="https://www.oefb.at/oefb2/images/1278650591628556536_6e8a657959df7155a926-1,0-320x320.png" alt="Beschreibung des Bildes">
        </div>
        <div class="info">
            <div><strong>Name:</strong> Max Mustermann</div>
            <div><strong>Fach:</strong> Informatik</div>
            <div><strong>Bezahlung:</strong> 20€/h</div>
            <div><strong>Email:</strong> max@example.com</div>
        </div>
    </div>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>
