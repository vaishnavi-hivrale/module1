<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="<?php echo "$mainurl"; ?>" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?php echo $mainurl; ?> ">Home</a></li>
          <li><a href="<?php echo $mainurl; ?>about-us">About</a></li>
          <li><a href="<?php echo $mainurl; ?>services">Services</a></li>
          <li><a href="<?php echo $mainurl; ?>departments">Departments</a></li>
          <li><a href="<?php echo $mainurl; ?>doctors">Doctors</a></li>
          <li class="dropdown"><a href="#"><span> Account </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#login"> Login </a></li>
              <li><a href="<?php echo $mainurl ?>register"> Register </a></li>
            </ul>
          </li>
          <li><a href="<?php echo $mainurl; ?>contact-us">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?php echo $mainurl; ?>make-appointment" class="appointment-btn"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->