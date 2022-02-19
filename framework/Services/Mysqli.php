<?php

namespace Framework\Services;

class Mysqli
{
    private $connection;

    public function start() 
    {
        $dbConnection = require_once "config/database.php";
        $this->connection = mysqli_connect($dbConnection['host'], $dbConnection['user'], $dbConnection['password'], $dbConnection['db']);
        if ($this->connection == false) {
            echo 'Failed to connect to the database!<br>';
            echo mysqli_connect_error();
            exit();
        }
    }

    public function finish()
    {
        mysqli_close($this->connection);
    }
}