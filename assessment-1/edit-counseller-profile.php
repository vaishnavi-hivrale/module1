<div class="mt-5 p-3">

    <!-- heading -->
    <div class="mt-2 p-3">
        <span style="margin-left:15%; font-size:31px"> <b> Edit Counseller Profile </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:40%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>


    <div class="mt-2 p-0">

        <form method="post" class="mt-2 p-0">
    
            <!-- table start -->
            <table class="table table-responsive table-striped mx-auto w-75"> 
            
                <tbody>
                    
                    <!-- counseller id -->
                    <tr>
                        <td> Counseller Id </td>
                        <td> <input type="text" name="counseller-id" value="<?php echo $counseller_data["counseller_id"]; ?>" placeholder="Counceller Id" class="form-control" readonly required> </td>
                    </tr>

                    <!-- first name -->
                    <tr>
                        <td> First Name </td>
                        <td> <input type="text" name="counseller-firstname" value="<?php echo $counseller_data["counseller_first_name"]; ?>" placeholder="Enter First Name" class="form-control" required> </td>
                    </tr>

                    <!-- last name -->
                    <tr>
                        <td> Last Name </td>
                        <td> <input type="text" name="counseller-lastname" value="<?php echo $counseller_data["counseller_last_name"]; ?>" placeholder="Enter Last Name" class="form-control" required> </td>
                    </tr>

                    <!-- email -->
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="counseller-email" value="<?php echo $counseller_data["counseller_email"]; ?>" placeholder="Enter Email" class="form-control" required> </td>
                    </tr>

                    <!-- contact -->
                    <tr>
                        <td> Contact </td>
                        <td> <input type="text" name="counseller-contact" value="<?php echo $counseller_data["counseller_contact"]; ?>" placeholder="Enter Contact no." maxlength="10" minlength="10" class="form-control" required> </td>
                    </tr>

                    <!-- dob -->
                    <tr>
                        <td> Date of Birth </td>
                        <td> <input type="date" name="counseller-dob" value="<?php echo $counseller_data["counseller_dob"]; ?>" placeholder="Enter Date of Birth" class="form-control" required> </td>
                    </tr>

                    <!-- gender -->
                    <tr>
                        <td> Gender </td>
                        <?php 
                            if($counseller_data["counseller_gender"] == "male")
                            {
                        ?>
                                <td> 
                                    <input type="radio" name="counseller-gender" value="male" checked required> Male &nbsp;
                                    <input type="radio" name="counseller-gender" value="female" required> Female &nbsp;
                                    <input type="radio" name="counseller-gender" value="other" required> Other

                                </td>
                        <?php
                            }  
                            else if($counseller_data["counseller_gender"] == "female")
                            {
                        ?>
                                <td> 
                                    <input type="radio" name="counseller-gender" value="male" required> Male &nbsp;
                                    <input type="radio" name="counseller-gender" value="female" checked required> Female &nbsp;
                                    <input type="radio" name="counseller-gender" value="other" required> Other
                                </td>
                        <?php
                            }  
                            else if($counseller_data["counseller_gender"] == "other")
                            {
                        ?>
                                <td> 
                                    <input type="radio" name="counseller-gender" value="male" required> Male &nbsp;
                                    <input type="radio" name="counseller-gender" value="female" required> Female &nbsp;
                                    <input type="radio" name="counseller-gender" value="other" checked required> Other
                                </td>
                        <?php
                            }
                            else
                            {
                        ?>
                                <td> 
                                    <input type="radio" name="counseller-gender" value="male" required> Male &nbsp;
                                    <input type="radio" name="counseller-gender" value="female" required> Female &nbsp;
                                    <input type="radio" name="counseller-gender" value="other" required> Other
                                </td>
                        <?php
                            }
                        ?>
                        
                    </tr>

                    <!-- address -->
                    <tr>
                        <td> Address </td>
                        <td> <textarea name="counseller-address" placeholder="Enter Address" class="form-control" required><?php echo $counseller_data["counseller_address"]; ?>
                        </textarea> </td>
                    </tr>

                    <!-- edit-counseller-profile-btn -->
                    <tr>
                        <td colspan="2"> <input type="submit" name="edit-counseller-profile-btn" value="Edit" class="btn btn-md text-light text-center" style="background-color:#112046; margin-left:45%;"> </td>
                    </tr>

                </tbody>

            </table>
            <!-- table end -->
        
        </form>
    
    </div>
    
</div>