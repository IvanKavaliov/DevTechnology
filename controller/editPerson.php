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
        $link_facebook = $team['link_facebook'];
        $link_twitter = $team['link_twitter'];
        $link_git = $team['link_git'];
        $link_email = $team['link_email'];
        $person_image = $team['image'];
    }
    require_once "../View/forms/editPersonForm.php";
?>