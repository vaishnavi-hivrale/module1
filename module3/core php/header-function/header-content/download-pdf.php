<?php
// This code is used to download any pdf

    if(isset($_POST["dwn4"]))
    {
        $path="pdf/Corporate_Brochure_2023.pdf";
        header("content-type: application/pdf");
        header("content-disposition: attachment; filename=\"".basename($path)."\"");
        readfile($path);
    }
?>