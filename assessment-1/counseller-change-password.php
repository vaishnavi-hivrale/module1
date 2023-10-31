<div class="mt-3 p-0">

    <!-- heading -->
    <div class="mt-5 p-2">
        <span style="font-size:31px; margin-left:15%; color:#112046;"> <b> Change Password </b>
             <!-- back btn  -->
            <a href="<?php echo $mainurl; ?>" style="margin-left:45%;" class="btn btn-danger btn-md text-light text-center"> Back  </a>
        </span>
        <hr class="border border-2 border-dark w-75 mx-auto">
    </div>

    <div class="mt-0 p-0">

        <!-- form start -->
        <form method="post" class="mt-2 p-5 w-75 shadow mx-auto" style="background-color:#F3DFCB;">

            <!-- old password -->
            <div class="form-group">
                <label style="color:#112046;"> Old Password </label>
                <input type="password" name="counseller-old-password" placeholder="Enter Old Password" class="form-control mt-2" required>
            </div>

            <!-- new password -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> New Password </label>
                <input type="text" name="counseller-new-password" placeholder="Enter New Password" class="form-control mt-2" required>
            </div>

            <!-- confirm password -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> Confirm Password </label>
                <input type="text" name="counseller-confirm-password" placeholder="Confirm Password" class="form-control mt-2" required>
            </div>

            <!-- counseller-change-password-btn -->
            <div class="form-group mt-4">
                <input type="submit" name="counseller-change-password-btn" value="Change Password" class="btn btn-md text-light" style="margin-left:45%; background-color:#112046;">
            </div>

        </form>
        <!-- form end -->
        
    </div>

</div>