<div class="mt-5 p-3">

    <!-- heading -->
    <div class="mt-3 p-2">
        <span style="margin-left:2%; font-size:31px"> <b> View Assignments </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:72%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto">
    </div>

    <div class="mt-4 p-2 table-responsive">

        <!-- table start -->
        <table class="table table-striped table-ligth mx-auto table-scroll">
            <tbody>


                <tr>
                    <th style="background-color:#F3DFCB; color:#112046;"> ID </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Assignment Subject </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Assignment file </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Assignment Name </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Assignment Description </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Assigned Date </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Due Date </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> View </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Edit </th>
                    <th style="background-color:#F3DFCB; color:#112046;"> Delete </th>
                </tr>

                <!-- assignment file -->
                <?php
                if(isset($assignments_data))
                {
                foreach($assignments_data as $data)
                {
                ?>
                    <tr> 
                        <td><?php echo $data["assignment_id"]; ?> </td>
                        <td><?php echo $data["subject_name"]; ?> </td>
                        <td><a href="<?php echo $data["assignment_path"]; ?>" class="btn btn-md text-white" style="background-color:#112046; color:white;"> <i class="bi bi-file-earmark"> </i> </a> </td>
                        <td><?php echo $data["assignment_name"]; ?> </td>
                        <td><?php echo $data["assignment_description"]; ?> </td>
                        <td><?php echo $data["assigned_date"]; ?> </td>
                        <td><?php echo $data["due_date"]; ?> </td>
                        
                        <!-- view btn -->
                        <td> <a href="<?php echo $mainurl ?>faculty-view-assignment?assignment-id=<?php echo $data["assignment_id"]; ?>" class="btn btn-md text-light" style="background-color:#112046;"> <i class="bi bi-book"> </i> </a> </td>

                        <!-- edit btn -->
                        <td> <a href="<?php echo $mainurl ?>faculty-edit-assignment?assignment-id=<?php echo $data["assignment_id"]; ?>" class="btn btn-md text-light" style="background-color:#112046;"> <i class="bi bi-pencil"> </i> </a> </td>

                        <!-- delete btn -->
                        <td> <a href="<?php echo $mainurl ?>?del-assignment-id=<?php echo $data["assignment_id"]; ?>" onclick="return confirm('Are you sure to delete this assignment data?');" class="btn btn-md btn-danger text-light"> <i class="bi bi-trash"> </i> </a> </td>
                         
                
                    </tr>
                <?php
                }
                }
                else
                {
                ?>
                    <tr>
                        <td colspan="10" class="text-center"> No Data Available </td>
                    </tr>
                <?php
                }
                ?>
        
            </tbody>
        </table>

    </div>

</div>