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
    <h1 class="welcome-heading">Erstelle deinen Kurs</h1>
    <div class="buttonbox">
        <form action="../../root/backend/actions/kurs_speichern.php" method="post">
            <label for="course-name">Kursname:</label>
            <input type="text" id="course-name" name="course_name" required><br><br>

            <label for="subject">Fach/Sprache:</label>
            <input type="text" id="subject" name="subject" required><br><br>

            <label for="description">Beschreibung:</label>
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="target-group">Zielgruppe:</label>
            <select id="target_group" name="target_group" required>
                <option value="Anfaenger">Anfänger</option>
                <option value="Fortgeschritten">Fortgeschritten</option>
                <option value="Experte">Experten</option>
            </select><br><br>

            <label for="format">Kursformat:</label>
            <select id="format" name="format" required>
                <option value="Online">Online</option>
                <option value="Praesenz">Präsenz</option>
            </select><br><br>

            <label for="duration">Kursdauer (Anfang)</label>
            <input type="date" id="termin_anfang" name="termin_anfang" placeholder="Beginndatum" required><br>
            <label for="duration">Kursdauer (Ende)</label>
            <input type="date" id="termin_ende" name="termin_ende" placeholder="Enddatum" required><br>

            <button type="submit">Erstellen</button>
        </form>
    </div>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>
