<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
    <title>ADMIN</title>

</head>
<body>

<div class="sidebar">
    <a class="adminindex" href="adminindex.php" >
        <img class="img"
        "style:"width: 100%; height: auto; background-size: cover; background-position:center;"
        src="./img/adminlogo.png" alt="Admin Navlogo">
    </a>

    <a class="active" href="#home" aria-disabled="true"  disabled> Allgemein </a>
    <a href="adminindex.php">Meine Startseite</a>
    <a href="../frontend/start.php">Startseite</a>
    <a href="../frontend/hilfeseite.php">FAQ</a>
    <a href="../frontend/impressum.php">Impressum</a>

    <a class="active" href="#home" disabled>Alle Benutzer</a>
    <a href="showallUsers.php">Alle Benutzer anzeigen</a>


    <a class="active" href="#home" disabled> Student </a>
    <a href="showstudents.php">Studenten anzeigen</a>
    <a href="editstudents.php">Studenten bearbeiten</a>


    <a class="active" href="#home" disabled> Tutoren </a>
    <a href="showtutors.php">Tutoren anzeigen</a>
    <a href="edittutors.php">Tutoren bearbeiten</a>


    <a class="active" href="#home" disabled> Kurse </a>
    <a href="showcourse.php">Alle Kurse anzeigen</a>
    <a href="editcourse.php">Kurse bearbeiten</a><br>

    <a href="../backend/actions/logout.php" role="button" type="button" class="btn btn-danger"> Logout  </a>

  </div>

</body>
</html>
