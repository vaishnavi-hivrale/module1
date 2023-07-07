<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Login Form </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    <!-- CONTAINER-FLUIDE START -->
    <div class="container-fluide m-5 p-5" style="background-color: royalblue;">

        <!-- FORM START -->
        <form class="container mt-5 p-5 shadow" style="font-size: larger; background-color: white;" align="center" method="post" action="login-logic.php">

            <!-- FORM HEADING -->
            <h1> LOGIN FORM </h1>
            <hr class="border border-dark border-2 w-25 mx-auto">

            <!-- EMAIL -->
            <div class="form-group mt-2 p-2">
                <label> Enter email : </label>
                <input type="text" name="email" placeholder="Enter your email *" class="form-control" required>
            </div>

            <!-- PASSWORD -->
            <div class="form-group mt-2 p-2">
                <label> Enter Password : </label>
                <input type="password" name="psw" placeholder="Password *" class="form-control" required>
                <a href="#"> Forget password </a>
            </div>
            
            <!-- SUBMIT BUTTON -->
            <div class="form-group mt-2 p-2">
                <input type="submit" name="sub" value="Sign in" class="btn btn-primary" class="form-control"> <br>
                Don't have an account? <b> <a href="#"> Create account </a> </b>
            </div>
        </form>
        <!-- FORM END -->

    </div>
    <!-- CONTAINER-FLUIDE END -->
</body>
</html>>