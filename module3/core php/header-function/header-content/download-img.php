<?php
// This code is used to download any image 

    if(isset($_POST["dwn1"]))
    {
        
        $path="images/plant.jpeg";
        header("content-type: application/image");
        header("content-disposition: attachment; filename=\"".basename($path)."\"");
        readfile($path);
            
    }

    if(isset($_POST["dwn2"]))
    {
        $path1="images/plant1.jpeg";
        header("content-type: application/image");
        header("content-disposition: attachment; filename=\"".basename($path1)."\"");
        readfile($path1);
    }

    if(isset($_POST["dwn3"]))
    {
        $path2="images/flower.jpg";
        header("content-type: application/image");
        header("content-disposition: attachment; filename=\"".basename($path2)."\"");
        readfile($path2);
    }
?>