<?php
    require_once '../model/classPerson.php';
    $idPerson = $_POST['saveButton'];
    var_dump($_FILES['image']['tmp_name'][0]);
    die;
    if ($_FILES['image']['tmp_name'][0])
    {
        echo "GOOD, we can work";
    }
    else
    {
        echo "BAD, go to home";
    }
    die;
    $newInfoPerson = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']),
                                htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                                htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                                htmlspecialchars($_POST['link_email']), "team_3.png");
    require_once "../model/connectionToDatabase.php"; 
    $query = "UPDATE team SET `name` = '$newInfoPerson->name', `position` = '$newInfoPerson->position', `info` = '$newInfoPerson->info', `link_facebook` = '$newInfoPerson->link_facebook', `link_twitter` = '$newInfoPerson->link_twitter', `link_git` = '$newInfoPerson->link_git', `link_email` = '$newInfoPerson->link_email', `image` = 'team_4.png' WHERE id = $idPerson";
    $result = mysqli_query($connection, $query)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../View/adminPanel.php');
    exit();
?>