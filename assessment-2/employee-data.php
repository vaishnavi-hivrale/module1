<div class="m-0 p-5">
        <div class="mt-5 p-5">
            <center>
                <table class="table table-responsive table-hover table-striped">

                    <tr>
                        <th class="text-light text-center" style="background-color:darksalmon"> Id </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> First Name </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Last Name </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Email </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Mobile </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Address </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Gender </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> View </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Edit </th>
                        <th class="text-light text-center" style="background-color:darksalmon"> Delete </th>
                    </tr>

                    <?php
                    if($employee == null)
                    {
                    ?>
                        <tr class="text-center">
                            <td colspan="10"> No data available in table. </td>
                        </tr>
                    <?php
                    }
                    else
                    {
                        foreach($employee as $emp)
                        {
                    ?>
                            <tr>
                                <td> <?php echo $emp["id"]; ?> </td>
                                <td> <?php echo $emp["first_name"]; ?> </td>
                                <td> <?php echo $emp["last_name"]; ?> </td>
                                <td> <?php echo $emp["email"]; ?> </td>
                                <td> <?php echo $emp["mobile"]; ?> </td>
                                <td> <?php echo $emp["address"]; ?> </td>
                                <td> <?php echo $emp["gender"]; ?> </td>

                                <!-- view btn -->
                                <td> <a class="btn btn-md btn-warning text-white" href="<?php echo $mainurl; ?>view-employee?empid=<?php echo $emp["id"]; ?>"> <i class="bi bi-book"></i> </a> </td>
                                
                                <!-- edit btn -->
                                <td> <a class="btn btn-md btn-success text-white" href="<?php echo $mainurl; ?>edit-employee?empid=<?php echo $emp["id"]; ?>"> <i class="bi bi-pencil"></i> </a> </td>
                                
                                <!-- delete btn -->
                                <td> <a class="btn btn-md btn-danger text-white" href="<?php echo $mainurl; ?>?delid=<?php echo $emp["id"]; ?>" onclick="return confirm('Are you sure to delete this employee data ?');"> <i class="bi bi-trash"></i> </a> </td>
                            </tr>
                    <?php
                    }
                }
                ?>
                </table>
            </center>
        </div>
</div>