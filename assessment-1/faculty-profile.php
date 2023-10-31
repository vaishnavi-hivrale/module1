<div class="mt-5 p-3">

    <!-- heading -->
    <div class="mt-2 p-3">
        <span style="margin-left:15%; font-size:31px"> <b> Faculty Profile </b> 
            <!-- back btn -->
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md text-light text-center" style="margin-left:45%;"> Back </a> 
        </span>
        <hr class="border border-2 border-dark mx-auto w-75">
    </div>


    <div class="mt-2 p-0">
    
        <!-- table start -->
        <table class="table table-responsive table-bordered table-striped mx-auto w-75"> 
        
            <tbody>
                
                <!-- counseller id -->
                <tr>
                    <td> Counseller Id </td>
                    <td> <?php echo $faculty_data["faculty_id"]; ?> </td>
                </tr>

                <!-- first name -->
                <tr>
                    <td> First Name </td>
                    <td> <?php echo $faculty_data["faculty_first_name"]; ?> </td>
                </tr>

                <!-- last name -->
                <tr>
                    <td> Last Name </td>
                    <td> <?php echo $faculty_data["faculty_last_name"]; ?> </td>
                </tr>

                <!-- email -->
                <tr>
                    <td> Email </td>
                    <td> <?php echo $faculty_data["faculty_email"]; ?> </td>
                </tr>

                <!-- contact -->
                <tr>
                    <td> Contact </td>
                    <td> <?php echo $faculty_data["faculty_contact"]; ?> </td>
                </tr>

                <!-- dob -->
                <tr>
                    <td> Date of Birth </td>
                    <td> <?php echo $faculty_data["faculty_dob"]; ?> </td>
                </tr>

                <!-- gender -->
                <tr>
                    <td> Gender </td>
                    <td> <?php echo $faculty_data["faculty_gender"]; ?> </td>
                </tr>

                <!-- address -->
                <tr>
                    <td> Address </td>
                    <td> <?php echo $faculty_data["faculty_address"]; ?> </td>
                </tr>

            </tbody>

        </table>
        <!-- table end -->
    
    </div>
    
</div>