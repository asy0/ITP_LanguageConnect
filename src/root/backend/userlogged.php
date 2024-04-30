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
    <br><h1><b> Herzlich Willkommen  <?php echo $_SESSION['username'] ?>!</b></h1>

    <br><p> LanguageConenct wünscht dir einen schönen Tag... &#128516;&#128525;</p>
    <br><a href="booknow.php" role="button" type="button" class="btn btn-outline-info" >Jetzt -> ... &#128151; </a> </button>





</div>
<?php include '../frontend/footer.php'; ?>
</body>
</html>



