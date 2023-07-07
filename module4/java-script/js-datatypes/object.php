<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | object</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <script>
    
        // object 
        // object datatype is used to store multiple value in one variable which has same name
        var employee = {
            id : "9",
            name : "Kavya",
            salary : 25000,
            address : "Rajkot"
        };

        document.write("<b> Name of variable : </b>  Employee <br>");
        document.write("Datatype of employee : <b> " + typeof(employee) + " </b> <br><br>");

        console.log("Name of variable : employee");
        console.log("Datatype of employee :" + typeof(employee));

        // array
        // array is also considered as object in javascript as it stores multiple values in one variable has same name
        var city = ["Rajkot", "Surat", "Ahemdabad"];

        document.write("<b> Value of city : </b> " + city + "<br>");
        document.write("Datatype of city : <b> " + typeof(city) + "</b> <br><br>");

        console.log("Value of city : " + city);
        console.log("Datatype of city : " + typeof(city));

    </script>

</body>
</html>