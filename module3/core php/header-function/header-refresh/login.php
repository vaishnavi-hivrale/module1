<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | login </title>
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
    <div class="container-fluide mt-5 p-5 " style="background-color: aquamarine;">

        <!-- GRID START -->
        <div class="row">

            <!-- LOGIN IMAGE -->
            <div class="col-md-5"> 
                <img src="images/login.webp" width="600" height="520" align="center" class="mt-4 p-4 image-fluide">
            </div>

            <div class="col-md-7">
                <!-- FORM START -->
                <form class="container mt-5 p-5 shadow bg-white" align="center" method="post" action="login-logic.php">
                    <div class="form-group"> 
                        <h1> LOGIN FORM </h1>
                        <hr class="border border-2 w-25 mx-auto"> 
                    </div>

                    <div class="form-group"> 
                        <label> Enter Email : </label>
                        <input type="text" name="em" placeholder="example: user@gmail.com" class="form-control" required>
                    </div>

                    <div class="form-group"> 
                        <label> Enter Password : </label>
                        <input type="text" name="pass" placeholder="Password" class="form-control" required>
                        <a href="#"> Forget password </a>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="sub" value="Sign in" class="btn btn-primary"> <br><br>
                        Dont't have an acoount? <a href="#"> create account </a>
                    </div>
                </form>
                <!-- FORM END -->
            </div>
            
        </div>
        <!-- GRID END -->

    </div>
    <!-- CONTAINER-FLUIDE END -->
</body>
</html>