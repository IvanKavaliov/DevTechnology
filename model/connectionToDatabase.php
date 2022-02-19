<?php
    if (file_exists('config/database.php')) {
        $dbConnection = require_once "config/database.php";
    } else {
        $dbConnection = require_once "../config/database.php";
    }
    $connection = mysqli_connect($dbConnection['host'], $dbConnection['user'], $dbConnection['password'], $dbConnection['db']);
    if ($connection == false) {
        echo 'Failed to connect to the database!<br>';
        echo mysqli_connect_error();
        exit();
    }
