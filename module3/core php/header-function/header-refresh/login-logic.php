<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php
    // Get the the values entred in form input using $_POST[]
    $e = $_POST["em"];
    $p = $_POST["pass"];
    
    if(isset($_POST["sub"]))
    {
        // comapre the values and display the msg for login
        if($e == "vaishnavi@gmail.com" && $p == "vaishnavi123")
        {
            echo "<div align='center' class='alert alert-success w-50 mx-auto p-3 mt-5'> <h3> Login Successful </h3> </div>";
            header('refresh:4, welcome.php');
        }
        else
        {
            echo "<div align='center' class='alert alert-danger w-50 mx-auto p-3 mt-5'> <h3> Incorrect username or password </h3> </div>";
            header('refresh:4,login.php');
        }
    }
    ?>

</body>
</html>