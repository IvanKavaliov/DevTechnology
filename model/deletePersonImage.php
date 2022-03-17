<?php
    function deletePersonImage($fileNameDelete)
    {
        $filePath = "../images/personImages/$fileNameDelete";
        unlink($filePath);
    }
