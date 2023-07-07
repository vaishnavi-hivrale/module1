<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | JS TYPE CASTING </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // declare and intialize variables
        var a="20";
        var b="40";

        document.write("Value of a : " + a + "<br>");
        document.write("Value of b : " + b + "<br><br>");

        // perform addition
        var add = a + b;

        // print result
        document.write("Before typecasting Addition of " + a + " and " + b + " is : " + add + "<br>");

        // TYPECASTING
        add = parseInt(a) + parseInt(b);

        document.write("After typecasting Addition of : " + a + " and " + b + " is : " + add );
    </script>
</body>
</html>