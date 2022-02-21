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
                require_once "../View/adminPanel.php";
            } else {
                require_once "../View/forms/authForm.php";
            }
        }
    }

    $adminAuth = new Authorization($_POST['login'], $_POST['password']);
    $adminAuth->checkAuth($_POST['login'], $_POST['password']);
