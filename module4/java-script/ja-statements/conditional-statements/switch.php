<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | switch conditional statement</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // This program shows the use of nested-if statement

        // initialize variable
        var n = 5;

        // switch statement
        switch(n)
        {
            case 1:
                document.write("Sunday");
                break;

            case 2:
                document.write("Monday");
                break;

            case 3:
                document.write("Tuesday");
                break;

            case 4:
                document.write("Wednesday");
                break;

            case 5:
                document.write("Thursday");
                break;

            case 6:
                document.write("Friday");
                break;

            case 7:
                document.write("Saturday");
                break;

            default:
                document.write("Please enter value between 1 to 7");
                break;
        }
    </script>
</body>
</html>