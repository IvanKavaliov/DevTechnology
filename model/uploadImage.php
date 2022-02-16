<?php
    function uploadImage($image)
        {
            $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
            $fileName = uniqid().".".$extension;
            move_uploaded_file($image['tmp_name'], "../images/personImages/".$fileName);
            return $fileName;
        }
?>