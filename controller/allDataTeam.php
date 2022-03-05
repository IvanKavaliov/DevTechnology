<?php
    require_once "$pathDatabase";
    require_once "$pathQuery";
    $db = new Database();
    $user = allTeamQuery($db);
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
        require $template;
    }
?>