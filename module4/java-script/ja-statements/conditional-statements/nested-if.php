<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | nested-if conditional statement </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // This program shows the use of nested-if statement

        // initialize variables
        var a = 100;
        var b = 200;
        var c = 300;

        // print the value of the variables
        document.write("value of a is : " + a + "<br>");
        document.write("value of b is : " + b + "<br>");
        document.write("value of c is : " + c + "<br>");

        // find the maximum out of three numbers
        if(a > b)
        {
            // if statement in another if statement known as nested-if statement
            if(a > c)       
            {
                document.write("a is maximum");
            }
            else
            {
                document.write("c is maximum");
            }
        }
        else if(b > c)
        {
            document.write("b is maximum");
        }
        else
        {
            document.write("c is maximum");
        }

    </script>
</body>
</html>