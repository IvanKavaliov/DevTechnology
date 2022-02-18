<?php
    require_once "../model/connectionToDatabase.php";
    $idEditPerson = $_POST['editSubmit'];
    // move to query.php in function
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
    }
    mysqli_close($connection);
    require_once "../View/forms/editPersonForm.php";
?>