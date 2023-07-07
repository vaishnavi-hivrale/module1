<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Increment-Decrement Operator </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <script>

        // initialize variable
        a = 10;

        // print valueof a
        document.write("Value of a :" + a + "<br><br>")

        // PRE INCREMENT : first increment value of variable and than print 
        // POST INCREMENT : first print the value of variable and than increment
        // pre decrement : first decrement the value of variable and than print
        // post decrement : first print the value and than decrement

        // pre-increment ++a
        document.write("PRE INCREMRNT (++a) <br>");
        ++a;
        document.write(a + "<br><br>");

        // post increment a++
        document.write("POST INCREMENT (a++) <br>");
        a++;
        document.write(a + "<br><br>");

        // pre decrement
        document.write("PRE DECREMENT (--a) <br>");
        --a;
        document.write(a + "<br><br>");

        // post decrement
        document.write("POST DECREMRNT (A++) <br>")
        a--;
        document.write(a);

    </script>

</body>
</html>