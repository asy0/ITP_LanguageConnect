<?php
session_start();


if (isset($_GET['action'])){
    $action = $_GET['action'];

    switch($action) {

        case "login": include("actions/login.php");
            break;

        case "logout": include("actions/logout.php");
            break;

        case"registrierung": include ("actions/registrierung.php");
            break;

        case "newreservation": include("actions/newreservation.php");
            break;

        case "newnews": include("actions/newnews.php");
            break;

        case "changeprofiledata": include("actions/changeprofiledata.php");
            break;

        case "changepassword": include("actions/changepassword.php");
            break;

        case "admineditusers": include("actions/admineditusers.php");
            break;

        case "admineditreservation": include("actions/admineditreservation.php");
            break;

    }

}

