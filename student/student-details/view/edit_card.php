<?php
// error_reporting(0);
?>

<!-- student details here -->
<div class="container mt-3 p-5">
    <div class="row">
    
        <!-- <div class="col-md-4">
            <img src="https://i.gifer.com/OyH3.gif" class="img-fluid">
        </div> -->
    
        <div class="col-md-12">
            <h3 class="text-primary"> Edit Card Details </h3>
            <hr class="border border-1 border-primary w-75">

            <button type="button" class="btn btn-sm btn-danger" onclick="back()"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>

            <!-- check if session is set or not -->
            <?php 
            if(isset($_SESSION["studentid"])) 
            {
            ?>            
                <button type="button" class="btn btn-sm btn-success float-end"><span class="bi bi-printer fs-5"></span>&nbsp;Print Pdf</button>

                <div class="mt-5">
                    <table class="table table-responsive table-striped table-bordered table-hover  mt-5 p-3">
                    

                        <tbody>

                            <tr>
                                <td> Card Id </td>
                                <td> <input type="text" name="card-id" class="form-control" value="<?php echo $carddata[0]["card_id"]; ?>"> </td>
                            </tr>

                            <tr>
                                <td> Card Name </td>
                                <td> <input type="text" name="$cardname" class="form-control" value="<?php echo $carddata[0]["card_name"]; ?>"> </td>
                            </tr>

                            <tr>
                                <td> Student Id </td>
                                <td> <input type="text" readonly disabled name="studentid" class="form-control" value="<?php echo $carddata[0]["student_id"]; ?>"> </td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td> <input type="text" name="phone" class="form-control" value="<?php echo $carddata[0]["phone"]; ?>"> </td>
                            </tr>

                            <tr> 
                                <td> Staff Id </td>
                                <td>
                                    <select name="staffid" class="form-control">
                                        <option value=""> -select staff- </option>
                                        <?php
                                        foreach($staffdata as $stfdata)
                                        {
                                        ?>

                                            <option selected="selected" value="<?php echo $stfdata["staff_id"]; ?>"> <?php echo $stfdata["first_name"]; ?> &nbsp; <?php echo $stfdata["last_name"]; ?> </option>

                                        <?php
                                        }
                                        ?>
                                    </select>   
                            </tr>

                            <tr> 
                                <td> Address </td>
                                <td> <input type="text" name="address" class="form-control" value="<?php echo $carddata[0]["address"]; ?>"> </td>
                            </tr>

                            <tr> 
                                <td> Added date </td>
                                <td> <input type="text" name="addeddate" class="form-control" value="<?php echo $carddata[0]["added_date"]; ?>"> </td>
                            </tr>

                            <tr>  
                                <td colspan="2"> <center> <input type="submit" name="editcard-btn" class="btn btn-success" value="Update Card Details"> </center> </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            <?php
            }
            ?>

        </div>
    </div>

</div>
<!-- student details end here -->
