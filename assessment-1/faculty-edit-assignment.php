<div class="mt-5 p-3">
    <form method="post" enctype="multipart/form-data">
    <!-- heading -->
    <div class="mt-0 p-0">
        <span style="margin-left:15%; font-size:31px"> <b> Edit Assignments </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:40%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="mt-4 p-0">
        
        <!-- table start -->
        <table class="table table-responsive table-striped table-bordered table-light w-75 mx-auto">

            <tr>
                <td> ID </td>
                <td> <input type="text" name="id" readonly placeholder="Assignment Id" value="<?php echo $assignment["assignment_id"]; ?>" class="form-control">  </td>    
            </tr>

            <tr>
                <td> Subject </td>
                <td>  
                    <select name="assignment-subject" class="form-control" required>
                        <option value=""> -select subject- </option>

                        <?php
                        foreach($subjects as $sub)
                        {
                            if($faculty_data["subject_id"] == $sub["subject_id"])
                            {
                        ?>
                                <option value="<?php echo $sub["subject_id"] ?>" selected="selected"> <?php echo $sub["subject_name"]; ?> </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td> 
            </tr>

            <tr>
                <td> Assignment File </td>
                <td>
                    <a href="<?php echo $assignment["assignment_path"]; ?>" class="btn btn-md text-white" style="background-color:#112046; color:white;"> <i class="bi bi-file-earmark"> </i> </a>

                    <input type="file" name="assignment-file" value="<?php echo $assignment["assignment_path"]; ?>" class="form-control mt-2"> 
                </td>
            </tr>


            <tr>
                <td> Assignment Name </td>
                <td> <input type="text" name="assignment-name" placeholder="Assignment Name" value="<?php echo $assignment["assignment_name"]; ?>" class="form-control"> </td>
            </tr>


            <tr>
                <td> Description </td>
                <td> <input type="text" name="assignment-description" placeholder="Assignment Description" value="<?php echo $assignment["assignment_description"]; ?>" class="form-control">  </td>
            </tr>


            <tr>
                <td> Assigned Date </td>
                <td> <input type="date" name="assigned-date" placeholder="Assigned Date" value="<?php echo $assignment["assigned_date"]; ?>" class="form-control"> </td>
            </tr>


            <tr>
                <td> Due date </td>
                <td> <input type="date" name="due-date" placeholder="Due Date" value="<?php echo $assignment["due_date"]; ?>" class="form-control">  </td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" name="edit-assignment-btn" value="Edit" class="btn btn-md text-light" style="background-color:#112046; margin-left:45%;"> </td>
            </tr>
            
        </table>
        <!-- table end -->

    </div>

    </form>

</div>