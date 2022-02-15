<?php  
    require_once "../model/connectionToDatabase.php";
    $id_delete_person = $_POST['deleteSubmit'];
    require_once "../model/queries.php";
    deletePersonQuery($id_delete_person, $connection);
    mysqli_close($connection);
    header('location: ../View/adminPanelNew.php');
    exit();
?>