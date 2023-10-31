<div class="mt-3 p-3">
    <div class="mt-3 p-3">
        <span style="font-size:31px; color:#112046; margin-left:15%;"> <b> Edit Student Data </b> 
        <a href="<?php echo $mainurl; ?>" class="btn btn-md btn-danger text-light" style="margin-left:45%;"> Back </a>
    </span>
    <hr class="border border-2 border-dark w-75 mx-auto">
    </div>

    <div class="mt-2 p-3">
        <form method="post" class="p-3 shadow">
        <table class="table table-responsive table-striped w-75 mx-auto">
            
            <!-- Student id -->
            <div class="form-group">
            <tr>
                <td> Student Id </td>
                <td> 
                    <input type="text" placeholder="Student Id" name="student-id" value="<?php echo $student_info["student_id"] ?>" readonly class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- first name -->
            <div class="form-group">
            <tr>
                <td> First Name </td>
                <td> 
                    <input type="text" placeholder="First Name" name="student-first-name" value="<?php echo $student_info["student_first_name"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- last name -->
            <div class="form-group">
            <tr>
                <td> Last Name </td>
                <td> 
                    <input type="text" placeholder="Last Name" name="student-last-name" value="<?php echo $student_info["student_last_name"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- contact no. -->
            <div class="form-group">
            <tr>
                <td> Contact no. </td>
                <td> 
                    <input type="text" placeholder="Contact no." name="student-contact" minlength="10" maxlength="10" value="<?php echo $student_info["student_contact"]; ?>" class="form-control" required> 
                </td>
            </tr>
            </div>

            <!-- DOB-->
            <div class="form-group">
            <tr>
                <td> DOB </td>
                <td> 
                    <input type="date" placeholder="Date Of Birth" name="student-dob" value="<?php echo $student_info["student_dob"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- gender -->
            <div class="form-group">
            <tr>
                <td> Gender </td>
                <td> 
                    <?php
                    if($student_info["student_gender"] == "male")
                    {
                    ?>
                        <input type="radio" name="student-gender" value="male" required> Male
                        <input type="radio" name="student-gender" value="female" required> Female
                        <input type="radio" name="student-gender" value="other" required> Other
                    <?php
                    }
                    else if($student_info["student_gender"] == "female")
                    {
                    ?>
                        <input type="radio" name="student-gender" value="male" required> Male
                        <input type="radio" name="student-gender" checked="checked" value="female" required> Female
                        <input type="radio" name="student-gender" value="other" required> Other
                    <?php
                    }
                    else if($student_info["student_gender"] == "other")
                    {
                    ?>
                        <input type="radio" name="student-gender" value="male" required> Male
                        <input type="radio" name="student-gender" checked="checked" value="female" required> Female
                        <input type="radio" name="student-gender" value="other" required> Other
                    <?php
                    }
                    else
                    {
                    ?>
                        <input type="radio" name="student-gender" value="male" required> Male
                        <input type="radio" name="student-gender" value="female" required> Female
                        <input type="radio" name="student-gender" value="other" required> Other
                    <?php
                    }
                    ?>
                      
                </td>
            </tr>
            </div>

            <!-- email -->
            <div class="form-group">
            <tr>
                <td> Email </td>
                <td> 
                    <input type="email" placeholder="Email" name="student-email" value="<?php echo $student_info["student_email"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- address -->
            <div class="form-group">
            <tr>
                <td> Address </td>
                <td> 
                    <textarea placeholder="Address" name="student-address" class="form-control" required><?php echo $student_info["student_address"] ?> 
                    </textarea>  
                </td>
            </tr>
            </div>

            <!-- subject -->
            <div class="form-group">
            <tr>
                <td> Subject </td>
                <td> 

                    <select name="student-subject" class="form-control" required>
                        <option value=""> -select subject- </option>

                        <?php
                        foreach($subjects as $sub)
                        {
                            if($sub["subject_id"] == $student_info["subject_id"])
                            {
                        ?>
                                <option value="<?php echo $sub["subject_id"]; ?>" selected="selected"> <?php echo $sub["subject_name"]; ?> </option>
                        <?php
                            }
                            else
                            {
                        ?>
                                <option value="<?php echo $sub["subject_id"]; ?>"> <?php echo $sub["subject_name"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            </div>
            
            <!-- faculty -->
            <div class="form-group">
            <tr>
                <td> Faculty </td>
                <td> 

                    <select name="student-faculty" class="form-control" required>
                        <option value=""> -select faculty- </option>

                        <?php
                        foreach($faculties as $data)
                        {
                            if($data["faculty_id"] == $student_info["faculty_id"])
                            {
                        ?>
                                <option value="<?php echo $data["faculty_id"]; ?>" selected="selected"> 
                                    <?php echo $data["faculty_first_name"]; ?> &nbsp; 
                                    <?php echo $data["faculty_last_name"]; ?>
                                </option>
                        <?php
                            }
                            else
                            {
                        ?>
                                <option value="<?php echo $data["faculty_id"]; ?>"> 
                                    <?php echo $data["faculty_first_name"]; ?> &nbsp;
                                    <?php echo $data["faculty_last_name"]; ?>
                                </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            </div>
            
            <!-- marks -->
            <div class="form-group">
            <tr>
                <td> Marks </td>
                <td> 
                    <input type="text" placeholder="Marks" name="student-marks" value="<?php echo $student_info["student_marks"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- fees -->
            <div class="form-group">
            <tr>
                <td> Fees </td>
                <td> 
                    <input type="text" placeholder="Fees" name="student-fees" value="<?php echo $student_info["student_fees"] ?>" class="form-control" required>  
                </td>
            </tr>
            </div>

            <!-- edit btn -->
            <div class="form-group">
            <tr>
                <td colspan="2"> 
                    <input type="submit" name="edit-student-data-btn" value="Edit" class="btn btn-md text-light text-center" style="background-color:#112046; margin-left:45%">  
                </td>
            </tr>
            </div>
        </table>
    </div>
</div>