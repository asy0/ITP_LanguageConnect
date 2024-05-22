<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Herzlich Willkommen</title>
</head>
<header>
    <!--- Navbar --->
    <?php include '../frontend/navbar.php'; ?>
</header>

<body>

<div style="margin-left:130px;">
<br>
<br>
    <br><br><h1><b> Herzlich Willkommen  <?php echo $_SESSION['username'] ?>!</b></h1>
    <br><p> LanguageConnect wünscht dir einen schönen Tag... &#128516;&#128525;</p>
    <br><a href="../frontend/kursansicht.php" role="button" type="button" class="btn btn-outline-info" >Meine Kurse &#128151; </a> </button>
    <br><a href="../frontend/myprofil.php" role="button" type="button" class="btn btn-outline-info" >Mein Profil &#128100; </a> </button>
    <br><a href="../frontend/kursliste.php" role="button" type="button" class="btn btn-outline-info" >Kursliste &#128218; </a> </button>
    <br><a href="../frontend/kurserstellen.php" role="button" type="button" class="btn btn-outline-info" >Kurs erstellen &#128221; </a> </button>
   <br><br>
    <br><a href="../frontend/logout.php" role="button" type="button" class="btn btn-outline-info" >Logout &#128682; </a> </button>
    <br><br>
</div>




<div style="padding-top: 100px;"></div>
   <br> <footer>
        <?php include '../frontend/footer.php'; ?>
    </footer>
</body>
</html>



