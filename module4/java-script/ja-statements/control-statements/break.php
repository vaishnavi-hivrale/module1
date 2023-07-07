<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | break loop control statement </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>

        // This program shows the use of break 

        // initialize variable
        var i;

        // print 1 to 10 numbers
        for(i = 1; i <= 20; i++)
        {
            document.write(i + "<br>");
            
            // break
            if( i == 10 )
            {
                break;
            }
        }

    </script>
</body>
</html>