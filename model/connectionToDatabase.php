<?php
    // $id = '127.0.0.1';
    // $name_DB = 'root';
    // $password = 'root';
    // $db = 'small_team';
    $connectionDB = require_once 'connectionDB.php';
    $connection = mysqli_connect($connectionDB['id'], $connectionDB['name_DB'], $connectionDB['password'], $connectionDB['db']);
    if ($connection == false)
    {
        echo 'Failed to connect to the database!<br>';
        echo mysqli_connect_error();
        exit();
    }
?>