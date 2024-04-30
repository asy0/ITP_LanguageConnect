<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

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
        <img class="img" src="img/nav1.jpg"  alt="Navlogo">
    </a>
    <a class="active" href="#home" aria-disabled="true"  disabled> Allgemein</a>
    <a href="adminindex.php">Startseite</a>
    <a href="../frontend/news.php">News</a>
    <a href="../frontend/hilfeseite.php">FAQ</a>
    <a href="../frontend/impressum.php">Impressum</a>
    <a href="#about"></a>

    <a class="active" href="#home" disabled>User</a>
    <a href="editStatusUser.php">Userstatus ändern</a>
    <a href="editAllUser.php">User bearbeiten</a>
    <a href="showallUser.php">Alle User anzeigen</a>

    <a class="active" href="#home" disabled>Buchungen</a>
    <a href="">Alle Buchungen anzeigen</a>

    <a class="active" href="#home" disabled>News</a>
    <a href="../news.php"> News erstellen</a>
    <a href="../news.php">News löschen</a>





    <a class="active" href="#home" disabled>Tutoren</a>
    <a href="#news"> Status ändern</a>
    <a href="#about">Tutoren anzeigen</a>
    <a href="#contact">Alle Tutoren anzeigen</a>
    <br>
    <a href="../logout.php" role="button" type="button" class="btn btn-danger">Logout</button> </a>

</div>
