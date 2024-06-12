<?php
include 'C:\xampp\htdocs\ITP_LanguageConnect\src\root\backend\db_connect.php';

function hashPasswords()
{
    $db = getDBConnection();
    $sql = "SELECT user_id, password FROM users";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row['user_id'];
        $plainPassword = $row['password'];

        if (strpos($plainPassword, '$2y$') !== 0) {
            $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE users SET password = ? WHERE user_id = ?";
            $updateStmt = $db->prepare($updateSql);
            $updateStmt->bind_param("si", $hashedPassword, $id);
            $updateStmt->execute();
        }
    }

    $db->close();
    echo "Passwörter wurden erfolgreich gehasht.";
}

hashPasswords();

