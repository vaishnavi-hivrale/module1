<div class="mt-2 p-5">
            <div class="mt-2 p-0">
                <h3 style="margin-left:15%;"> 
                    Employee Data
                    
                    <a href="<?php echo $mainurl; ?>" class="btn btn-danger btn-md p-2 text-white" style="margin-left:50%;"> Back  </a>
                </h3>
                <hr class="border border-2 border-dark mx-auto w-75">
            </div>

            <div class="mt-0 p-0">
                
                <center>
                <table class="mt-5 p-0 table table-bordered table-responsive table-striped w-75">
        
                    <!-- Employee id -->
                    <tr> 
                        <td> Id </td>
                        <td> <?php echo $oneemp["id"]; ?> </td>
                    </tr>

                    <!-- Emloyee First Name -->
                    <tr>
                        <td> First Name </td>
                        <td> <?php echo $oneemp["first_name"]; ?> </td>
                    </tr>

                    <!-- Emloyee Last Name -->
                    <tr>
                        <td> Last Name </td>
                        <td> <?php echo $oneemp["last_name"]; ?> </td>
                    </tr>

                    <!-- Emloyee Email -->
                    <tr>
                        <td> Email </td>
                        <td> <?php echo $oneemp["email"]; ?> </td>
                    </tr>

                    <!-- Emloyee Mobile -->
                    <tr>
                        <td> Mobile </td>
                        <td> <?php echo $oneemp["mobile"]; ?> </td>
                    </tr>

                    <!-- Emloyee Address -->
                    <tr>
                        <td> Address </td>
                        <td> <?php echo $oneemp["address"]; ?> </td>
                    </tr>

                    <!-- Emloyee Gender -->
                    <tr>
                        <td> Gender </td>
                        <td> <?php echo $oneemp["gender"]; ?> </td>
                    </tr>
                </table>
                </center>
            </div>

        </div>
