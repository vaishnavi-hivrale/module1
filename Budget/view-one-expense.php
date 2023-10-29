<div class="mt-5 p-5 content">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> VIEW ONE EXPENSE DATA </h3>
    </div>

    <div class="mt-5">
        
        <form method="post">
            
            <table class="table table-responsive table-bordered table-striped" style="width:100%">
                    
                <tbody>
                    
                    <tr>   
                        <td> Expense Id </td>
                        <td> <?php echo $one_expense_data["expense_id"]; ?> </td>    
                    </tr>

                    <tr>   
                        <td> Expense Title </td>
                        <td> <?php echo $one_expense_data["expense_title"]; ?> </td>     
                    </tr>
                    
                    <tr>   
                        <td> Expense For </td>
                        <td> <?php echo $one_expense_data["expense_for"]; ?> </td>   
                    </tr>

                    <tr>   
                        <td> Expense Amount </td>
                        <td> <?php echo $one_expense_data["expense_amount"]; ?> </td>   
                    </tr>

                    <tr>   
                        <td> Expense Description </td>
                        <td> <?php echo $one_expense_data["expense_description"]; ?> </td>    
                    </tr>

                    <tr>   
                        <td> Expense Date </td>
                        <td> <?php echo $one_expense_data["expense_date"]; ?> </td>  
                    </tr>

                    <tr>   
                        <td> Bill </td>
                        <td> <img src="<?php echo $one_expense_data["bill_img"]; ?>" width="300" height="300"> </td>  
                    </tr>

                </tbody>
        
            </table>
    
        </form>
    
    </div>
        
</div>