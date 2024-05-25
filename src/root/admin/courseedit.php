<?php
include_once '../backend/db_connect.php';
include_once 'adminnav.php';

if (isset($_GET['id'])) {
    $kursID = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $kursname = $_POST['kursname'];
        $sprache = $_POST['sprache'];
        $kursformat = $_POST['kursformat'];
        $kursdauer_anfang = $_POST['kursdauer_anfang'];
        $kursdauer_ende = $_POST['kursdauer_ende'];
        $gebucht_von = $_POST['gebucht_von'];
        $gebucht = $_POST['gebucht'];
        $beschreibung = $_POST['beschreibung'];

        $sql = "UPDATE kurse SET Kursname = ?, Sprache = ?, Kursformat = ?, Kursdauer_Anfang = ?, Kursdauer_Ende = ?, Gebucht_von = ?, Gebucht = ?, Beschreibung = ? WHERE KursID = ?";
        $stmt = mysqli_stmt_init(getDBConnection());

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssssi", $kursname, $sprache, $kursformat, $kursdauer_anfang, $kursdauer_ende, $gebucht_von, $gebucht, $beschreibung, $kursID);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: showcourse.php?editsuccess");
        } else {
            echo "Fehler: " . mysqli_error(getDBConnection());
        }

        getDBConnection()->close();
    } else {
        $sql = "SELECT * FROM kurse WHERE KursID = ?";
        $stmt = mysqli_stmt_init(getDBConnection());

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $kursID);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $kurs = $result->fetch_assoc();
            mysqli_stmt_close($stmt);
        } else {
            echo "Fehler: " . mysqli_error(getDBConnection());
        }
    }
} else {
    header("Location: showcourse.php?editerror");
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kurs bearbeiten</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <br> <h2><b><u>Kurs bearbeiten</u></b></h2><br>
        <form action="courseedit.php?id=<?php echo $kursID; ?>" method="post">
            <div class="mb-3">
                <label for="kursname" class="form-label">Kursname</label>
                <input type="text" class="form-control" id="kursname" name="kursname" value="<?php echo $kurs['Kursname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="sprache" class="form-label">Sprache</label>
                <input type="text" class="form-control" id="sprache" name="sprache" value="<?php echo $kurs['Sprache']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="kursformat" class="form-label">Kursformat</label>
                <input type="text" class="form-control" id="kursformat" name="kursformat" value="<?php echo $kurs['Kursformat']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="kursdauer_anfang" class="form-label">Kursdauer Anfang</label>
                <input type="date" class="form-control" id="kursdauer_anfang" name="kursdauer_anfang" value="<?php echo $kurs['Kursdauer_Anfang']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="kursdauer_ende" class="form-label">Kursdauer Ende</label>
                <input type="date" class="form-control" id="kursdauer_ende" name="kursdauer_ende" value="<?php echo $kurs['Kursdauer_Ende']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="gebucht_von" class="form-label">Gebucht von</label>
                <input type="text" class="form-control" id="gebucht_von" name="gebucht_von" value="<?php echo $kurs['Gebucht_von']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="gebucht" class="form-label">Gebucht</label>
                <input type="text" class="form-control" id="gebucht" name="gebucht" value="<?php echo $kurs['Gebucht']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="beschreibung" class="form-label">Beschreibung</label>
                <textarea class="form-control" id="beschreibung" name="beschreibung" rows="3" required><?php echo $kurs['Beschreibung']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-info">Speichern</button>
            <a href="showcourse.php" class="btn btn-secondary">Abbrechen</a>
        </form>
       </div>
     </div>
  </div>
</body>
</html>
