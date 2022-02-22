<?php
    require_once '../model/auth.php';
    $adminAuth = new Authorization($_POST['login'], $_POST['password']);
    if ($adminAuth->checkAuth($_POST['login'], $_POST['password'])) {
        header('location: ../View/adminPanel.php');
    } else {
        header('location: ../View/forms/authForm.php');
    }
