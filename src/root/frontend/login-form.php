<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Anmelden</title>
    </head>
    <header>
        <!--- Navbar --->
        <?php include './navbar.php'; ?>
    </header>

 <body>
   <div class="logincontainer">
       <div class="row justify-content-center">
           <div class="col-md-6">
        <?php if (isset($message)) {
            echo '<br>';
            echo $message;
            echo '<br>';
        }
        ?>

        <h1 style="text-align: center">Anmeldung </h1>
        <?php if (isset($failedAttempt)): ?>
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle"></i>
                Username oder Passwort ist falsch. Bitte probieren Sie es erneut.
            </div>
        <?php endif; ?>


        <form action="../backend/actions/login.php" method="post">
            <div class="form-group">
                <label for="username">Username </label>
                <input type="text" id="username" name="username"
                       class="form-control" required="required"/>
            </div>

            <div class="form-group">
                <label for="password">Passwort </label>
                <input type="password" id="password" name="password"
                       class="form-control" required="required"/>
            </div><br>
            <div class="text-center">
                <input type="submit" class="btn text-white" data-mdb-ripple-init style="background-color: #07177c;" value="Login">
            </div>

        </form>
    </div>
</div>
</div>

    <?php include './footer.php'; ?>
  </body>
</html>

