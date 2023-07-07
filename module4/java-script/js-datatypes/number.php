<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> JS DATA TYPES </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // document.write() function is used to print any msg on browser in javascript
        // console.log() is used to print any msg on console
        // typeof() function is used to know the datatype of variable
        // + is used to concate strings or variables value 

        // number
        var a=10;
        var b=20;

        // print value of a and b
        document.write("<b> Value of a : </b>" + a + "<br>");
        document.write("<b> Value of b : </b>" + b + "<br><br>");

        console.log("Value of a : " + a);
        console.log("Value of b : " + b);

        // calculate sum
        var c = a + b;

        // print result
        document.write("<b> Addition of " + a + " and " + b + " is : </b>" + c + "<br>");

        console.log("Addition of " + a + " and " +  b + " is : " + c);

        // identify the data type of a, b and c using typeof()
        document.write("Datatype of variable a : <b> " + typeof(a) + " </b> <br>");
        document.write("Datatype of variable b : <b> " + typeof(b) + " </b> <br>");
        document.write("Datatype of variable c : <b> " + typeof(c) + " </b> <br><br>");

        console.log("Datatype of a : " + typeof(a));
        console.log("Datatype of b : " + typeof(b));
        console.log("Datatype of c : " + typeof(c));
        
        // in javascript int and float value both are cansidered as number datatype
        var d = 123.456;
        document.write("<b> Value of d : </b> " + d + "<br>");
        document.write("Datatype of variable d : <b>" + typeof(d) + " </b> <br><br>");

        console.log("Value of d : " + d);
        console.log("datatype of d : " + typeof(d));

    </script>

</body>
</html>