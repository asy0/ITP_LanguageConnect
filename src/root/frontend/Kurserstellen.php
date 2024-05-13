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
    <h1 class="welcome-heading">Erstell dein Kurs</h1>
<div class="buttonbox">
    <form action="/submit-course" method="post">
        <label for="course-name">Kursname:</label>
        <input type="text" id="course-name" name="course_name" required><br><br>

        <label for="subject">Fach/Sprache:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="description">Beschreibung:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="target-group">Zielgruppe:</label>
        <select id="target-group" name="target_group">
            <option value="beginner">Anfänger</option>
            <option value="intermediate">Fortgeschritten</option>
            <option value="advanced">Experten</option>
        </select><br><br>

        <label for="prerequisites">Vorkenntnisse:</label>
        <input type="text" id="prerequisites" name="prerequisites" required><br><br>

        <label for="payment-per-hour">Bezahlung pro Stunde (€):</label>
        <input type="number" id="payment-per-hour" name="payment_per_hour" min="0" step="0.01" required><br><br>

        <label for="format">Kursformat:</label>
        <select id="format" name="format">
            <option value="online">Online</option>
            <option value="in-person">Präsenz</option>

        </select><br><br>

        <label for="duration">Kursdauer (Anzahl der Stunden):</label>
        <input type="number" id="duration" name="duration" min="1" required><br><br>

        <button type="submit">Erstellen</button>
</div>
    </form>
</main>

<footer>
    <!--- Footer --->
    <?php include './footer.php'; ?>
</footer>

</body>
</html>


