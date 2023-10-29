<div class="content text-white p-5">
    
    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> REGISTER FORM </h3>
    </div>


    <form class="mt-5 frm p-5 mx-auto" method="post">

        <div class="mb-3 form-group">
            <label class="form-label"> First Name </label>
            <input type="text" name="first-name" class="form-control"  placeholder="Enter First Name" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Last Name</label>
            <input type="text" name="last-name" class="form-control"  placeholder="Enter Last Name" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Country</label>
            <select name="country" class="form-control" required>
                <option value=""> -select country- </option>

                <?php 
                foreach($countries as $cn)
                {
                ?>
                    <option value="<?php echo $cn["country_id"]; ?>"> <?php echo $cn["country_name"]; ?> </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">State</label>
            <select name="state" class="form-control" required>
                <option value=""> -select state- </option>

                <?php 
                foreach($states as $st)
                {
                ?>
                    <option value="<?php echo $st["state_id"]; ?>"> <?php echo $st["state_name"]; ?> </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">City</label>
            <select name="city" class="form-control" required>
                <option value=""> -select city- </option>
                
                <?php 
                foreach($cities as $ct)
                {
                ?>
                    <option value="<?php echo $ct["city_id"]; ?>"> <?php echo $ct["city_name"]; ?> </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Contact</label>
            <input type="number tel" name="contact" maxlength="10" minlength="10" class="form-control"  placeholder="Enter Contact no." required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"  placeholder="Enter Email" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control"  placeholder="Enter Address" required></textarea>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password"  placeholder="Enter Password" equired>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Confirm Password</label>
            <input type="text" name="confirm-password" class="form-control"  placeholder="Enter confirm password" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <input type="submit" class="btn btn-md text-center" name="register-btn" value="Sign Up"> &nbsp;&nbsp;

            <input type="reset" class="btn btn-md text-center" name="reset-btn" value="Reset">

            Already have an account ? <a href="<?php echo $mainurl; ?>login" class="text-light"> Login Here </a> 
        </div>
    </form>
</div>