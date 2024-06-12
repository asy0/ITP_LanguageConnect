<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
    </style>
    <title>Profil</title>
</head>

<header>
    <!--- Navbar --->
    <?php include './navbar.php';?>
</header>
<body>
<main>
    <div class="container mt-5">
        <br><h1 class="welcome-heading"><b><u>Kurs erstellen</u></b></h1><br>
        <div class="row align-items-center" style="height: 100%;">
            <div class="col-md-6 order-2 order-md-1">
                <div class="card card-custom container-custom">
                    <div class="card-body">
                        <form action="../../root/backend/actions/kurs_speichern.php" method="post">
                            <div class="mb-3">
                                <label for="course-name" class="form-label">Kursname</label>
                                <input type="text" class="form-control" id="course_name" name="course_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Fach/Sprache</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Beschreibung</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="target-group" class="form-label">Zielgruppe</label>
                                <select class="form-select" id="target_group" name="target_group">
                                    <option value="Anfaenger">Anfänger</option>
                                    <option value="Fortgeschritten">Fortgeschritten</option>
                                    <option value="Experte">Experten</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Preis pro Stunde</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="format" class="form-label">Kursformat</label>
                                <select class="form-select" id="format" name="format">
                                    <option value="online">Online</option>
                                    <option value="praesenz">Präsenz</option>
                                </select>
                            </div>
                            <label for="duration" class="form-label">Kursdauer (Anfang) </label><br>
                            <input type="date" id="termin_anfang" name="termin_anfang" placeholder="Beginndatum" required><br><br>
                            <label for="duration" class="form-label">Kursdauer (Ende) </label><br>
                            <input type="date" id="termin_ende" name="termin_ende" placeholder="Enddatum" required><br> <br><br>
                            <button class="btn btn-warning btn-rounded" type="submit">Erstellen</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 image-container">
                <img src="../img/createcourse.jpg" alt="Bildbeschreibung" class="img-fluid">
            </div>
        </div>
    </div>
</main>
<footer>
    <!--- Footer --->
    <?php include './footer.php';?>
</footer>
</body>
</html>
