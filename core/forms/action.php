<?php
    $name = htmlspecialchars($_POST['name']);
    $position = htmlspecialchars($_POST['position']);
    $info = htmlspecialchars($_POST['info']);
    $link_facebook = htmlspecialchars($_POST['link_facebook']);
    $link_twitter = htmlspecialchars($_POST['link_twitter']);
    $link_git = htmlspecialchars($_POST['link_git']);
    $link_email = htmlspecialchars($_POST['link_email']);
    $person_image = "team_5.png";
    include "../orm/Database.php";
    $query = "INSERT INTO team (name, position, info, link_facebook, link_twitter, link_git, link_email, image) 
            VALUES ('$name', '$position', '$info', '$link_facebook', '$link_twitter', '$link_git', '$link_email', '$person_image')";
    $result = mysqli_query($connection, $query)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../../index.php');
    exit();
?>