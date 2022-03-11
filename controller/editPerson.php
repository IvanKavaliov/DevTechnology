<?php
    require_once "../model/connectionToDatabase.php";
    $db = new Database();
    $idEditPerson = $_POST['editSubmit'];
    require_once "../model/queries.php";
    $user = getInfoPersonQuery($idEditPerson, $db);
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