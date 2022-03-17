<?php
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
