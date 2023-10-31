<div class="mt-5 p-3">

    <!-- heading -->
    <div class="mt-2 p-3">
        <span style="margin-left:15%; font-size:31px"> <b> Edit Student Profile </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:40%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>


    <div class="mt-2 p-0">

        <form method="post" class="mt-2 p-0">
    
            <!-- table start -->
            <table class="table table-responsive table-bordered table-striped mx-auto w-75"> 
            
                <tbody>
                    
                    <!-- student id -->
                    <tr>
                        <td> Student Id </td>
                        <td> <input type="text" name="student-id" value="<?php echo $student_data["student_id"]; ?>" placeholder="Faculty Id" class="form-control" readonly required> </td>
                    </tr>

                    <!-- first name -->
                    <tr>
                        <td> First Name </td>
                        <td> <input type="text" name="student-firstname" value="<?php echo $student_data["student_first_name"]; ?>" placeholder="Enter First Name" class="form-control" required> </td>
                    </tr>

                    <!-- last name -->
                    <tr>
                        <td> Last Name </td>
                        <td> <input type="text" name="student-lastname" value="<?php echo $student_data["student_last_name"]; ?>" placeholder="Enter Last Name" class="form-control" required> </td>
                    </tr>


                    <!-- contact -->
                    <tr>
                        <td> Contact </td>
                        <td> <input type="text" name="student-contact" value="<?php echo $student_data["student_contact"]; ?>" placeholder="Enter Contact no." maxlength="10" minlength="10" class="form-control" required> </td>
                    </tr>


                    <!-- dob -->
                    <tr>
                        <td> Date of Birth </td>
                        <td> <input type="date" name="student-dob" value="<?php echo $student_data["student_dob"]; ?>" placeholder="Enter Date of Birth" class="form-control" required> </td>
                    </tr>

                    <!-- gender -->
                    <tr>
                        <td> Gender </td>
                        <?php
                        if($student_data["student_gender"] == "male")
                        {
                        ?>
                            <td> 
                                <input type="radio" name="student-gender" checked="checked" value="male" required> Male 
                                <input type="radio" name="student-gender" value="female" required> Female
                                <input type="radio" name="student-gender" value="other" required> Other
                            </td>  
                        <?php
                        }
                        else if($student_data["student_gender"] == "female")
                        {
                        ?>
                            <td> 
                                <input type="radio" name="student-gender" value="male" required> Male 
                                <input type="radio" name="student-gender" value="female" checked="checked" required> Female
                                <input type="radio" name="student-gender" value="other" required> Other
                            </td> 
                        <?php
                        }
                        else if($student_data["student_gender"] == "other")
                        {
                        ?>
                            <td> 
                                <input type="radio" name="student-gender" value="male" required> Male 
                                <input type="radio" name="student-gender" value="female" required> Female
                                <input type="radio" name="student-gender" value="other" checked="checked" required> Other
                            </td> 
                        <?php
                        }
                        else
                        {
                        ?>
                            <td> 
                                <input type="radio" name="student-gender" value="male" required> Male 
                                <input type="radio" name="student-gender" value="female" required> Female
                                <input type="radio" name="student-gender" value="other" required> Other
                            </td>
                        <?php 
                        }
                        ?>
                    </tr>


                    <!-- email -->
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="student-email" value="<?php echo $student_data["student_email"]; ?>" placeholder="Enter Email" class="form-control" required> </td>
                    </tr>


                    <!-- address -->
                    <tr>
                        <td> Address </td>
                        <td> <textarea name="student-address" placeholder="Enter Address" class="form-control" required><?php echo $student_data["student_address"]; ?>
                        </textarea> </td>
                    </tr>


                    <!-- edit-student-profile-btn -->
                    <tr>
                        <td colspan="2"> <input type="submit" name="edit-student-profile-btn" value="Edit" class="btn btn-md text-light text-center" style="background-color:#112046; margin-left:45%;"> </td>
                    </tr>

                </tbody>

            </table>
            <!-- table end -->
        
        </form>
    
    </div>
    
</div>