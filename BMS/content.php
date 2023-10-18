<div class="m-0 p-0">

    <div class="mt-5 p-0">
        <div class="row">
            <div class="col-md-5 p-5">
                <form method="post" class="mx-auto shadow p-5">
                    <div class="form-group">
                        <h3 class="text-dark text-center"> Add Expenses </h3>
                        <hr class="border border-3 border-dark mx-auto border-light w-25">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-dark"> Budget Title </label>
                        <input type="text" name="budget-title" placeholder="Budget Title" required class="form-control">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-dark"> Amount </label>
                        <input type="number" name="budget-amount" placeholder="Budget Amount" required class="form-control">
                    </div>

                    <div class="form-group mt-4">
                        <label class="text-dark"> Expense Date </label>
                        <input type="text" name="expense-date" placeholder="Expense Date" required class="form-control">
                    </div>

                    <div class="form-group mt-4">
                        <input type="submit" name="add-expense-btn" value="Save" class="btn btn-md text-light btn-primary w-25">
                    </div>
                </form>
            </div>

            <div class="col-md-7 p-5">
                <h3 class="text-center"> Expenses List </h3>
                <hr class="border border-dark border-3 mx-auto w-25">
                
                <div>
                    
                <?php
                if($expenses > 0)
                {
                ?>

                <table class="table table-responsive table-striped mx-auto">
                    <tr> 
                        <th> ID </th>
                        <th> Expense Name </th>
                        <th> Expense Amount </th>
                        <th> Expense Date </th>
                        <th> Action </th>
                     </tr>

                    <tr>
                        <?php
                            foreach($expenses as $data)
                            {
                        ?>
                                <tr>
                                    <td> <?php echo $data["expense_id"]; ?> </td>
                                    <td> <?php echo $data["expense_name"]; ?> </td>
                                    <td> <?php echo $data["expense_amount"]; ?> </td>
                                    <td> <?php echo $data["expense_date"]; ?> </td>
                                    <td> 
                                        <a href="<?php echo $mainurl; ?>update-data?expense-id=<?php echo $data["expense_id"]; ?>" class="btn btn-md btn-success text-light"> Update </a> &nbsp; &nbsp;
                                        
                                        <a href="<?php echo $mainurl; ?>?del-id=<?php echo $data["expense_id"]; ?>" onclick="return confirm('Are you sure to delete data ?')" class="btn btn-md btn-danger text-ligth"> Delete </a> 
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tr>
                </table>

                <?php
                }
                else
                {
                    echo "<h4 class='mt-5 text-center shadow w-50 mx-auto p-3'> Data not available </h4> </span>";
                }
                ?>

                </div>
            </div>
        </div>
    </div>

</div>