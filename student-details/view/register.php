<div class="container-fluide start">

    <!-- grid start -->
    <div class="row">

        <!-- column 1 start -->
        <div class="col-md-6">
           <img src="images/sign-up.webp" style="width:100%; margin-top:15% !important;" class="image-fluide p-5 mt-5">
        </div>
        <!-- column 1 end -->


        <!-- column 2 start -->
        <div class="col-md-6">

            <!-- form start -->
            <form method="post" class="mt-0 p-5">
                
                <!-- Heading -->
                <div class="form-group">
                    <h3 class="w-75 text-white text-center mx-auto p-2 bg-primary"> Add Student Details <hr class="border border-2 border-white w-25 mx-auto"> </h3>
                </div>


                <!-- first name -->
                <div class="form-group mt-3">
                    <label> First Name </label>
                    <input type="text" name="firstname" placeholder="Enter first name" required class="form-control">
                </div>


                <!-- last name -->
                <div class="form-group mt-3">
                    <label> Last Name </label>
                    <input type="text" name="lastname" placeholder="Enter last name" required class="form-control">
                </div>


                <!-- phone -->
                <div class="form-group mt-3">
                    <label> Phone </label>
                    <input type="text" name="phone" placeholder="Enter contact no." required class="form-control">
                </div>


                <!-- email -->
                <div class="form-group mt-3">
                    <label> Email </label>
                    <input type="email" name="email" placeholder="Enter email" required class="form-control">
                </div>


                <!-- adress -->
                <div class="form-group mt-3">
                    <label> Address </label>
                    <textarea type="text" name="address" placeholder="Enter Adress" required class="form-control"> </textarea>
                </div>


                <!-- city -->
                <div class="form-group mt-3">
                    <label> Select city id </label>
                    <select name="city"  required class="form-control">
                        <option value=""> -select city- </option>
                 
                        <?php
                            foreach($city as $ct)
                            {
                        ?>
                                <option value = "<?php echo $ct["city_id"]; ?>"> <?php  echo $ct["city_name"]; ?> </option>
                        <?php
                            }
                        ?> 
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label> Select state id </label>
                    <select name="state" required class="form-control">
                        <option value=""> -select sate- </option>
                        
                        <?php
                            foreach($state as $st)
                            {
                        ?>

                                <option value="<?php echo $st["state_id"]; ?>"> <?php echo $st["state_name"]; ?> </option>

                        <?php
                            }
                        ?>
                    </select>
                </div>

                
                <div class="form-group mt-3"> 
                    <label> Select country id </label>
                    <select name="country" required class="form-control"> 
                        <option value=""> -select country- </option>

                        <?php 
                            foreach($country as $cn)
                            {
                        ?>
                                <option value="<?php echo $cn["country_id"]; ?>"> <?php echo $cn["country_name"]; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>


                <!-- Password -->
                <div class="form-group mt-3">
                    <label> Password </label>
                    <input type="password" name="password" placeholder="Enter Password" required class="form-control">
                </div>


                <!-- Password -->
                <div class="form-group mt-3">
                    <label> Confirm Password </label>
                    <input type="text" name="cpassword" placeholder="Confirm password" required class="form-control">
                </div>

                
                <div class="form-group mt-4">

                    <!-- submit btn -->
                    <input type="submit" name="sub" value="Sign up" class="btn btn-success text-white text-center"> 

                    <!-- reset btn -->
                    <input type="Reset" name="btn-add-card" value="Reset" class="btn btn-danger text-white text-center">

                </div>
            
            </form>
            <!-- form end -->

        </div>
        <!-- column 2 end -->

    </div>
    <!-- grid end -->
            
</div>
<!-- container-fluide end -->