<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Ternary Operator </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <script>

        // Ternary operator ( ? : ) used to check the condition and print result in just one line of code 
        // instead of using if we can use ternary operator 

        // initialize variable
        var a = 20;

        // print value of a
        document.write("Value of a : " + a + "<br>");

        /*
            // check odd-even using if-else statement
            if(a % b == 0)
            {
                document.write("a is even");
            }
            else
            {
                document.write("a is odd");
            }
        */

        // using ternary operator
        a % 2 == 0 ? document.write("a is even") : document.write("a is odd")

    </script>

</body>
</html>