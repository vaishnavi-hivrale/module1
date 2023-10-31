<div class="mt-5 p-3">

    <!-- heading -->
    <div class="mt-2 p-3">
        <span style="margin-left:15%; font-size:31px"> <b> Student Profile </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:45%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>


    <div class="mt-2 p-0">
    
        <!-- table start -->
        <table class="table table-responsive table-striped table-bordered mx-auto w-75"> 
        
            <tbody>
                
                <!-- counseller id -->
                <tr>
                    <td> Student Id </td>
                    <td> <?php echo $student_data["student_id"]; ?> </td>
                </tr>

                <!-- first name -->
                <tr>
                    <td> First Name </td>
                    <td> <?php echo $student_data["student_first_name"]; ?> </td>
                </tr>

                <!-- last name -->
                <tr>
                    <td> Last Name </td>
                    <td> <?php echo $student_data["student_last_name"]; ?> </td>
                </tr>

                <!-- contact -->
                <tr>
                    <td> Contact </td>
                    <td> <?php echo $student_data["student_contact"]; ?> </td>
                </tr>

                <!-- dob -->
                <tr>
                    <td> Date of Birth </td>
                    <td> <?php echo $student_data["student_dob"]; ?> </td>
                </tr>


                <!-- gender -->
                <tr>
                    <td> Gender </td>
                    <td> <?php echo $student_data["student_gender"]; ?> </td>
                </tr>

                <!-- email -->
                <tr>
                    <td> Email </td>
                    <td> <?php echo $student_data["student_email"]; ?> </td>
                </tr>


                <!-- address -->
                <tr>
                    <td> Address </td>
                    <td> <?php echo $student_data["student_address"]; ?> </td>
                </tr>

                <!-- subject -->
                <tr>
                    <td> Subject </td>
                    <td> <?php echo $student_data["subject_name"]; ?> </td>
                </tr>

                <!-- fees -->
                <tr>
                    <td> Fees </td>
                    <td> <?php echo $student_data["student_fees"]; ?> </td>
                </tr>

            </tbody>

        </table>
        <!-- table end -->
    
    </div>
    
</div>