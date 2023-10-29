<div class="content text-white mt-0 p-5">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> LOGIN FORM </h3>
    </div>

    <form class="mt-5 frm p-5 m-5 mx-auto" method="post">

        <div class="mb-3 form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"  placeholder="Enter Email" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password"  placeholder="Enter Password" equired>
            <a href="<?php echo $mainurl; ?>forgot-password" class="text-light"> Forgot Passsword ? </a>
        </div>

        <div class="mb-3 form-group mt-4">
            <input type="submit" class="btn btn-md text-center" name="login-btn" value="Sign In">

            Don't have an account ? <a href="<?php echo $mainurl; ?>register" class="text-light"> Create Here </a> 
        </div>
    </form>
</div>