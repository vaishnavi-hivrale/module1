<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | do-while loop </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>

        // This program shows the use of do-while loop 

        // initialize variables
        var i = 10;
        var j = 11;

        // do-while loop everytime executes one iteration even if the condition is fales
        // it happens because first it executes the body( do{} ) and then checks the condition ( while() )
        do
        {
            document.write(i + "<br><br>");
            i++;
            if(i == 20)
            {
                break;
            }
        } 
        while(i > 11 );

        // print the 11 to 20 numbers
        do
        {
            document.write(j + "<br>");
            j++;
        }
        while(j <= 20);
        
    </script>
</body>
</html>