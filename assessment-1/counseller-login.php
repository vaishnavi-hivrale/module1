<?php
if(!isset($_SESSION["councellerid"]))
{
?>
<div class="mt-4 p-3"> 
    <form method="post" class="mt-5 p-5 w-50  shadow mx-auto border border-dark border=2 shadow" style="background-color:#F3DFCB">

        <!-- form heading -->
        <div class="form-group mt-4">
            <h1 class="text-center" style="color:#112046"> <b> Counseller Login </b> </h1>
            <hr class="border border-2 border-dark w-25 mx-auto">
        </div>

        <!-- counseller email -->
        <div class="form-group mt-4">
            <label class="mt-2" style="color:#112046"> Enter Your email </label>
            <input type="text" class="form-control mt-2" name="counseller-email" placeholder="Enter your email" required>
        </div>

        <!-- counseller password -->
        <div class="form-group mt-4">
            <label class="mt-2" style="color:#112046"> Enter Your password </label>
            <input type="password" name="counseller-psw" class="form-control mt-2" placeholder="Enter your password" required>
            <a href="<?php echo $mainurl; ?>forgot-password"> Forgot Password ? </a>
        </div>

        <!-- submit btn -->
        <div class="form-group mt-4">
            <input type="submit" name="counseller-login-btn" value="Sign in" class="btn btn-md text-light" style="background-color:#112046">
        </div>
    </form>
</div>

<?php
}
?>