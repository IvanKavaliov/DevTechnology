<?php
    require_once "../model/connectionToDatabase.php";
    $idEditPerson = $_POST['editSubmit'];
    // move to query.php in function
    $query = "SELECT * FROM team WHERE id = $idEditPerson";
    $db = new Database();
    $user = $db->query("SELECT * FROM team WHERE id = $idEditPerson");
    foreach ($user as $team)
    {
        $ID_person = $team['id'];
        $name = $team['name'];
        $position = $team['position'];
        $info = $team['info'];
        $linkFacebook = $team['link_facebook'];
        $linkTwitter = $team['link_twitter'];
        $linkGit = $team['link_git'];
        $linkEmail = $team['link_email'];
        $person_image = $team['image'];
    }
    require_once "../View/forms/editPersonForm.php";
?>