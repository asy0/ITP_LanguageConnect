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
    <br><br><h1><b> Herzlich Willkommen  <?php echo $_SESSION['username'] ?>!</b></h1>

    <div class="buttonbox">
    <a href="tutorprofil.php" class="button">Profilansicht</a>
    <!--<a href="kursansicht.php" class="button">Kursansicht</a> -->
    <a href="kursliste.php" class="button">Kursliste</a>
    </div>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>


