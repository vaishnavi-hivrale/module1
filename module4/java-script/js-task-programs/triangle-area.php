<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Area of Triangle </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>

        // This program finds the Area of Triangle in javascript
        function triangle_area(base, height)
        {

            // print the value of base and height
            document.write("base of triangle : " + base + "<br>");
            document.write("height of triangle : " + height + "<br>");

            // calculate area
            area = (height * base) / 2;

            // print area 
            document.write("Area of triangle : " + area);
        }

        // call the function
        triangle_area(10, 5);
        
    </script>
</body>
</html>