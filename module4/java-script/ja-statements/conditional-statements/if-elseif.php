<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | if-elseif conditional statement </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // Thia program shows the use of if-elseif statement

        // initialize variables
        var a = 10;
        var b = 20;

        // print the value of a and b
        document.write("Value of a is : " + a + "<br>")
        document.write("Value of b is : " + b + "<br>")

        // check the condition (greater than) / (less than) / (equal)
        if(a > b)
        {
            document.write("a is greater than b");
        }
        else if(a < b)
        {
            document.write("a is less than b");
        }
        else if(b > a)
        {
            document.write("b is greater than a");
        }
        else if(b < a)
        {
            document.write("b is less than a");
        }
        else 
        {
            document.write("a and b both are same");
        }

    </script>
</body>
</html>