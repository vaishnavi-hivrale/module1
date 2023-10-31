<div class="mt-3 p-3">

    <!-- form start -->
    <form method="post" class="mt-5 p-5 w-75  shadow mx-auto shadow" style="background-color:#F3DFCB">

        <!-- form heading -->
        <div class="form-group mt-4">
            <h1 class="text-center" style="color:#112046"> <b> Student Registration Form </b> </h1>
            <hr class="border border-2 w-25 mx-auto" style="color:#112046;">
        </div>

        <!-- first name -->
        <div class="mb-3 form-group">
            <label class="form-label" style="color:#112046"> First Name </label>
            <input type="text" name="student-firstname" class="form-control" placeholder="Enter Student's First Name" required>
        </div>


        <!-- last name -->
        <div class="mb-3">
        <label class="form-label" style="color:#112046"> Last Name </label>
        <input type="text" name="student-lastname" class="form-control" placeholder="Enter Student's Last Name" required>
        </div>

        <!-- contact no. -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Contact Number </label>
            <input type="text" name="student-contact" minlength="10" maxlength="10" class="form-control" placeholder="Enter Student's Contact no." required>
        </div>

        <!-- dob -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Date of birth </label>
            <input type="date" name="student-dob" class="form-control" placeholder="Enter Student's Date of Birth" required>
        </div>

        <!-- gender -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Gender </label>
            <input type="radio" name="student-gender" value="male" required> Male &nbsp;
            <input type="radio" name="student-gender" value="female" required> Female &nbsp;
            <input type="radio" name="student-gender" value="other" required> Other
        </div>

        <!-- email -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Email </label>
            <input type="text" name="student-email" class="form-control" placeholder="Enter Student's Email" required>
        </div>

        <!-- adress -->
        <div class="mb-3">
        <label class="form-label" style="color:#112046"> Address </label>
        <textarea class="form-control" name="student-address" placeholder="Enter Student's Address"></textarea>
        </div>

        <!-- subject -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Subject </label>
            <select name="student-subject" class="form-control" required>
                <option value=""> -select subject- </option>

                <?php
                foreach($subjects as $sub)
                {
                ?>
                    <option value="<?php echo $sub['subject_id'] ?>"> <?php echo $sub["subject_name"]; ?> </option>
                <?php
                }
                ?>
            </select>
        </div>

        <!-- faculty -->
         <div class="mb-3">
            <label class="form-label" style="color:#112046"> Faculty </label>
            <select name="student-faculty" class="form-control" required>
                <option value=""> -select faculty- </option>

                <?php
                foreach($faculties as $data)
                {
                ?>
                    <option value="<?php echo $data['faculty_id'] ?>"> 
                        <?php echo $data["faculty_first_name"]?> &nbsp; 
                        <?php echo $data["faculty_last_name"]; ?> 
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <!-- Marks -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Marks </label>
            <input type="text" name="student-marks" class="form-control" placeholder="Enter Student's Marks" required>
        </div>

        <!-- fees -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Fees </label>
            <input type="text" name="student-fees" class="form-control" placeholder="Enter fees" required>
        </div>

        <!-- password -->
        <div class="mb-3">
            <label class="form-label" style="color:#112046"> Student Password </label>
            <input type="text" name="student-password" class="form-control" placeholder="Enter Student Password" required>
        </div>

        <!-- add-student-btn -->
        <div class="mb-3">
            <input type="submit" class="btn btn-md text-light text-center" name="add-student-btn" value="Add Student" style="background-color:#112046">
        </div>

    </form>
    <!-- form-end -->
</div>