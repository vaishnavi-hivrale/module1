<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Print name using javascript </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>

        // This program prints the name using javascript

        // define function name()
        function name(nm)
        {
            // declare variable
            var n = "My name is : " + nm;

            // return n
            return n;
        }

        // function call
        document.write( name("Vaishnavi") );

    </script>
</body>
</html>