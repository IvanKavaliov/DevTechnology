<?php  
    require_once "../model/connectionToDatabase.php";
    $idDeletePerson = $_POST['deleteSubmit'];
    $db = new Database();
    $query = $db->query("SELECT image FROM team WHERE id = $idDeletePerson");
    foreach ($query as $key) 
    {
       $fileNameDelete = $key['image']; 
    }
    require_once '../model/deletePersonImage.php';
    deletePersonImage($fileNameDelete);
    require_once "../model/queries.php";
    deletePersonQuery($idDeletePerson, $db);
    header('location: ../View/adminPanel.php');
    exit();
?>