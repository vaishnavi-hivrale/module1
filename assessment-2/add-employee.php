<div class="m-0 p-5">

    <!-- add employee form start -->
    <div class="mt-5 p-5">
        
        <form class="m-3 p-5 shadow w-75 mx-auto border border-2 border-white" method="post" style="background-color: darksalmon;">
            
            <!-- heading -->
            <div class="mt-4 p-2">
                <h1 class="text-center text-white"> Add Employee Form </h1>
                <hr class="border border-2 border-white mx-auto w-25">
            </div>

            <!-- first name -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> First Name </label>
                <input type="text" class="form-control" name="empfirstname" placeholder="Enter your first name" required>
            </div>


            <!-- last name -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Last Name </label>
                <input type="text" class="form-control" name="emplastname" placeholder="Enter your last name" required>
            </div>

            <!-- Email -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Email </label>
                <input type="text" class="form-control" name="empemail" placeholder="Enter your email" required>
            </div>

             <!-- Mobile -->
             <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Mobile </label>
                <input type="text" class="form-control" minlength="10" maxlength="10" name="empmobile" placeholder="Enter your email" required>
            </div>

            <!-- Address -->
              <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white">  Address </label>
                <textarea class="form-control" placeholder="Enter your address" name="empaddress"></textarea>
              </div>

            <!-- Gender -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Gender </label>
                <input type="radio" name="empgender" value="male" required> <span class="text-light"> Male </span>
                <input type="radio" name="empgender" value="female" required> <span class="text-light"> Female </span>
                <input type="radio" name="empgender" value="other" required> <span class="text-light"> Other </span>
            </div>

            <!-- Password -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Password </label>
                <input type="password" class="form-control" name="emppassword" placeholder="Enter Password" required>
            </div>

            <!-- Password -->
            <div class="mb-3 form-group mt-4 p-2">
                <label class="form-label text-white"> Confirm Password </label>
                <input type="password" class="form-control" name="empconfirmpassword" placeholder="Enter Confirm Password" required>
            </div>

            <div class="mb-3 form-group mt-4 p-2">
                <input type="submit" class="btn btn-light btn-md text-dark" name="add-employee-btn" value="Add Employee"  required>
            </div>

        </form>
        
    </div>
    <!-- add-employee form end -->

</div>