<?php 
if(isset($_GET["student-id"]))
{
?>
<div class="mt-3 p-3">

<div class="mt-3 p-0">
    <span style="color:#112046; color:#112046; font-size:31px; margin-left:15%;" >
        <b> Student data </b> 
        <a href="<?php echo $mainurl; ?>" class="btn btn-md btn-danger text-light text-center" style="margin-left:50%;"> Back </a>
    </span>
    <hr class="border border-2 border-dark mx-auto w-75">
</div>

<div class="mt-2 p-2">
    <form method="post">
        <table class="table table-responsive table-striped table-bordered mt-3 mx-auto w-75">

            <!-- student id -->
            <tr> 
                <td> Student Id </td>
                <td> <?php echo $student_info["student_id"]; ?> </td>    
            </tr>

            <!-- first name -->
            <tr> 
                <td> First Name </td>
                <td> <?php echo $student_info["student_first_name"]; ?> </td>    
            </tr>

            <!-- last name -->
            <tr> 
                <td> Last Name </td>
                <td> <?php echo $student_info["student_last_name"]; ?> </td>    
            </tr>

            <!-- student subject -->
            <tr> 
                <td> Subject </td>
                <td> <?php echo $student_info["subject_name"]; ?> </td>    
            </tr>

            <!-- marks -->
            <tr> 
                <td> Marks </td>
                <td> <input type="text" name="student-marks" placeholder="Enter Student's marks" class="form-control" value="<?php echo $student_info["student_marks"]; ?>" required> </td>    
            </tr>

            <!-- edit-marks-btn -->
            <tr> 
                <td colspan="2"> <input type="submit" name="add-marks-btn" value="Add Marks" class="btn tbn-md text-light text-center" style="background-color:#112046; margin-left:45%;"> </td>    
            </tr>

        </table>
    </form>    

</div>

</div>
<?php
}    
else
{
?>
<div class="mt-3 p-3">

    <div class="mt-2 p-4">
        <span style="color:#112046; color:#112046; font-size:31px; margin-left:15%;" >
            <b> Student data </b> 
            <a href="<?php echo $mainurl; ?>" class="btn btn-md btn-danger text-light text-center" style="margin-left:50%;"> Back </a>
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="mt-2 p-3">

        <!-- table start -->
        <table class="table table-responsive table-striped w-75 mx-auto">
            <tbody>

                <tr>
                    <!-- student id -->
                    <th style="background-color:#F3DFCB; color:#112046" > Student ID </th>

                    <!-- first name -->
                    <th style="background-color:#F3DFCB; color:#112046" > First Name </th>

                    <!-- last name -->
                    <th style="background-color:#F3DFCB; color:#112046"> Last Name </th>

                    <!-- subject -->
                    <th style="background-color:#F3DFCB; color:#112046" > Subject </th>

                    <!-- marks -->
                    <th style="background-color:#F3DFCB; color:#112046" > Marks </th>

                    

                    <!-- Edit -->
                    <th style="background-color:#F3DFCB; color:#112046"> Edit </th>
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
                        
                        
                        <!-- subject -->
                        <td> <?php echo $student["subject_name"]; ?> </td>
                        
                        <!-- marks -->
                        <td> <?php echo $student["student_marks"]; ?> </td>
                        
                        <!-- add marks -->
                        <!-- querystring : href="<?php //echo $mainurl; ?>add-marks?student-id=<?php //echo $student["student_id"]; ?>" -->

                        <td> <a href="<?php echo $mainurl; ?>add-marks?student-id=<?php echo $student["student_id"]; ?>" class="btn tbn-md text-center text-light" style="background-color:#112046"> <b> <i class="bi bi-pencil"> </i> </b> </td>
                    </tr>
                <?php
                }
            }
                ?>

            </tbody>
        </table>
        <!-- table end -->
       
    </div>
</div>
<?php
}
?>