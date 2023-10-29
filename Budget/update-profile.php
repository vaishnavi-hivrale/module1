<div class="mt-3 p-5 content">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> UPDATE PROFILE FORM </h3>
    </div>

    <div class="mt-5">
        
        <form method="post" enctype="multipart/form-data">
            
            <table class="frm table table-responsive table-bordered table-striped" style="width:100%">
                    
                <tbody>
                    
                    <tr>   
                        <td> User Id </td>
                        <td> <input type="text" class="form-control" readonly name="user-id" value="<?php echo $user_data["user_id"]; ?>" placeholder="User Id" required> </td>    
                    </tr>

                    <tr>   
                        <td> First Name </td>
                        <td> <input type="text" class="form-control" name="first-name" value="<?php echo $user_data["first_name"]; ?>" placeholder="Enter First Name" required> </td>    
                    </tr>
                    

                    <tr>   
                        <td> Last Name </td>
                        <td> <input type="text" class="form-control" name="last-name" value="<?php echo $user_data["last_name"]; ?>" placeholder="Enter Last Name" required> </td>    
                    </tr>

                    <tr>   
                        <td> Country </td>
                        <td> 
                            <select name="country" required class="form-control"> 
                                <option value=""> -select country- </option>

                                <?php
                                foreach($countries as $cn)
                                {
                                    if($user_data["country_id"] == $cn["country_id"])
                                    {
                                ?>
                                        <option value="<?php echo $cn["country_id"]; ?>" selected="selected"> <?php echo $cn["country_name"] ?> </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                        <option value="<?php echo $cn["country_id"]; ?>"> <?php echo $cn["country_name"] ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>    
                    </tr>

                    <tr>   
                        <td> State </td>
                        <td> 
                            <select name="state" required class="form-control"> 
                                <option value=""> -select state- </option>

                                <?php
                                foreach($states as $st)
                                {
                                    if($user_data["state_id"] == $st["state_id"])
                                    {
                                ?>
                                        <option value="<?php echo $st["state_id"]; ?>" selected="selected"> <?php echo $st["state_name"] ?> </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                        <option value="<?php echo $st["state_id"]; ?>"> <?php echo $st["state_name"] ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>  
                    </tr>

                    <tr>   
                        <td> City </td>
                        <td> 
                            <select name="city" required class="form-control"> 
                                <option value=""> -select city- </option>

                                <?php
                                foreach($cities as $ct)
                                {
                                    if($user_data["city_id"] == $ct["city_id"])
                                    {
                                ?>
                                        <option value="<?php echo $ct["city_id"]; ?>" selected="selected"> <?php echo $ct["city_name"] ?> </option>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                        <option value="<?php echo $ct["city_id"]; ?>"> <?php echo $ct["city_name"] ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>  
                    </tr>

                    <tr>   
                        <td> Contact </td>
                        <td> <input type="number tel" min="10" max="10" class="form-control" name="contact" value="<?php echo $user_data["contact"]; ?>" placeholder="Enter Contact No." required> </td>    
                    </tr>

                    <tr>   
                        <td> Email </td>
                        <td> <input type="email" class="form-control" name="email" value="<?php echo $user_data["email"]; ?>" placeholder="Enter Email" required> </td>    
                    </tr>

                    <tr>   
                        <td> Address </td>
                        <td> 
                            <textarea class="form-control" name="address" placeholder="Enter Address" required><?php echo $user_data["address"]; ?> </textarea >
                        </td>    
                    </tr>

                    <tr>   
                        <td colspan="2"> <input type="submit" class="btn btn-md" style="margin-left:40%" name="update-profile-btn" value="Update Profile" style-color>  </td>    
                    </tr>

                </tbody>
        
            </table>
    
        </form>
    
    </div>
        
</div>