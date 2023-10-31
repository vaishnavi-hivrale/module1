<div class="mt-4 p-3"> 
    <form method="post" class="mt-5 p-5 w-50  shadow mx-auto border border-dark border=2 shadow" style="background-color:#F3DFCB">

        <!-- form heading -->
        <div class="form-group mt-4">
            <h1 class="text-center" style="color:#112046"> <b> Forgot Password </b> </h1>
            <hr class="border border-2 border-dark w-25 mx-auto">
        </div>

        <!-- jobrole -->
        <div class="form-group mt-4">
            <label class="mt-2" style="color:#112046"> Select Role </label>
            <select name="jobrole" class="form-control mt-2" required>
                <option value=""> -select role </option>
                <option value="1"> Counseller </option>
                <option value="2"> Faculty </option>
                <option value="3"> Student </option>
            </select>
        </div>

        <!-- email -->
        <div class="form-group mt-4">
            <label class="mt-2" style="color:#112046"> Enter Email </label>
            <input type="email" name="email" class="form-control mt-2" placeholder="Enter Email" required>
        </div>

        <!-- submit btn -->
        <div class="form-group mt-4">
            <input type="submit" name="forgot-password-btn" value="Submit" class="btn btn-md text-light" style="background-color:#112046">
        </div>
    </form>
</div>