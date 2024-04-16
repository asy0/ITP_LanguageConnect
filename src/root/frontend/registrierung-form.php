<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registrieren</title>
</head>
<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>

<body>
<div class="logincontainer ">
    <div class="row justify-content-center"><br/><br/>
        <div class="col-md-5 gradient-custom-5">
<br/><h1 style="text-align: center;color: #fffbfb; ">Registrierung</h1><br><br>

<?php if(isset($message)){
echo '<br> </br>';
echo $message;
}
?>

<form action="..\backend\actions/registrierung.php" method="post">


        <div class="mb-4 " >
            <label for="foa" class="form-label" ><b>Anrede</b></label>
            <input type="text" class="form-control" id="foa" placeholder="Anrede" name="foa">
          </div>
          
          <div class="mb-4">
              <label for="firstname" class="form-label"><b>Vorname</b></label>
            <input type="text" class="form-control" id="firstname" placeholder="Vorname" name="firstname">
          </div>
    
          <div class="mb-4">
              <label for="lastname" class="form-label"><b>Nachname</b></label>
            <input type="text" class="form-control" id="lastname" placeholder="Nachname" name="lastname">
          </div>
    
          <div class="mb-4 mt-3">
              <label for="email" class="form-label"><b>E-Mail</b></label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>
    
          <div class="mb-4">
              <label for="username" class="form-label"><b>Username</b></label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
          </div>
          
          <div class="mb-4">
              <label for="pwd" class="form-label"><b>Passwort</b></label>
            <input type="password" class="form-control" id="pwd" placeholder="Passwort" name="pwd">
          </div>
    
          <div class="mb-4">
              <label for="pwdconfirm" class="form-label"><b>Passwort bestätigen</b></label>
            <input type="password" class="form-control" id="pwdconfirm" placeholder="Passwort bestätigen" name="pwdconfirm">
          </div><br/>

            <div class="text-center">
                <button type="submit" class="btn btn-primary"style="background-color: #07177c;" value="registrieren">Registrierung abschließen</button>
            </div><br/>
      </form>

    </div>
    </div>
    </div>


<?php include './footer.php'; ?>
</body>
</html>
