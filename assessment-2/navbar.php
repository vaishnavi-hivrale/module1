<?php
    $mainurl = "http://localhost/php/module/assessment/assessment-2/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Employee Management System </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>


    <!-- online cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
        box-sizing:border-box;
      }

      .dropdown:hover .dropdown-menu
      {
        display:block;
      }


    </style>

</head>
<body>
    <div class="m-0 p-0">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid bg-info m-0 p-3">
          
          <!-- logo -->
          <a class="navbar-brand" href="<?php echo $mainurl; ?>"> <img src="images/emp-logo.jpeg" class="image-fluid" height="50" width="50" style="margin-top:-9%;"> 
            <span style="font-size: 32px;" class="text-white p-2"> <b> EMS </b> </span>
            </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <!-- Home -->
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="<?php echo $mainurl; ?>" style="font-size:16px;"> Home </a>
              </li>

              <!-- Add Employee -->
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo $mainurl; ?>add-employee" style="font-size:16px;"> Add Employee </a>
              </li>

              <!-- View Employees -->
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo $mainurl; ?>employees-data" style="font-size:18px;"> View Employees </a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"> Search </button>
            </form>
          </div>
        </div>
      </nav>
    </div>

</body>
</html>