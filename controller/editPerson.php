<?php
    require_once "../model/connectionToDatabase.php"; //connect to database
    $idEditPerson = $_POST['editSubmit'];
    $query = "SELECT * FROM team WHERE id = $idEditPerson";
    $result = mysqli_query($connection, $query)
    or die ('Error in query to database');
    while ($team = mysqli_fetch_assoc($result))
    {
        $ID_person = $team['id'];
        $name = $team['name'];
        $position = $team['position'];
        $info = $team['info'];
        $linkFacebook = $team['link_facebook'];
        $linkTwitter = $team['link_twitter'];
        $linkGit = $team['link_git'];
        $linkEmail = $team['link_email'];
        $personImage = $team['image'];
        // require_once "../View/forms/editPersonForm.php";
    }
    mysqli_close($connection);
    require_once "../View/forms/editPersonForm.php";
?>