<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mein Profil</title>
</head>


<header>
    <!--- Navbar --->
    <?php include './navbar.php'; ?>
</header>
<br>
<br>



<body class="profilbody">

<div class="profilecontainer">
    <div class="profile-header">Mein Profil</div>
    <div class="form-group">
        <label for="profile-picture">Profilbild</label>
        <input type="file" id="profile-picture" name="profile_picture" accept="image/png, image/jpeg">
    </div>


    <div class="half-input-container">
        <div class="form-group">
            <label for="firstname">Vorname</label>
            <input type="text" id="firstname" placeholder="Vorname">
        </div>
        <div class="form-group">
            <label for="lastname">Nachname</label>
            <input type="text" id="lastname" placeholder="Nachname">
        </div>
    </div>

    <div class="form-group">
        <label for="email">E-Mail-Adresse</label>
        <input type="email" id="email" placeholder="Ihre E-Mail-Adresse" required>
    </div>
    </select>
    <div class="form-group">
        <input type="submit" value="Speichern" class="save-button">
    </div>
</div>
</div>
<!--- Footer --->
<?php include './footer.php'; ?>
</body>

</html>