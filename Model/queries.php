<?php
    function allTeamQuery($connection)
    {
        return $connection->query("SELECT * FROM team");
    }

    function addPersonQuery($new_person, $connection)
    {
        return $query = $connection->execute("INSERT INTO team (name, position, info, link_facebook, link_twitter, link_git, link_email, image) 
            VALUES ('$new_person->name', '$new_person->position', '$new_person->info', '$new_person->link_facebook', '$new_person->link_twitter', '$new_person->link_git', '$new_person->link_email', '$new_person->person_image')");
    }

    function deletePersonQuery($idPerson, $connection)
    {
        return $query = $connection->execute("DELETE FROM team WHERE id = $idPerson");
    }

    function getInfoPersonQuery($idPerson, $connection)
    {
        return $query = $connection->query("SELECT * FROM team WHERE id = $idPerson");
    }

    function getNameImagePerson($idPerson)
    {
        return $query = "SELECT image FROM team WHERE id = $idPerson";
    }
?>