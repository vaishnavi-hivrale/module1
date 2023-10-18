<div class="mt-5 p-5">
<form method="post" class="mx-auto shadow p-5 w-75">
        <div class="form-group">
            <h3 class="text-dark text-center"> Update Expense </h3>
            <hr class="border border-3 border-dark mx-auto border-light w-25">
        </div>

        <div class="form-group mt-4">
            <label class="text-dark"> Budget ID </label>
            <input type="text" name="budget-id" value="<?php echo $one_data["expense_id"]; ?>" readonly placeholder="Budget ID" required class="form-control">
        </div>

        <div class="form-group mt-4">
            <label class="text-dark"> Budget Title </label>
            <input type="text" name="budget-title" value="<?php echo $one_data["expense_name"]; ?>" placeholder="Budget Title" required class="form-control">
        </div>

        <div class="form-group mt-4">
            <label class="text-dark"> Amount </label>
            <input type="number" name="budget-amount" value="<?php echo $one_data["expense_amount"]; ?>" placeholder="Budget Amount" required class="form-control">
        </div>

        <div class="form-group mt-4">
            <label class="text-dark"> Expense Date </label>
            <input type="text" name="expense-date" value="<?php echo $one_data["expense_date"]; ?>" placeholder="Expense Date" required class="form-control">
        </div>

        <div class="form-group mt-4">
            <input type="submit" name="update-expense-btn" value="Save" class="btn btn-md text-light btn-primary w-25">
        </div>
    </form>
</div>