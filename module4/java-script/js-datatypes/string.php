<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | string </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        
        // string
        var nm = "Vaishnavi";
        document.write("<b> Value of nm : </b> " + nm + "<br>");
        document.write("Datatype of variable nm : <b> " + typeof(nm) + " </b> <br><br>");

        console.log("value of nm : " + nm);
        console.log("Dataype of nm : " + typeof(nm));

        // if we initialize the variale with empty doublequotes "" and don't write anything within
        // still the datatype will be string
        var address = "";

        document.write("<b> Name of variable : </b> address <br>");
        document.write("Datatype of variable : <b> " + typeof(address) + " </b> <br><br>");

        console.log("Name of variable : address");
        console.log("Datatype of variable : " + typeof(address));

    </script>
</body>
</html>