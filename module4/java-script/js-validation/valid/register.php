<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Signup Form </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <script src="js/signup-validation.js"> </script>

</head>
<body>
    <!-- CONTAINER FLUIDE START -->
    <div class="container-fluide bg-light mt-0">
        
        <!-- NAVIAGTION MENU START -->
        <div class="nav navbar navbar-expand navbarlink bg-dark">

            <!-- LOGO -->
            <a class="navbar-brand ms-5 text-white"> <h2> Catering Services </h2> </a>
            
            <li> <a href="index.php" class="text-white"> Home </a> </li>
            <li> <a href="#" class="text-white"> Menu </a> </li>
            <li> <a href="#" class="text-white"> Packages </a> </li>
            <li class="dropdown"> <a href="" class="text-white dropdown-toggle" dta-bs-toggle="dropdown"> Account </a> 
                <ul class="dropdown-menu">
                    <li> <a href="login.php" class="text-dark text-center"> Login </a> </li>
                    <li> <a href="register.php" class="text-dark text-center"> Register </a> </li>
                </ul>   
            </li>
            <li> <a href="#" class="text-white"> Order </a> </li>
            <li> <a href="#" class="text-white"> About Us </a> </li>
            <li> <a href="#" class="text-white"> Feedback </a> </li>
            <li> <a href="#" class="text-white"> Contact Us </a> </li>

        </div>
        <!-- NAVIGATION MENU END -->

        <!-- grid start -->
        <div class="row mt-5 mt-0 p-2">

            <!-- column 1 start -->
            <div class="col-md-6 ">
                <img src="images/signup.jpeg" width="720" height="1000">
            </div>
            <!-- colum 1 end -->

            <!-- column 2 start -->
            <div class="col-md-6 p-2 shadow" >

                <!-- Form heading -->
                <div>
                    <h1 class="text-dark w-50 mx-auto text-center mt-5 p-2">  Register Form </h1>   
                    <hr class="border border-2 w-25 mx-auto border-dark"> 
                </div>

                <!-- Register form -->
                <div> 
                    <form method="post" name="signup" onsubmit="return signup_validation(this.value)" action="saveuser-info.php" class="p-2 mt-0">
                    
                    <!-- first name -->
                    <div class="form-group mt-4">
                        <label> First Name </label>
                        <input type="text" name="fname" id="fnm" placeholder="Enter your Firstname" class="form-control"> 
                    </div>

                    <!-- last name -->
                    <div class="form-group mt-4">
                        <label> Last Name </label>
                        <input type="text" name="lname" id="lnm" placeholder="Enter your Lastname" class="form-control"> 
                    </div>

                    <!-- gender
                    <div class="form-group mt-4">
                        <label> Gender </label>
                        <input type="radio" name="gender" id="g"> Male
                        <input type="radio" name="gender" id="g"> Female
                    </div> -->

                    <!-- contact no. -->
                    <div class="form-group mt-4">
                        <label> Contact no. </label>
                        <input type="number" name="contact" id="cno" class="form-control" placeholder="Enter your contact no"> 
                    </div>

                    <!-- adress -->
                    <div class="form-group mt-4">
                        <label> Address </label>
                        <textarea name="address" id="adrs" placeholder="Enter your address"  placeholder="Enter your address" class="form-control"> </textarea> 
                    </div>

                    <!-- email -->
                    <div class="form-group mt-4">
                        <label> Email </label>
                        <input type="email" name="email" id="em" placeholder="Enter your email" class="form-control"> 
                    </div>

                    <!-- password --> 
                    <div class="form-group mt-4">
                        <label> Password </label>
                        <input type="password" name="pass" id="psw" placeholder="Enter password" class="form-control">
                    </div>
                    
                    <!-- confirm password -->
                     <div class="form-group mt-4">
                        <label> Confirm Password </label>
                        <input type="text" name="confirmpsw" id="cpass" placeholder="Confirm password" class="form-control"> 
                    </div>

                    <!-- Submit button -->
                    <div class="form-group mt-4">
                            <input type="submit" name="sbmt" value="Sign up" class="btn btn-primary btn-md w-25 form-control"> &nbsp;
                        
                            <input type="reset" name="reset" value="Reset" class="btn btn-primary btn-md w-25 form-control"><br><br>
                    
                            Already have an account? <a href="login.php"> Login here </a> 

                        </div>

                </form>
                <!-- form end -->

            </div>
            <!-- column 2 end -->

        </div>
        <!-- grid end -->

    <!-- FOOTER START -->
    <div class="footer bg-dark text-white mt-5 p-5">
        <div class="row">
            <div class="col-md-4 p-5">
                <h4> ABOUT US </h4>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, delectus ut et officiis amet rerum nobis aperiam quos numquam voluptas quam! Ipsa id minima repudiandae modi voluptatibus temporibus, fuga et. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit voluptate, dicta quidem consequatur ducimus modi sint fuga distinctio rem ratione vero cumque aperiam maiores itaque blanditiis adipisci est eum tenetur? </p>
            </div>

            <div class="col-md-4 p-5">

                <h4> REACH US </h4>

                <p> <i class="bi bi-jeo-alt"> </i> <b> Our office: </b> Kalavad Road, <br> Rajkot 360001, <br> Gujarat. </p>

                <p> <i class="bi bi-telephone"> </i> <b> Call us: </b> <a href="#"> (+91) 6754534567 </a> </p>

                <p> <i class="bi bi-globe"> </i> <b> Visit us: </b> <a href="WWW.catering-services.com"> WWW.catering-services.com </a> </p>

                <p> <i class="bi bi-mail"> </i> <b> Mail Us </b> <a href="mailto:catering@gmail.com"> catering@gmail.com </a> </p>

            </div>

            <div class="col-md-4 p-5">
                <h4> LOCATE US </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.728132467568!2d70.58483251495322!3d22.212435885369242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2478e64ef5%3A0x83e8c398ed23e4d5!2sKalawad%20Rd%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1679145349188!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- FOOTER END -->

    </div>
    <!-- container-fluide end -->
</body>
</html>