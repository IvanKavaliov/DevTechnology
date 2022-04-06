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
                session_start();
                $_SESSION['login'] = $userData['login'];
                $_SESSION['password'] = $userData['password'];
                header('location: ../View/adminPanel.php');
            } else {
                $authMessage = 'WARNING! Invalid login or password entered!';
                require_once '../View/forms/authForm.php';
            }
        }
    }

