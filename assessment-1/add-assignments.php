<div class="mt-5 p-0">

    <!-- heading -->
    <div class="mt-2 p-0">
        <span style="margin-left:15%; font-size:31px"> <b> Add Assignments </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:40%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>

    <div class="mt-0 p-0">

        <!-- form start -->
        <form method="post" enctype="multipart/form-data" class="mt-0 p-5 mt-5 w-75 mx-auto" style="background-color:#F3DFCB">

            <!-- ass assignment file -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> Add assignment file </label>
                <input type="file" name="assignment-file" class="form-control mt-2" required>
            </div>

            <!-- ass assignment subject -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> Assignment Subject </label>
                <select name="assignment-subject" class="form-control" required>
                    <option value=""> -select subject- </option>

                    <?php
                    foreach($subjects as $sub)
                    {
                        if($faculty_data["subject_id"] == $sub["subject_id"])
                        {

                    ?>
                        <option value="<?php echo $sub["subject_id"]; ?>"> <?php echo $sub["subject_name"]; ?> </option>
                        
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            
            <!-- assignment name -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> Assignment Name </label>
                <input type="text" name="assignment-name" class="form-control mt-2" placeholder="Enter Assignment Name" required>
            </div>

            <!-- assignment description -->
            <div class="form-group mt-4">
                <label style="color:#112046;"> Assignment Description </label>
                <textarea name="assignment-description" class="form-control mt-2" placeholser="Enter Assignment Description" required> </textarea>
            </div>

            <div class="form-group mt-4">
                
                <!-- grid start -->
                <div class="row">

                    <!-- assigned date -->
                    <div class="col-md-6">
                        <label style="color:#112046;"> Assigned Date </label>
                        <input type="date" name="assigned-date" class="form-control mt-2" required>
                    </div>

                    <!-- due date -->
                    <div class="col-md-6">
                        <label style="color:#112046;"> Due Date </label>
                        <input type="date" name="due-date" class="form-control mt-2" required>
                    </div>

                </div>
                <!-- grid end -->

            </div>

            <!-- add-assignment-btn -->
            <div class="form-group mt-5">
                <input type="submit" name="add-assignment-btn" value="Add" style="background-color:#112046;" class="btn btn-md text-light" required>
            </div>



        </form>
        <!-- form end -->

    </div>

</div>