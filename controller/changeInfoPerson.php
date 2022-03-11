<?php
    require_once '../model/classPerson.php';
    require_once "../model/connectionToDatabase.php";
    $db = new Database();
    $idPerson = $_POST['saveButton'];
    require_once "../model/queries.php";
    $query = getNameImagePerson($idPerson);
    $user = $db->query($query);
    if (@$_FILES['image']['tmp_name'][0]) {
        require_once '../model/uploadImage.php';
        $fileName = uploadImage($_FILES['image']);
        $fileNameDelete = $user[0]['image'];
        require_once '../model/deletePersonImage.php';
        deletePersonImage($fileNameDelete);
    } else {
        $fileName = $user[0]['image'];
    }
    $newInfoPerson = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']),
                                htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                                htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                                htmlspecialchars($_POST['link_email']), $fileName);
    $query = "UPDATE team SET `name` = '$newInfoPerson->name', `position` = '$newInfoPerson->position', `info` = '$newInfoPerson->info', `link_facebook` = '$newInfoPerson->link_facebook', `link_twitter` = '$newInfoPerson->link_twitter', `link_git` = '$newInfoPerson->link_git', `link_email` = '$newInfoPerson->link_email', `image` = '$newInfoPerson->person_image' WHERE id = $idPerson";
    $result = $db->query($query);
    header('location: ../View/adminPanel.php');
?>