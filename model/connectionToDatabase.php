<?php
    // Work version
    // $connectionDB = require_once 'connectionDB.php';
    // $connection = mysqli_connect($connectionDB['host'], $connectionDB['nameDB'], $connectionDB['password'], $connectionDB['dbname']);
    // if ($connection == false)
    // {
    //     echo 'Failed to connect to the database!<br>';
    //     echo mysqli_connect_error();
    //     exit();
    // }
    // class connection DB PDO
    class Database {

        private $pdo;

        public function __construct()
        {
            $this->connection();
        }

        private function connection()
        {
            $connectionDB = require_once 'connectionDB.php';
            $this->pdo = new PDO("mysql:host=$connectionDB[host];dbname=$connectionDB[dbname];charset=$connectionDB[charset]", "$connectionDB[nameDB]", "$connectionDB[password]");
            
            return $this;
        }

        public function execute($sql)
        {
            $sth = $this->pdo->prepare($sql);

            return $sth->execute();
        }

        public function query($sql)
        {
            $sth = $this->pdo->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);

            if ($result === false) {
                return [];
            } else {
                return $result;
            }
        }
    }

    // $db = new Database();
    // $user = $db->query("SELECT * FROM team");
    // $db->execute("INSERT INTO team (name, position, info, link_facebook, link_twitter, link_git, link_email, image) 
    // VALUES ('Ivan', 'Senior', 'bla bla bla', '222', '222', '222', '222', '222')");
    // foreach ($user as $key)
    // {
    //     var_dump($key["id"]);
        // die;
        // foreach ($key as $value)
        //     echo $value."<br>";
    // }
    // var_dump($user[1]['name']);
    // print_r($user);
