<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Comparision Operator </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <script>

        // compare operator used to compare two or more than two operands

        // initiakize variable
        var a = 10;
        var b = 20;

        // print values of a and b
        document.write("Value of a : " + a + "<br>");
        document.write("Value of b : " + b + "<br><br>");

        // GREATER THAN (>) 
        document.write("<b> GREATER THAN (>) </b> <br>");

        if(a > b)
        {
            document.write("a is greater than b <br><br>");
        }
        else
        {
            document.write("b is greater than a <br><br>");
        }

        // LESS THAN (<)
        document.write("<b> LESS THAN (<) </b> <br>");
        
        if(a < b)
        {
            document.write("a is less than b <br><br>");
        }
        else
        {
            document.write("b is less than a <br><br>");
        }

        // GREATER THAN OR EQUAL (>=)
        document.write("<b> GREATER THAN OR  EQUAL (>=) </b> <br>");
        
        if(a >= b)
        {
            document.write("a is greater than or equal b <br><br>");
        }
        else
        {
            document.write("b is greater than or equal a <br><br>");
        }

        // LESS THAN OR EQUAL (<=)
        document.write("<b> LESS THAN OR  EQUAL (<=) </b> <br>");
        
        if(a <= b)
        {
            document.write("a is less than or equal b <br><br>");
        }
        else
        {
            document.write("b is less than or equal a <br><br>");
        }

        // IS EQUAL (=)
        document.write("<b> IS EQUAL (=) </b> <br>");
        
        if(a == b)
        {
            document.write("a is equal to b <br><br>");
        }
        else
        {
            document.write("a is not equal to b <br><br>");
        }

        // TRIPLE EQUAL
        document.write("<b> TRIPLE EQUAL (===) </b> <br>");
        
        var c = a === b; 
        document.write(c);
    
    </script>

</body>
</html>