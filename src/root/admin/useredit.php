<?php
include_once '../backend/db_connect.php';
$withSidebar = true;
include_once 'adminnav.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $anrede = $_POST['anrede'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $status = $_POST['status'];

        $sql = "UPDATE users SET anrede = ?, firstname = ?, lastname = ?, email = ?, username = ?, role = ?, status = ? WHERE user_id = ?";
        $stmt = getDBConnection()->prepare($sql);
        $stmt->bind_param("sssssssi", $anrede, $firstname, $lastname, $email, $username, $role, $status, $user_id);

        if ($stmt->execute()) {
            echo "Benutzer erfolgreich aktualisiert.";
        } else {
            echo "Fehler beim Aktualisieren des Benutzers.";
        }
        $stmt->close();
        getDBConnection()->close();

        header("Location: showallUsers.php");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $stmt = getDBConnection()->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Benutzer nicht gefunden.";
            exit();
        }
        $stmt->close();
    }
} else {
    echo "Ungültige Anfrage.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Benutzer bearbeiten</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1><b>Benutzer bearbeiten</b></h1>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="anrede" class="form-label">Anrede:</label>
                        <input type="text" class="form-control" id="anrede" name="anrede" value="<?php echo $row['anrede']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Vorname:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nachname:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Benutzername:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Rolle:</label>
                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $row['role']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $row['status']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-info">Speichern</button>
                    <a href="showallUsers.php" class="btn btn-secondary">Abbrechen</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

