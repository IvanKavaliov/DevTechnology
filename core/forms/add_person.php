<?php
    require_once '../../includes/class_person.php';
    $new_person = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']), 
                            htmlspecialchars($_POST['info']), htmlspecialchars($_POST['link_facebook']), 
                            htmlspecialchars($_POST['link_twitter']), htmlspecialchars($_POST['link_git']), 
                            htmlspecialchars($_POST['link_email']), "team_3.png");
    require_once "../orm/Database.php";
    require_once "../../Model/queries.php";
    addPersonQuery($new_person, $connection);
    mysqli_close($connection);
    header('location: ../table_team.php');
    exit();
?>