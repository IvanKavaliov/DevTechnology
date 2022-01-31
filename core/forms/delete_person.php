<?php
    require_once "../orm/Database.php";
    // if (isset($_POST['hidden_field'])){
    //     echo "DO You realy want to delete this person?";
    // }
    $id_delete_person = $_POST['hidden_field'];
    require_once "../../Model/queries.php";
    deletePersonQuery($id_delete_person, $connection);
    mysqli_close($connection);
    header('location: ../table_team.php');
    exit();
?>
