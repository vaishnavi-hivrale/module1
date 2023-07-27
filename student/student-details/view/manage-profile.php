<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Manage Profile </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container-fluide p-4">
        <?php 
        if(isset($_SESSION["studentid"]))
        {
        ?>

            <!-- form start -->
            <form method="post" class="mt-0 p-5 w-75 shadow" style="margin-left:15%;">
                
                <!-- Heading -->
                <div class="form-group">
                    <h3 class="text-primary"> Update Profile </h3>
                    <hr class="border border-1 border-primary w-75">

                    <button type="button" class="btn btn-sm btn-danger" onclick="back()"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>

                </div>


                <!-- first name -->
                <div class="form-group mt-3">
                    <label> First Name </label>
                    <input type="text" name="firstname" value="<?php echo $manage_profile[0]["first_name"] ?>" placeholder="Enter first name" required class="form-control" >
                </div>


                <!-- last name -->
                <div class="form-group mt-3">
                    <label> Last Name </label>
                    <input type="text" name="lastname" value="<?php echo $manage_profile[0]["last_name"] ?>" placeholder="Enter last name" required class="form-control">
                </div>


                <!-- phone -->
                <div class="form-group mt-3">
                    <label> Phone </label>
                    <input type="text" name="phone" value="<?php echo $manage_profile[0]["phone"] ?>" placeholder="Enter contact no." required class="form-control">
                </div>


                <!-- email -->
                <div class="form-group mt-3">
                    <label> Email </label>
                    <input type="email" name="email" value="<?php echo $manage_profile[0]["email"] ?>" placeholder="Enter email" required class="form-control">
                </div>


                <!-- adress -->
                <div class="form-group mt-3">
                    <label> Address </label>
                    <textarea type="text" name="address" placeholder="Enter Adress" required class="form-control">
                        <?php echo $manage_profile[0]["address"]; ?>
                    </textarea>
                </div>


                <!-- city -->
                <div class="form-group mt-3">
                    <label> Select city id </label>
                    <select name="city" required class="form-control">
                        <option value=""> -select city-  </option>
                    
                        <?php
                        foreach($city as $ct)
                        {                    
                        ?>
                            <option value="<?php echo $ct["city_id"]; ?>" selected='selected'> <?php echo $ct["city_name"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            
                <!-- state -->
                <div class="form-group mt-3">
                    <label> Select state id </label>
                    <select name="state" required class="form-control">
                        <option> -select state- </option>
                        <?php
                        foreach($state as $st)
                        {
                        ?>
                            <option value="<?php echo $st["state_id"]; ?>" selected='selected'> <?php echo $st["state_name"]; ?> </option>
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
                            <option value="<?php echo $cn["country_id"]; ?>" selected="selected"> <?php echo $cn["country_name"]; ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group mt-4">

                    <!-- submit btn -->
                    <input type="submit" name="sub" value="Update" class="btn btn-success text-white text-center"> 

                    <!-- reset btn -->
                    <input type="Reset" name="btn-add-card" value="Reset" class="btn btn-danger text-white text-center">

                </div>
        
            </form>
            <!-- form end -->

        <?php
        }
        ?>

    </div>
</body>
</html>