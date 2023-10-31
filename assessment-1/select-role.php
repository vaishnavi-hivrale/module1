<?php
if(!isset($_SESSION["id"]))
{
?>

<div class="mt-4 p-3">

    <form method="post" class="mt-5 p-5 w-50  shadow mx-auto border border-dark border=2 shadow" style="background-color:#F3DFCB">

        <!-- form heading -->
        <div class="form-group mt-4">
            <h1 class="text-center" style="color:#112046"> <b> Select Role </b> </h1>
            <hr class="border border-2 border-dark w-25 mx-auto">
        </div>

        <div class="form-group">
            <label class="form-control text-center" style="color:#112046"> Press 1 for Counseller </label>
        </div>

        <div class="form-group mt-4">
            <label class="form-control text-center" style="color:#112046"> Press 2 for Faculty </label>
        </div>

        <div class="form-group mt-4">
            <label class="form-control text-center" style="color:#112046"> Press 3 for Student </label>
        </div>

        <div class="form-group mt-4">
            <label style="color:#112046"> Enter your choice </label>
            <input type="text" placeholder="Enter your choice" name="jobrole" class="form-control mt-4" required>
        </div>

        <div class="form-group mt-4">
            <input type="submit" name="select-role-btn" value="submit" class="btn btn-md text-light" style="background-color:#112046">
        </div>
    </form>
</div>

<?php
}
?>