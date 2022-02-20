<?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    $userData = [
        "login" => 'Jack',
        "password" => '12345'
    ];
    if ($login === $userData['login'] && $password === $userData['password']) {
        echo "Good, right password";
    } else {
        require_once "../View/forms/authForm.php";
    }
