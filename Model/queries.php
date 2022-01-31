<?php
    function addPersonQuery($new_person, $connection)
    {
        $query = "INSERT INTO team (name, position, info, link_facebook, link_twitter, link_git, link_email, image) 
            VALUES ('$new_person->name', '$new_person->position', '$new_person->info', '$new_person->link_facebook', '$new_person->link_twitter', '$new_person->link_git', '$new_person->link_email', '$new_person->person_image')";
        $result = mysqli_query($connection, $query)
        or die ('Error in query to database');
        return $result;
    }

    function deletePersonQuery($idPerson, $connection)
    {
        $query = "DELETE FROM team WHERE id = $idPerson";
        $result = mysqli_query($connection, $query)
        or die ('Error in query to database');
        return $result;
    }

    function editPersonQuery()
    {

    }
?>