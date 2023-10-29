<div class="mt-3 p-5 content">

    <div class="mt-0 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> VIEW EXPENSES </h3>
    </div>
    
    <div class="mt-5">
        <table id="example" class="display table table-responsive" style="width:100%">
            <thead>
                <tr>
                    <th> Expense id </th>
                    <th> User Name </th>
                    <th> Expense Title </th>
                    <th> Expense For </th>
                    <th> Expense Amount </th>
                    <th> Description
                    <th> Date </th>
                    <th> Bill </th>
                    <th> View </th>
                    <th> Upadate </th>
                    <th> Delete </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($expense_data))
                {
                    foreach($expense_data as $data)
                    {
                ?>
                        <tr>
                            <td> <?php echo $data["expense_id"]; ?> </td>
                            <td> <?php echo $data["first_name"]; ?> </td>
                            <td> <?php echo $data["expense_title"]; ?> </td>
                            <td> <?php echo $data["expense_for"]; ?> </td>
                            <td> <?php echo $data["expense_amount"]; ?> </td>
                            <td> <?php echo $data["expense_description"]; ?> </td>
                            <td> <?php echo $data["expense_date"]; ?> </td>
                            <td> <img src="<?php echo $data['bill_img'] ?>" class="image-fluid" width="80" height="80">  </td>

                            <!-- view btn -->
                            <td> <a href="<?php echo $mainurl; ?>view-one-expense-data?expense-id=<?php echo $data["expense_id"]; ?>" class="btn btn-md btn-warning text-light text-center"> <i class="bi bi-book"> </i> </a> </td>

                            <!-- update btn -->
                            <td> <a href="<?php echo $mainurl; ?>update-expense?expense-id=<?php echo $data["expense_id"]; ?>" class="btn btn-md btn-success text-light text-center"> <i class="bi bi-pencil"> </i> </a> </td>

                            <!-- delete btn -->
                            <td> <a href="<?php echo $mainurl; ?>?exp-del-id=<?php echo $data['expense_id']; ?>" onclick="return confirm('Are you sure delete this data ?')" class="btn btn-danger text-light text-center"> <i class="bi bi-trash"> </i> </a> </td>
                        </tr>
                <?php
                    }
                }     
                ?>
        
            </tbody>

        </table>
        
    </div>

</div>