<?php
session_start();

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === true) {
    session_unset();
    session_destroy();
    header("location: start.php");
    exit;
}

