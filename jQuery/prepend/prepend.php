<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | jquery - prepend </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='../js/jquery.js'></script>

    <!-- javascript start -->
    <script> 
        // jquery start
        jQuery(document).ready
        (
            function()
            {
                // click event start
                jQuery("#btn").click
                (
                    function()
                    {
                        // prepend function
                        jQuery("b").prepend("<b> Hivrale </b> &nbsp;")
                    }
                )
                // click event end
            }
        )
        // jquery end
    </script>
    <!-- javascript end -->
</head>
<body>
    <center>

        <b> Vaishnavi </b> <br><br>

        <button type="button" id="btn"> Prepend surname </button>
    
    </center>
</body>
</html>