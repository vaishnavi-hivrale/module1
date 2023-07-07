<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Star Pattern </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // This program prints the star pattern in javascript

        // declare variable
        var i;
        var j;

        // print star pattern
        for(i=1; i<=5; i++)
        {
            for(j=1; j<=i; j++)
            {
                document.writeln("*");
            }
            document.write("<br>");
        }
    </script>
</body>
</html>