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
    // Logic that works behind the login-form to log-in user into the website

    if(isset($_POST["sub"]))
    {
        // get the values using $_POST[]
        $em=$_POST["email"];
        $p=$_POST["psw"];

        // Compare the user credentials
        if($em == "vaishnavi@gmail.com" && $p == "vaishnavi123")
        {
            echo "<div class='alert alert-success w-25 p-5'> <span> 'Login Successful' </span> </div>";  
            
        /* header('location:welcome.php') - if we use header-location it will not display the acknowlegement msg
        i.e. "login Successful" or "username or password are incorrect" while redirect on next page*/
            header('location:welcome.php');
        }
        else
        {
            echo "<div class='alert alert-danger w-25 p-5'> <span> 'Incorrect username or password' </span> </div>";
            header('location:login-form.php');
        }
    }
    ?>
    
</body>
</html>