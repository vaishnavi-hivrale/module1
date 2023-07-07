<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | continue loop control statement </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <script>
        // declare variable
        var i;

        // print 1 to 50 numbers skip the multiple of 5
        for(i=1; i<=50; i++)
        {
            // continue
            if(i % 5 == 0)
            {
                continue;
            }
            document.writeln(i);
        }
    </script>

</body>
</html>