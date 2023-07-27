<?php
    $mainurl = "http://localhost/php/module/module5/student-details/view/";
?>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="<?php echo "$mainurl"; ?>"> <h2> Student Management System </h2> </a> 
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:35%">
        <li class="nav-item">
         <a class="nav-link active text-white" aria-current="page" href="<?php echo "$mainurl"; ?>"> Home </a> 
        </li>
      
        <!-- Check if session is set or not -->
        <?php
        if(!isset($_SESSION["studentid"]))
        {
        ?>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Account </a> 
            
            <ul class="dropdown-menu dropdown">
              <li><a class="dropdown-item" href="<?php echo "$mainurl"; ?>/login"> Login </a></li>
              <li><a class="dropdown-item" href="<?php echo "$mainurl"; ?>/register"> Register </a></li>
            </ul>
          </li>

        <?php
        }
        else
        {
        ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Welcome <?php echo $_SESSION["firstname"];?> </a> 
          
            <ul class="dropdown-menu dropdown">
              <li><a class="dropdown-item" href="<?php $mainurl ?>manage-profile"> Manage profile  </a></li>
              <li><a class="dropdown-item" href=""> Manage orders</a></li>
              <li><a class="dropdown-item" href=""> Manage Cards <span class="badge badge-sm bg-primary text-white"> <?php echo $totalcards[0]['Total'] ?> </span> </a> </li>
              <li><a class="dropdown-item btn btn-danger" name="logout-btn" role="button" data-bs-toggle="modal" data-bs-target="#logout" href="<?php echo $mainurl ?>?logout-here"> logout </a></li>
            </ul>
          </li>

        <?php
        }
        ?>

      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> Search </button>
      </form>
    </div>
  </div>
</nav>