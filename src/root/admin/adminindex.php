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
  <img class="img"
       "style:"width: 100%; height: auto; background-size: cover; background-position:center;"
       src="./img/logo.png" alt="Navlogo" >

  </a>
  <a class="active" href="#home" aria-disabled="true"  disabled> Allgemein</a>
  <a href="adminindex.php">Startseite</a>
  <a href="../news.php">News</a>
  <a href="../faq.php">FAQ</a>
  <a href="../impressum.php">Impressum</a>
  <a href="#about"></a>

  <a class="active" href="#home" disabled>Student</a>
  <a href="#contact">Alle Studenten anzeigen</a>
  <a href="#news"> Status ändern</a>
  <a href="#about">Kategorie anzeigen</a>


  <a class="active" href="#home" disabled>Tutoren</a>
  <a href="#news">Status ändern</a>
  <a href="#about"> Gebuchter Tutor bearbeiten</a>
  <a href="">Alle Tutor anzeigen</a>

  <a class="active" href="#home" disabled>User</a>
  <a href="#news"> User deaktivieren</a>
  <a href="editAllUser.php">User bearbeiten</a>
  <a href="showallUser.php">Alle User anzeigen</a>

  <a class="active" href="#home" disabled>News</a>
  <a href="../news.php"> News erstellen</a>
  <a href="../news.php">News löschen</a>

  <br>
  <a href="../logout.php" role="button" type="button" class="btn btn-danger">Logout</button> </a>
  
</div>

<div class="content">

  <br><br><h1><b><u>HALLO ADMIN</u></b></h1><br><br>
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
  <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>
  <h2>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</h2>
  



<br><br>
<div class="container">
  


  <div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6 well">
          <h4>Tutor</h4>
          <hr>
          <ul>
              <li><a href="">Tutorien</a></li>
              <li><a href="">Alle Buchungen</a></li>
              <li><a href="">Reservierte Lehrer bearbeiten</a></li>
          </ul>
      </div>
     <div class="col-md-3"></div>
  </div>
  
  
  <div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6 well">
          <h4>News </h4>
          <hr>
          <ul>
              <li><a href="../news.php">News erstellen</a></li>
              <li><a href="../news.php">News löschen</a></li>
          </ul>
      </div>
      <div class="col-md-3"></div>
  </div>


  <div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6 well">
          <h4>User </h4>
          <hr>
          <ul>
              <li><a href="editStatusUser.php">User deaktivieren</a></li>
              <li><a href="showallUser.php">User Übersicht</a></li>
          </ul>
      </div>
      <div class="col-md-3"></div>
  </div><br>

</div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>



</body>
</html>
