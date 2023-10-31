<div class="mt-2 p-3">

    <!-- view students for counseller -->
    <?php 
    if(isset($_SESSION["counsellerid"]))
    {
    ?>
        <div class="mt-5 p-0">

            <!-- Heading -->
            <span class="text-center" style="color:#112046; font-size:31px; margin-left:2%;"> <b> All Students Details </b> 
            
            <!-- back btn -->
            <a class="btn btn-md btn-danger text-center text-light" style="margin-left:72%;"> Back </a>
            </span> 
            <hr class="border border-dark border-2 mx-auto"> 
        </div>

        <div class="mt-4 p-3">

            <!-- table start -->
            <table class="table table-responsive table-striped mx-auto">
                <tbody>

                    <tr>
                        <!-- student id -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Student ID </th>

                        <!-- first name -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> First Name </th>

                        <!-- last name -->
                        <th style="background-color:#F3DFCB; color:#112046"class="text-center"> Last Name </th>

                        <!-- contact no. -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Contact No. </th>

                        <!-- dob -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> DOB </th>

                        <!-- gender -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Gender </th>

                        <!-- email -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Email </th>

                        <!-- address -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Address </th>

                        <!-- subject -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Subject </th>

                        <!-- faculty -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Faculty </th>

                        <!-- marks -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Marks </th>

                        <!-- fees -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Fees </th>

                        <!-- View -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> View </th>

                        <!-- Edit -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Edit </th>

                        <!-- Delete -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Delete </th>
                    </tr>

                    <?php 
                    if(isset($allstudents))
                    {

                        foreach($allstudents as $student)
                        {
                        ?>
                            <tr> 
                                <!-- student id -->
                                <td> <?php echo $student["student_id"]; ?> </td>
                    
                                <!-- first name -->
                                <td> <?php echo $student["student_first_name"]; ?> </td>
                                
                                <!-- last name -->
                                <td> <?php echo $student["student_last_name"]; ?> </td>
                                
                                <!-- contact -->
                                <td> <?php echo $student["student_contact"]; ?> </td>

                                <!-- dob -->
                                <td> <?php echo $student["student_dob"]; ?> </td>

                                <!-- gender -->
                                <td> <?php echo $student["student_gender"]; ?> </td>
                                
                                <!-- email -->
                                <td> <?php echo $student["student_email"]; ?> </td>

                                <!-- address -->
                                <td> <?php echo $student["student_address"]; ?> </td>
                                
                                <!-- subject -->
                                <td> <?php echo $student["subject_name"]; ?> </td>

                                <!-- faculty -->
                                <td> <?php echo $student["faculty_first_name"]; ?> </td>
                                
                                <!-- marks -->
                                <td> <?php echo $student["student_marks"]; ?> </td>
                                
                                <!-- fees -->
                                <td> <?php echo $student["student_fees"]; ?> </td>

                                <!-- view btn -->
                                <!-- how query string is passed : href="<?php //echo $mainurl; ?>view-student-data?student-id=<?php //echo $student["student_id"]; ?>" -->

                                <td> <a href="<?php echo $mainurl; ?>view-student-data?student-id=<?php echo $student["student_id"]; ?>" class="btn tbn-md text-center text-light" style="background-color:#112046"> <b> <i class="bi bi-book"> </i> </b> </td>


                                <!-- edit btn -->
                                <!-- querystring : href="<?php //echo $mainurl; ?>edit-student-data?student-id=<?php //echo $student["student_id"]; ?>" -->

                                <td> <a href="<?php echo $mainurl; ?>edit-student-data?student-id=<?php echo $student["student_id"]; ?>" class="btn tbn-md text-center text-light" style="background-color:#112046"> <b> <i class="bi bi-pencil"> </i> </b> </td>


                                <!-- delete btn -->
                                <!-- querystring: href="<?php //echo $mainurl; ?>?delid = <?php //echo $student["student_id"]; ?>" -->

                                <td> <a href="<?php echo $mainurl; ?>?delid=<?php echo $student["student_id"]; ?>" onclick="return confirm('Are you sure to delete this student data?')" class="btn tbn-md btn-danger text-center text-light"> <b> <i class="bi bi-trash"> </i> </b> </td>
                            </tr>
                        <?php
                        }
                    }
                    else
                    {
                    ?>
                        <tr>
                            <td colspan="11" class="text-center"> No data available. </tr>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
            <!-- table end -->
        </div>
    <?php
    }

    // view students for faculty
    if(isset($_SESSION["facultyid"]))
    {
    ?>

        <div class="mt-5 p-0">

            <!-- Heading -->
            <span class="text-center" style="color:#112046; font-size:31px; margin-left:15%;"> <b> All Students Details </b> 
            
            <!-- back btn -->
            <a class="btn btn-md btn-danger text-center text-light" style="margin-left:45%;"> Back </a>
            </span> 
            <hr class="border border-dark w-75 border-2 mx-auto"> 
        </div>

        <div class="mt-2 p-3">
            <!-- table start -->
            <table class="table table-responsive table-striped w-75 mx-auto">
                <tbody>

                    <tr>
                        <!-- student id -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Student ID </th>

                        <!-- first name -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> First Name </th>

                        <!-- last name -->
                        <th style="background-color:#F3DFCB; color:#112046"class="text-center"> Last Name </th>

                        <!-- gender -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Gender </th>

                        <!-- contact no. -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Contact No. </th>

                         <!-- email -->
                         <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Email </th>

                        <!-- subject -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Subject </th>

                        <!-- marks -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> Marks </th>

                        <!-- View -->
                        <th style="background-color:#F3DFCB; color:#112046" class="text-center"> View </th>
                    </tr>

                    <?php 
                    foreach($allstudents as $student)
                    {
                        if($faculty_data["subject_id"] == $student["subject_id"])
                        {
                    ?>
                        <tr> 
                            <!-- student id -->
                            <td> <?php echo $student["student_id"]; ?> </td>
                
                            <!-- first name -->
                            <td> <?php echo $student["student_first_name"]; ?> </td>
                            
                            <!-- last name -->
                            <td> <?php echo $student["student_last_name"]; ?> </td>

                            <!-- gender -->
                            <td> <?php echo $student["student_gender"]; ?> </td>
                            
                            <!-- contact -->
                            <td> <?php echo $student["student_contact"]; ?> </td>

                            <!-- email -->
                            <td> <?php echo $student["student_email"]; ?> </td>
                            
                            <!-- subject -->
                            <td> <?php echo $student["subject_name"]; ?> </td>
                            
                            <!-- marks -->
                            <td> <?php echo $student["student_marks"]; ?> </td>
                            

                            <!-- view btn -->
                            <!-- how query string is passed : href="<?php //echo $mainurl; ?>view-student-data?student-id=<?php //echo $student["student_id"]; ?>" -->

                            <td> <a href="<?php echo $mainurl; ?>view-student-data?student-id=<?php echo $student["student_id"]; ?>" class="btn tbn-md text-center text-light" style="background-color:#112046"> <b> <i class="bi bi-book"> </i> </b> </td>
                        </tr>
                    <?php
                    }
                }
                    ?>

                </tbody>
            </table>
            <!-- table end -->
        </div>
    <?php
    }
    ?>
</div>