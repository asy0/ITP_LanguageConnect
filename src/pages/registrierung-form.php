
<!DOCTYPE html>
<html>
<head>
<?php
    include 'src\root\frontend\navbar.php';
   
?>

</head>
<body>
<h1>Registrierung</h1><br><br>

<?php if(isset($message)){
echo '<br> </br>';
echo $message;
}
?>

        <form action="index.php?action=registrierung" method="post">

        <div class="mb-3">
            <label for="foa" class="form-label">Anrede:</label>
            <input type="text" class="form-control" id="foa" placeholder="Anrede" name="foa">
          </div>
          
          <div class="mb-3">
            <label for="firstname" class="form-label">Vorname:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Vorname" name="firstname">
          </div>
    
          <div class="mb-3">
            <label for="lastname" class="form-label">Nachname:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Nachname" name="lastname">
          </div>
    
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">E-Mail:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>
    
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
          </div>
          
          <div class="mb-3">
            <label for="pwd" class="form-label">Passwort:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Passwort" name="pwd">
          </div>
    
          <div class="mb-3">
            <label for="pwdconfirm" class="form-label">Passwort bestätigen:</label>
            <input type="password" class="form-control" id="pwdconfirm" placeholder="Passwort bestätigen" name="pwdconfirm">
          </div>
    
        <button type="submit" class="btn btn-primary" value="registrieren">Registrierung abschließen</button>
      </form>


    <?php include './root/frontend/footer.php'; ?>
</body>
</html>
