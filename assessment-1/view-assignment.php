<div class="mt-5 p-3">
    
    <!-- heading -->
    <div class="mt-0 p-3">
        <span style="margin-left:15%; font-size:31px"> <b> View Assignments </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:40%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="mt-0 p-3">
        
        <!-- table start -->
        <table class="table table-responsive table-striped table-bordered table-light w-75 mx-auto">

            <tr>
                <td> ID </td>
                <td> <?php echo $assignment["assignment_id"]; ?>  </td>    
            </tr>

            <tr>
                <td> Subject </td>
                <td> <?php echo $assignment["subject_name"]; ?>  </td>    
            </tr>

            <tr>
                <td> Assignment File </td>
                <td> <a href="<?php echo $assignment["assignment_path"]; ?>" class="btn btn-md text-white" style="background-color:#112046; color:white;"> <i class="bi bi-file-earmark"> </i> </a> </td>
            </tr>


            <tr>
                <td> Assignment Name </td>
                <td> <?php echo $assignment["assignment_name"]; ?>  </td>
            </tr>


            <tr>
                <td> Description </td>
                <td> <?php echo $assignment["assignment_description"]; ?>  </td>
            </tr>


            <tr>
                <td> Assigned Date </td>
                <td> <?php echo $assignment["assigned_date"]; ?>  </td>
            </tr>


            <tr>
                <td> Due date </td>
                <td> <?php echo $assignment["due_date"]; ?>  </td>
            </tr>
            
        </table>
        <!-- table end -->

    </div>

</div>