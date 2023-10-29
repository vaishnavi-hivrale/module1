<section class="mt-0">
    <div class="sidebar p-5 mt-0 sidebar col-md-2">

        <?php 
        if(isset($_SESSION["userid"]))
        {
        ?>

            <li> <a href=""> <i class="bi bi-person-fill"> </i> Welcome <?php echo ucfirst($_SESSION["name"]); ?> </a> </li>  

            <li> <a href="<?php echo $mainurl; ?>" class="mt-4"> <i class="bi bi-house-door-fill"> </i> Home </a> </li>        
        
            <li> <a href="<?php echo $mainurl; ?>add-expenses" class="mt-4"> <i class="bi bi-currency-rupee"> </i> Add Expenses </a> </li>

            <li> <a href="<?php echo $mainurl; ?>view-expenses" class="mt-4"> <i class="bi bi-book-fill"> </i> View Expenses </a> </li>

            <li> <a href="<?php echo $mainurl; ?>view-profile" class="mt-4"> <i class="bi bi-person-circle"> </i> View Profile </a> </li>

            <li> <a href="<?php echo $mainurl; ?>update-profile" class="mt-4"> <i class="bi bi-pencil"> </i> Update Profile </a> </li>

            <li> <a href="<?php echo $mainurl; ?>change-password" class="mt-4"> <i class="bi bi-shield-lock-fill"> </i> Change Password </a> </li>

            <li> <a href="<?php echo $mainurl; ?>?logout" class="mt-4"> <i class="bi bi-power"> </i> Logout </a> </li>

            
        <?php
        }
        else
        {
        ?>

            <li> <a href="<?php echo $mainurl; ?>" class="mt-3"> <i class="bi bi-house-door-fill"> </i> Home </a> </li>

            <li> <a href="#" class="mt-3" onclick="login()"> <i class="bi bi-currency-rupee"> </i> Add Expenses </a> </li>

            <li> <a href="<?php echo $mainurl; ?>login" class="mt-3"> <i class="bi bi-key-fill"> </i> Login </a> </li>

            <li> <a href="<?php echo $mainurl; ?>register" class="mt-3"> <i class="bi bi-person-add"> </i> Register </a> </li>
            
                
        <?php
        }
        ?>
    </div>
</section>