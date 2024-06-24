<?php
include_once '../backend/db_connect.php';
include_once 'adminnav.php';

// Check if gender filter is set
$genderFilter = isset($_GET['gender']) ? $_GET['gender'] : '';

// Modify the SQL query based on the filter
$sql = "SELECT * FROM users";
$countSql = "SELECT COUNT(*) AS count FROM users";
if ($genderFilter) {
    $sql .= " WHERE anrede = ?";
    $countSql .= " WHERE anrede = ?";
}

$conn = getDBConnection();

// Execute count query
$countStmt = $conn->prepare($countSql);
if ($genderFilter) {
    $countStmt->bind_param("s", $genderFilter);
}
$countStmt->execute();
$countResult = $countStmt->get_result();
$countRow = $countResult->fetch_assoc();
$userCount = $countRow['count'];

// Execute main query
$stmt = $conn->prepare($sql);
if ($genderFilter) {
    $stmt->bind_param("s", $genderFilter);
}
$stmt->execute();
$resultData = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Alle Benutzer</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="admin.css">
    <style>
        th {
            background-color: #2a8c0a;
            color: white;
        }
        tr:nth-child(even) {
            background-color: rgb(201, 167, 99);
        }
        .status-0 {
            background-color: #ffcccc; /* Hellrote Farbe für Status 0 */
        }
    </style>
</head>

<body>
<div class="content">
    <br><br><h1><b><u>Alle Benutzer</u></b></h1><br>
    <form method="GET" action="">
        <label for="gender">Filtern nach Geschlecht:</label>
        <select name="gender" id="gender" onchange="this.form.submit()">
            <option value="">Alle</option>
            <option value="Herr" <?php if ($genderFilter == 'Herr') echo 'selected'; ?>>Herr</option>
            <option value="Frau" <?php if ($genderFilter == 'Frau') echo 'selected'; ?>>Frau</option>
        </select>
    </form>
    <br>
    <p>Anzahl der Benutzer: <?php echo $userCount; ?></p>
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
        </tr>
        </thead>
        <tbody>
        <?php

        while ($row = $resultData->fetch_assoc()) {
            if ($row['user_id'] == 1 && $row['role'] == 'Admin') {
                continue; // Skip the row with ID 1 and role 'Admin'
            }
            $statusClass = $row['status'] == 0 ? 'status-0' : '';
            echo "<tr>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td>" . $row['anrede'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td class='$statusClass'>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
