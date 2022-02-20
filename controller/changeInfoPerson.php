<?php
    require_once '../model/classPerson.php';
    $idPerson = $_POST['saveButton'];
    if (@$_FILES['image']['tmp_name'][0]) {
        require_once '../model/uploadImage.php';
        $fileName = uploadImage($_FILES['image']);
    } else {
        require_once "../model/connectionToDatabase.php";
        $query = "SELECT image FROM team WHERE id = $idPerson";
        $result = mysqli_query($connection, $query);
        $team = mysqli_fetch_assoc($result);
        $fileName = $team['image'];
    }
    $newInfoPerson = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']),
                                htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                                htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                                htmlspecialchars($_POST['link_email']), $fileName);
    require_once "../model/connectionToDatabase.php"; 
    $query = "UPDATE team SET `name` = '$newInfoPerson->name', `position` = '$newInfoPerson->position', `info` = '$newInfoPerson->info', `link_facebook` = '$newInfoPerson->link_facebook', `link_twitter` = '$newInfoPerson->link_twitter', `link_git` = '$newInfoPerson->link_git', `link_email` = '$newInfoPerson->link_email', `image` = '$newInfoPerson->person_image' WHERE id = $idPerson";
    $result = mysqli_query($connection, $query)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../View/adminPanel.php');
?>