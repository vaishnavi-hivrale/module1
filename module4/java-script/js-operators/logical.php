<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Logical Operator </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <script>

        // initialize variable
        var n = 7;

        // print value of n
        document.write("Value of n : " + n + "<br><br>");

        // logical and (&&) check if n is prime or not 
        document.write("LOGICAL AND (&&) <br>");
        
        if(n % 1 == 0 && n % n == 0)
        {
           document.write("n is a prime number <br><br>"); 
        }
        else
        {
            document.write("n is not a prime number <br><br>");
        }

        // logical or (||) check if n is positive or devided by 2
        document.write("LOGICAL OR (||) <br>");
        
        if(n > 0 || n % 2 == 1)
        {
            document.write("n is a positive number <br><br>"); 
        }
        else
        {
            document.write("n is a negative number <br><br>");
        }

        // logical not (!)
        document.write("LOGICAL NOT (!) <br>");

        var a = false;
        document.write("Value of a : " + a + "<br>");
        document.write(!a); 
               
    </script>

</body>
</html>