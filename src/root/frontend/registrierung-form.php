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
    <!-- Navbar -->
    <?php include './navbar.php'; ?>
</header>

<body>
<div class="logincontainer ">
    <div class="row justify-content-center"><br/><br/>
        <div class="col-md-5 gradient-custom-5">
            <br/><h1 style="text-align: center;color: #fffbfb; ">Registrierung</h1><br><br>

            <?php include '../backend/error_message.php'; ?>
            <form action="../backend/actions/registrierung.php" method="post">
                <div class="mb-4 " >
                    <label for="foa" class="form-label" ><b>Anrede</b></label>
                    <input type="text" class="form-control" id="foa" placeholder="Anrede" name="anrede" value="<?php echo isset($_POST['anrede']) ? $_POST['anrede'] : '' ?>">
                </div>

                <div class="mb-4">
                    <label for="firstname" class="form-label"><b>Vorname</b></label>
                    <input type="text" class="form-control" id="firstname" placeholder="Vorname" name="firstname" required value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                </div>

                <div class="mb-4">
                    <label for="lastname" class="form-label"><b>Nachname</b></label>
                    <input type="text" class="form-control" id="lastname" placeholder="Nachname" name="lastname" required value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                </div>

                <div class="mb-4 mt-3">
                    <label for="email" class="form-label"><b>E-Mail</b></label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                </div>

                <div class="mb-4">
                    <label for="username" class="form-label"><b>Username</b></label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                </div>

                <div class="mb-4">
                    <label for="pwd" class="form-label"><b>Passwort</b></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Passwort" name="pwd"
                           pattern=".{8,}" title="Das Passwort muss mindestens 8 Zeichen lang sein." required>
                </div>

                <div class="mb-4">
                    <label for="pwdconfirm" class="form-label"><b>Passwort bestätigen</b></label>
                    <input type="password" class="form-control" id="pwdconfirm" placeholder="Passwort bestätigen" name="pwdconfirm"
                           pattern=".{8,}" title="Das Passwort muss mindestens 8 Zeichen lang sein." required>
                </div>
                <div class="mb-4">
                    <label for="role" class="form-label"><b>Rolle</b></label>
                    <select class="form-select" id="role" name="role">
                        <option value="Student">Student</option>
                        <option value="Tutor">Tutor</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #07177c;" value="registrieren">Registrierung abschließen</button>
                </div><br/>
            </form>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>
</body>
</html>
