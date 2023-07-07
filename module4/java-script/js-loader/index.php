<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title> Catering Services </title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- FAVICON -->
    <link rel="icon" type="text/x-icon" href="images/favicon.jpg">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <script src="js/loader.js"> </script>

</head>

<body onload="jsload()">

    <div id="loader" style="display: block;"> 
        <img src="images/loader.jpg"> 
    </div>

    <div id="content">

    <!-- CONTAINER FLUIDE START -->
    <div class="container-fluide bg-light mt-0">
        
        <!-- NAVIAGTION MENU START -->
        <div class="nav navbar navbar-expand navbarlink bg-dark">

            <!-- LOGO -->
            <a class="navbar-brand ms-5 text-white"> <h2> Catering Services </h2> </a>
            
            <li> <a href="index.html" class="text-white"> Home </a> </li>
            <li> <a href="menu.html" class="text-white"> Menu </a> </li>
            <li> <a href="pacages.html" class="text-white"> Packages </a> </li>
            <li class="dropdown"> <a href="" class="text-white dropdown-toggle" dta-bs-toggle="dropdown"> Account </a> 
                <ul class="dropdown-menu">
                    <li> <a href="login.html" class="text-dark text-center"> Login </a> </li>
                    <li> <a href="register.html" class="text-dark text-center"> Register </a> </li>
                </ul>   
            </li>
            <li> <a href="order.html" class="text-white"> Order </a> </li>
            <li> <a href="aboutus.html" class="text-white"> About Us </a> </li>
            <li> <a href="feedback.html" class="text-white"> Feedback </a> </li>
            <li> <a href="contactus.html" class="text-white"> Contact Us </a> </li>

        </div>
        <!-- NAVIGATION MENU END -->

        <!-- CONTENT START -->
        <div class="welcome mt-0 p-0">

            <!-- GRID START -->
            <div class="row">
                
                <div class="col-md-6 ms-0">
                    <img src="images/image.png">
                </div>

                <div class="col-md-6">
                    <h1> Welcome to Catering Services </h1>
                    <hr class="border border-2 w-75 border-dark mx-auto"> <br>
                    <h2> Book Our Service Now! </h2>
                    <p class="text-center"> We'will take care of all the things <br> Special Menu For <br> Weddings, Receptions and Corporate Events. </p>
                </div>
            </div>
            <!-- GRID END -->

        </div>

        <div class="hosting-form mt-0 p-0 bg-dark text-white">
            <h1 class="text-center pt-4"> WE LOOK FORWARD TO HOSTING YOU! </h1>
            <hr class="w-25 border border-2 border-white mx-auto">
                
            <!-- GRID START -->
            <div class="row pt-4">
                
                <div class="col-md-5 p-0">
                    <img src="images/chef1.jpg" width="550" height="500">
                </div>

                <div class="col-md-7">
                    <form>
                        <div class="form-group">
                            <label> Your Name </label>
                            <input type="text" id="name" placeholder="Enter your name" required class="form-control">
                        </div>
        
                        <div class="form-group mt-2">
                            <label> Your Email </label>
                            <input type="text" id="email" placeholder="Enter your email" required class="form-control">
                        </div>
        
                        <div class="form-group mt-2">
                            <label> Your Number </label>
                            <input type="text" id="number" placeholder="Enter your number" required class="form-control">
                        </div>
        
                        <div class="form-group mt-2">
                            <label> Occasion </label>
                            <input type="text" id="Occasion" placeholder="Enter occasion" required class="form-control">
                        </div>
        
                        <div class="form-group mt-2">
                            <label> Your Message </label>
                            <textarea id="message" class="form-control">
        
                            </textarea>
                        </div>

                        <div class="form-group mt-3">
                            <input type="Submit" id="submitbtn" value="Send" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
            <!-- GRID END -->

        </div>

        <div class="connect mt-0 p-5">

            <h2 class="connect"> Connect with us on social media </h2> 
            <hr class="border border-2 border-dark w-25 mx-auto">
            <!-- GRID START -->
            <div class="row">
                
                <div class="col-md-3 text-center p-5">
                    <a href="#"> <i class="bi bi-facebook"> </i> </a>
                </div>

                <div class="col-md-3 text-center p-5">
                    <a href="#"> <i class="bi bi-instagram"> </i> </a>
                </div>

                <div class="col-md-3 text-center p-5">
                    <a href="#"> <i class="bi bi-youtube"> </i> </a>
                </div>

                <div class="col-md-3 text-center p-5">
                    <a href="#"> <i class="bi bi-whatsapp"> </i> </a>
                </div>

            </div>
            <!-- GRID END -->

        </div>
        <!-- CONTENT END -->

    </div>
    <!-- CONTAINER FLUIDE END -->

    <!-- FOOTER START -->
    <div class="footer bg-dark text-white mt-0 p-5">
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
</body>
</html>