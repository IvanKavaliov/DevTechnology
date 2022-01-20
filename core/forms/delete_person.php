<?php
    include "../orm/Database.php";
    $query_delete = "DELETE FROM team WHERE team.id = 64";
    $result = mysqli_query($connection, $query_delete)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../table_team.php');
    exit();
?>