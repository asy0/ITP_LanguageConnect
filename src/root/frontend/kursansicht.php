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

    <br><br><h1 class="welcome-heading">Kursansicht von  <?php echo $_SESSION['username'] ?> </h1><br>

    <div class="buttonbox">
        <a href="meine-kurse.php" class="button">Meine Kurse</a>
        <?php if(isset($_SESSION['isTutor']) && $_SESSION['isTutor']): ?>
            <br><a href="../frontend/kurserstellen.php" role="button" type="button" class="button" >Kurs erstellen &#128221; </a> </button>
        <?php endif ?>


    </div>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>


