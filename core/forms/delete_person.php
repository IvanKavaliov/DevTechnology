<?php
    include "../orm/Database.php";
    // if (isset($_POST['hidden_field'])){
    //     echo "DO You realy want to delete this person?";
    // }
    $id_delete_person = $_POST['hidden_field'];
    $query_delete = "DELETE FROM team WHERE id = $id_delete_person";
    $result = mysqli_query($connection, $query_delete)
    or die ('Error in query to database');
    mysqli_close($connection);
    header('location: ../table_team.php');
    exit();
?>
