<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | while loop </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // This program shows the use of while loop

        // initialize variable
        var i=1;

        // print 1 to 50 numbers
        while(i <= 50)
        {
            document.writeln(i);
            if(i == 10 || i == 20 || i == 30 || i == 40)
            document.write("<br>");
            i++;
        }

    </script>
</body>
</html>