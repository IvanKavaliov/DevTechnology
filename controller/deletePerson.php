<?php  
    require_once "../model/connectionToDatabase.php";
    $id_delete_person = $_POST['hidden_field'];
    require_once "../model/queries.php";
    deletePersonQuery($id_delete_person, $connection);
    mysqli_close($connection);
    header('location: ../View/tableTeam.php');
    exit();
?>