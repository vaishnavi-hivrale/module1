<div class="mt-3 p-5 content">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> UPDATE EXPENSE FORM </h3>
    </div>

    <div class="mt-5">
        
        <form method="post" enctype="multipart/form-data">
            
            <table class="frm table table-responsive table-bordered table-striped" style="width:100%">
                    
                <tbody>
                    
                    <tr>   
                        <td> Expense Id </td>
                        <td> <input type="text" class="form-control" readonly name="expense-id" value="<?php echo $one_expense_data["expense_id"]; ?>" placeholder="Expense Id" required> </td>    
                    </tr>

                    <tr>   
                        <td> Expense Title </td>
                        <td> <input type="text" class="form-control" name="expense-title" value="<?php echo $one_expense_data["expense_title"]; ?>" placeholder="Expense Title" required> </td>    
                    </tr>
                    
                    <tr>   
                        <td> Expense For </td>
                        <td> 
                            <select class="form-control" name="expense-for" required>
                                <option value=""> -select expense for- </option>
                                <option value="auto" 
                                    <?php 
                                    if($one_expense_data["expense_for"]=="auto")
                                    {
                                    ?> 
                                        selected="selected" 
                                    <?php
                                    }
                                    ?>>  Auto </option>
                                
                                <option value="auto" 
                                    <?php 
                                    if($one_expense_data["expense_for"]=="bus")
                                    {
                                    ?> 
                                        selected="selected" 
                                    <?php
                                    }
                                    ?>>  Bus </option>
                                
                                <option value="taxi" 
                                    <?php 
                                    if($one_expense_data["expense_for"]=="taxi")
                                    {
                                    ?> 
                                        selected="selected" 
                                    <?php
                                    }
                                    ?>>  Taxi </option>
                                
                               
                            </select>
                        
                        </td>    
                    </tr>

                    <tr>   
                        <td> Expense Amount </td>
                        <td> <input type="number" class="form-control" name="expense-amount" value="<?php echo $one_expense_data["expense_amount"]; ?>" placeholder="Expense Id" required> </td>    
                    </tr>

                    <tr>   
                        <td> Expense Description </td>
                        <td> <textarea class="form-control" name="expense-description" placeholder="Expense Id" required><?php echo $one_expense_data["expense_description"]; ?> </textarea> </td>    
                    </tr>

                    <tr>   
                        <td> Expense Date </td>
                        <td> <input type="date" class="form-control" name="expense-date" value="<?php echo $one_expense_data["expense_date"]; ?>" placeholder="Expense Id" required> </td>    
                    </tr>

                    <tr>   
                        <td> Update bill </td>
                        <td> 
                            
                            <img src="<?php echo $one_expense_data["bill_img"]; ?>" class="image-fluid" width="100" height="100">
                            <input type="file" class="form-control mt-2" name="expense-bill" required> </td>    
                    </tr>

                    <tr>   
                        <td colspan="2"> <input type="submit" class="btn btn-md" style="margin-left:40%" name="update-expense-btn" value="Update Expense Data" style-color>  </td>    
                    </tr>

                </tbody>
        
            </table>
    
        </form>
    
    </div>
        
</div>