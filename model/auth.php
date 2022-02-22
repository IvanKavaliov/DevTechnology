<?php

    class Authorization {
        private $login;
        private $password;

        public function __construct($userLogin, $userPassword)
        {
            $this->login = $userLogin;
            $this->password = $userPassword;
        }

        public function checkAuth($userLogin, $userPassword)
        {
            $userData = require_once "adminData.php";
            if ($userLogin === $userData['login'] && $userPassword === $userData['password']) {
                return true;
            } else {
                return false;
            }
        }
    }

