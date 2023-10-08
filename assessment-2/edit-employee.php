<div class="m-0 p-5">
    <div> 
        <h3 style="margin-left:15%;"> Edit Employee Data 
            <a href="<?php echo $mainurl; ?>" class="btn btn-danger text-white btn-md" style="width:100px; margin-left:50%;"> Back </a>
        </h3>
        <hr class="border border-2 border-dark w-75 mx-auto">
    </div>

    <center>
    <form method="post" name="edit-employee-data" class="mt-5 p-0"> 
        <table class="table table-responsive table-bordred table-striped w-75">
            <tbody>
                <!-- Id -->
                <tr> 
                    <div class="form-group">
                    <td> Id </td>
                    <td> <input type="text" name="id" value="<?php echo $oneemp["id"]; ?>" readonly placeholder="id" class="form-control" required> </td>
                    </div>
                </tr>

                <!-- First Name -->
                <tr> 
                    <div class="form-group">
                    <td> First Name </td>
                    <td> <input type="text" name="firstname" value="<?php echo $oneemp["first_name"]; ?>" placeholder="Enter First Name" class="form-control" required> </td>
                    </div>
                </tr>

                <!-- Last Name -->
                <tr> 
                    <div class="form-group">
                    <td> Last Name </td>
                    <td> <input type="text" name="lastname" value="<?php echo $oneemp["last_name"]; ?>" placeholder="Enter Last Name" class="form-control" required> </td>
                    </div>
                </tr>

                <!-- email -->
                <tr> 
                    <div class="form-group">
                    <td> Email </td>
                    <td> <input type="Email" name="email" value="<?php echo $oneemp["email"]; ?>" placeholder="Enter email" class="form-control" required> </td>
                    </div>
                </tr>

                <!-- mobile -->
                <tr> 
                    <div clas="fprm-group">
                    <td> Mobile </td>
                    <td> <input type="text" name="mobile" value="<?php echo $oneemp["mobile"]; ?>" placeholder="Enter mobile" minlength="10" maxlength="10" class="form-control" required> </td>
                    </div>
                </tr>

                <!-- address -->
                <tr> 
                    <div class="form-group">
                    <td> Address </td>
                    <td> <textarea name="address" placeholder="Enter Address" class="form-control" required> 
                        <?php echo $oneemp["address"]; ?> 
                    </textarea> </td>
                    </div>
                </tr>

                <!-- gender -->
                <tr> 
                    <div class="form-group">
                    <td> Gender </td>

                    <?php
                    if($oneemp["gender"] == "male")
                    {
                    ?>
                        
                        <td> 
                            <input type="radio" name="gender" value="male" checked="checked" required> Male 
                            <input type="radio" name="gender" value="female" required> Female
                            <input type="radio" name="gender" value="other" required> Other
                        </td>
                    <?php
                    }
                    else if($oneemp["gender"] == "female")
                    {
                    ?>
                        <td> 
                            <input type="radio" name="gender" value="male" required> Male 
                            <input type="radio" name="gender" value="female" checked="checked" required> Female
                            <input type="radio" name="gender" value="other" required> Other
                        </td>
                    <?php
                    }
                    else if($oneemp["gender"] == "other")
                    {
                    ?>
                        <td> 
                            <input type="radio" name="gender" value="male" required> Male 
                            <input type="radio" name="gender" value="female" required> Female
                            <input type="radio" name="gender" value="other" checked="checked" required> Other
                        </td>

                    <?php
                    }
                    else
                    {
                    ?>
                        <td> 
                            <input type="radio" name="gender" value="male" required> Male 
                            <input type="radio" name="gender" value="female" required> Female
                            <input type="radio" name="gender" value="other" required> Other
                        </td>
                    </div>
                    <?php
                    }
                    ?>
                </tr>

                <tr> 
                    <div class="form-group">
                    <center>
                        <td colspan="2"> <input type="submit" name="edit-emp-btn" value="Edit" style="background-color:darksalmon; width:150;" class="btn btn-md text-white mx-auto"> </td>
                    </center>
                    </div>
                </tr>
            </tbody>
        </table>
    </form>
    </center>
</div>