<?php
    if(isset($_SESSION["counsellerid"]))
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

<table class="table table-responsive table-striped table-bordered mt-4 mx-auto w-75">

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

    <!-- student contact no. -->
    <tr> 
        <td> Contact no. </td>
        <td> <?php echo $student_info["student_contact"]; ?> </td>    
    </tr>

    <!-- dob -->
    <tr> 
        <td> DOB </td>
        <td> <?php echo $student_info["student_dob"]; ?> </td>    
    </tr>

    <!-- gender -->
    <tr> 
        <td> Gender </td>
        <td> <?php echo $student_info["student_gender"]; ?> </td>    
    </tr>

    <!-- email -->
    <tr> 
        <td> Email </td>
        <td> <?php echo $student_info["student_email"]; ?> </td>    
    </tr>

    <!-- student address -->
    <tr> 
        <td> Address </td>
        <td> <?php echo $student_info["student_address"]; ?> </td>    
    </tr>

    <!-- student subject -->
    <tr> 
        <td> Subject </td>
        <td> <?php echo $student_info["subject_name"]; ?> </td>    
    </tr>

    <!-- student faculty -->
    <tr> 
        <td> Faculty </td>
        <td> <?php echo $student_info["faculty_first_name"]; ?> &nbsp; <?php echo $student_info["faculty_last_name"]; ?> </td>    
    </tr>

    <!-- marks -->
    <tr> 
        <td> Marks </td>
        <td> <?php echo $student_info["student_marks"]; ?> </td>    
    </tr>

    <!-- fees -->
    <tr> 
        <td> Fees </td>
        <td> <?php echo $student_info["student_fees"]; ?> </td>    
    </tr>

</table>

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

<table class="table table-responsive table-striped table-bordered mt-4 mx-auto w-75">

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

    <!-- gender -->
    <tr> 
        <td> Gender </td>
        <td> <?php echo $student_info["student_gender"]; ?> </td>    
    </tr>

    <!-- student contact no. -->
    <tr> 
        <td> Contact no. </td>
        <td> <?php echo $student_info["student_contact"]; ?> </td>    
    </tr>

    <!-- email -->
    <tr> 
        <td> Email </td>
        <td> <?php echo $student_info["student_email"]; ?> </td>    
    </tr>

    <!-- student subject -->
    <tr> 
        <td> Subject </td>
        <td> <?php echo $student_info["subject_name"]; ?> </td>    
    </tr>

    <!-- marks -->
    <tr> 
        <td> Marks </td>
        <td> <?php echo $student_info["student_marks"]; ?> </td>    
    </tr>

</table>

</div>
    <?php
    }
?>