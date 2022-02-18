<?php
    require_once '../model/classPerson.php';
    var_dump($_FILES);
    die;
    require_once '../model/uploadImage.php';
    $fileName = uploadImage($_FILES['image']);
    $new_person = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']), 
                            htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                            htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                            htmlspecialchars($_POST['link_email']), $fileName);
    require_once "../model/connectionToDatabase.php";
    require_once "../model/queries.php";
    addPersonQuery($new_person, $connection);
    mysqli_close($connection);
    header('location: ../View/adminPanel.php');
    exit();
?>