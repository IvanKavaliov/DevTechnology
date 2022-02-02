<?php
    $id = '127.0.0.1';
    $name_DB = 'root';
    $password = 'root';
    $db = 'small_team';
    $connection = mysqli_connect($id, $name_DB, $password, $db);
    if ($connection == false)
    {
        echo 'Failed to connect to the database!<br>';
        echo mysqli_connect_error();
        exit();
    }
?>