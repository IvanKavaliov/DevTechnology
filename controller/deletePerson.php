<?php  
    require_once "../model/connectionToDatabase.php";
    $idDeletePerson = $_POST['deleteSubmit'];
    $query = "SELECT image FROM team WHERE id = $idDeletePerson";
    $result = mysqli_query($connection, $query);
    $team = mysqli_fetch_assoc($result);
    $fileNameDelete = $team['image'];
    require_once '../model/deletePersonImage.php';
    deletePersonImage($fileNameDelete);
    require_once "../model/queries.php";
    deletePersonQuery($idDeletePerson, $connection);
    mysqli_close($connection);
    header('location: ../View/adminPanel.php');
    exit();
?>