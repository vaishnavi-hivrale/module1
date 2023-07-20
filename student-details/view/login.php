<div class="row">

    <div class="col-md-6">

    </div>

    <div class="col-md-6">
        <!-- form start -->
        <form method="post" class="mt-0 p-5">

            <!-- Heading -->
            <div class="form-group">
                <h3 class="w-75 text-white text-center mx-auto p-2" style="background-color: royalblue;"> Login Form <hr class="border border-2 border-white w-25 mx-auto"> </h3>
            </div>

            <!-- Email -->
            <div class="form-group mt-3">
                <label> Email </label>
                <input type="text" name="email" placeholder="Enter email" required class="form-control">
            </div>

            <!-- Password -->
            <div class="form-group mt-3">
                <label> Password </label>
                <input type="password" name="password" placeholder="Enter password" required class="form-control">
                <a href="#"> Forgot Password </a>
            </div>

            <!-- Login btn -->
                <div class="form-group mt-4">
                <input type="submit" name="login" value="Sign in" class="btn btn-success text-white text-center"> <br><br>
                Don't have an account? <a href="<?php echo $mainurl; ?>/register"> Create here </a>
            </div>
        
        </form>  
        <!-- form end -->
              
    </div>

</div>                