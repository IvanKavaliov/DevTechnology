<?php
require_once '../model/auth.php';
$adminAuth = new Authorization($_POST['login'], $_POST['password']);
$adminAuth->checkAuth($_POST['login'], $_POST['password']);
