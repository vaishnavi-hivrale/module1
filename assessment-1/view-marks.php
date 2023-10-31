<div class="mt-3 p-5">

    <div class="mt-2 p-2">
        <span style="color:#112046; color:#112046; font-size:31px; margin-left:15%;" >
            <b> Student Marks </b> 
            <a href="<?php echo $mainurl; ?>" class="btn btn-md btn-danger text-light text-center" style="margin-left:50%;"> Back </a>
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="m-2 p-2">
    <table class="table table-responsive table-striped table-bordered mt-5 mx-auto w-75 mt-2 p-2">

        <!-- student id -->
        <tr> 
            <td> Student Id </td>
            <td> <?php echo $student_data["student_id"]; ?> </td>    
        </tr>

        <!-- first name -->
        <tr> 
            <td> Name </td>
                <td> <?php echo $student_data["student_first_name"]; ?> &nbsp; 
                <?php echo $student_data["student_last_name"]; ?>
            </td>       
        </tr>
        
        <!-- student subject -->
        <tr> 
            <td> Subject </td>
            <td> <?php echo $student_data["subject_name"]; ?> </td>    
        </tr>

        <!-- marks -->
        <tr> 
            <td> Marks </td>
            <td> <?php echo $student_data["student_marks"]; ?> </td>    
        </tr>

    </table>

</div>
</div>