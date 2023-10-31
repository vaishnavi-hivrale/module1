<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Student Management System </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!-- online cdn from getbootstrap.com -->

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body
        {
          margin:0;
          padding:0;
          overflow-x:hidden;
          box-sizing:borderbox;
        }

        .dropdown:hover .dropdown-menu 
        {
          display:block;
        }

    </style>
</head>
<body>

    <?php
        $mainurl = "http://localhost/php/module/assessment/assessment-1/";
    ?>

    <!-- style="background-color:#F3DFCB" -->
    <nav class="navbar navbar-expand-lg" style="background-color:#112046">
        
      <div class="container-fluid">
--
          <a class="navbar-brand text-white" href="<?php echo $mainurl; ?>">

            <!-- logo  -->
             <img src="images/sms-logo.jpeg" width="50" height="45"> &nbsp; <span style="font-size: 31px;"> <b> Student Management Sytem </b> </span> </a>
          
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <!-- home -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href=" <?php echo $mainurl; ?>">Home</a>
              </li>

              <?php
              if(isset($_SESSION["counsellerid"]))
              {
              ?>
                <!-- counseller nav items start -->

                <!-- add student -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>add-student"> Add student </a>
                </li>

                <!-- view student -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>students-details"> View student </a>
                </li>
  
                <!-- counseller name -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button"   data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome <?php echo $_SESSION["counsellername"]; ?>
                  </a>
                
                  <ul class="dropdown-menu">
                    <!-- view profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>view-counseller-profile?counseller-id=<?php echo $_SESSION['counsellerid']; ?>"> View Profile </a></li>
                  
                    <!-- change password -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>counseller-change-password"> Change Password </a></li>
                  
                    <!-- edit profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>edit-counseller-profile"> Edit Profile </a></li>

                    <!-- logout -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>?counseller-logout"> Logout </a></li>
                  </ul>
                </li>
                <!-- counseller nav itens end -->
              <?php
              }
              else if(isset($_SESSION["facultyid"]))
              {
              ?>
                <!-- Faculty nav items start -->

                <!-- view student -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>students-details"> View student </a>
                </li>

                <!-- Add Marks -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>add-marks"> Add marks </a>
                </li>


                <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Assignments
                  </a>

                  <ul class="dropdown-menu">
                    <!-- Add asignments -->
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $mainurl; ?>add-assignments"> Add Assignments </a>

                    </li>


                    <!-- View assignments -->
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $mainurl; ?>all-assignments"> View Assignments </a>
                    </li>

                  </ul>

                </li>


                <!-- Faculty name -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button"   data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome <?php echo $_SESSION["facultyname"]; ?>
                  </a>
                
                  <ul class="dropdown-menu">
                    <!-- view profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>view-faculty-profile"> View Profile </a></li>
                  
                    <!-- change password -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>faculty-change-password"> Change Password </a></li>
                  
                    <!-- edit profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>edit-faculty-profile"> Edit Profile </a></li>

                    <!-- logout -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>?faculty-logout"> Logout </a></li>
                  </ul>
                </li>
                <!-- faculty nav items end -->
              <?php
              }
              else if(isset($_SESSION["studentid"]))
              {
              ?>

                <!-- Student nav items start -->

                <!-- view assignments -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>student-view-assignments"> View Assignments </a>
                </li>

                <!-- View Marks -->
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?php echo $mainurl; ?>view-marks"> View marks </a>
                </li>
  
                <!-- Student name -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" role="button"   data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome <?php echo $_SESSION["studentname"]; ?>
                  </a>
                
                  <ul class="dropdown-menu">
                    <!-- view profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>view-student-profile"> View Profile </a></li>
                  
                    <!-- change password -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>student-change-password"> Change Password </a></li>
                  
                    <!-- edit profile -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>edit-student-profile"> Edit Profile </a></li>

                    <!-- logout -->
                    <li><a class="dropdown-item" href="<?php echo $mainurl; ?>?student-logout"> Logout </a></li>
                  </ul>
                </li>
                <!-- student nav itens end -->
              <?php
              }
              else
              {
              ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $mainurl; ?>select-role"> Login </a></li>
                </ul>
                </li>
              <?php
              }
              ?>

            </ul>
            
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

          </div>
        </div>
      </nav>
</body>
</html>