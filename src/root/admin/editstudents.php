<?php
    include_once '../backend/db_connect.php';
    include_once 'adminnav.php';

    $sql = "SELECT * FROM users WHERE role = 'Student'";
    $result = getDBConnection()->query($sql);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Studenten bearbeiten</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="content">
        <br><br><h1><b><u>Studenten bearbeiten</u></b></h1><br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Anrede</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Benutzername</th>
                <th>Rolle</th>
                <th>Status</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["user_id"] . "</td>
                        <td>" . $row["anrede"] . "</td>
                        <td>" . $row["firstname"] . "</td>
                        <td>" . $row["lastname"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["role"] . "</td>
                        <td>" . $row["status"] . "</td>
                       <td>
                             <a class='btn btn-success' href='useredit.php?id=" . $row["user_id"] . "'>Bearbeiten</a> 
                            <a class='btn btn-warning' href='userdeactive.php?id=" . $row["user_id"] . "'>Deaktivieren</a> 
                            <a class='btn btn-danger' href='userdelete.php?id=" . $row["user_id"] . "' onclick='return confirm(\"Möchtest du diesen Benutzer wirklich löschen?\");'>Löschen</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Keine Studenten gefunden</td></tr>";
            }
            getDBConnection()->close();
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>
