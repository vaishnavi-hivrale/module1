<div class="mt-2 p-3">

    <!-- heading -->
    <div class="mt-3 p-2">
        <span style="margin-left:15%; font-size:31px"> <b> View Assignments </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:45%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="mt-4 p-2">
        <table class="table table-responsive table-striped mx-auto w-75">
            <tr> 
                <th style="background-color:#F3DFCB; color:#112046;"> Assignment ID </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Assignment File </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Subject </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Assignment Name </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Assignment Description </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Assigned Date </th>
                <th style="background-color:#F3DFCB; color:#112046;"> Due Date </th>
            </tr>
            
            <?php 
            if(isset($student_assignments))
            {
                foreach($student_assignments as $data)
                {
                    if($student_data["subject_id"] == $data["subject_id"])
                    {
            ?>
                        <tr>
                            <td> <?php echo $data["assignment_id"]; ?> </td>
                            <td> <a href="<?php echo $data["assignment_path"] ?>" style="background-color:#112046; color:white;" class="btn btn-md"> <i class="bi bi-file-earmark"> </i> </a> </td>
                            <td> <?php echo $data["subject_name"] ?> </td>
                            <td> <?php echo $data["assignment_name"] ?> </td>
                            <td> <?php echo $data["assignment_description"] ?> </td>
                            <td> <?php echo $data["assigned_date"] ?> </td>
                            <td> <?php echo $data["due_date"] ?> </td>
                        </tr>
            <?php
                    }
                }
            }
            else
            {
            ?>
                <tr>
                    <td colspan="7" class="text-center"> No Data Available. </td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
    
</div>