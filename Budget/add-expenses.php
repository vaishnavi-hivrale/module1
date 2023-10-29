<div class="content text-white mt-0 p-5">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> ADD EXPENSE FORM </h3>
    </div>

    <form class="mt-5 frm p-5 mx-auto" method="post" enctype="multipart/form-data">


        <div class="mb-3 form-group">
            <label class="form-label"> Expense Title </label>
            <input type="text" name="expense-title" class="form-control"  placeholder="Enter Expense Title" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Expense For</label>
            <select name="expense-for" id="select-expense-for" class="form-control">
                <option value=""> -select expense for- </option>
                <option value="auto"> Auto </option>
                <option value="bus"> Bus </option>
                <option value="taxi"> Taxi </option>
            </select>

        </div>
        
        <div class="mb-3 form-group mt-4">
            <label class="form-label">Expense Amount</label>
            <input type="number" name="expense-amount" class="form-control"  placeholder="Enter Expense Amount" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Description</label>
            <textarea name="expense-description" class="form-control"  placeholder="Enter Expense Description" required></textarea>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label">Expense Date</label>
            <input type="date" name="expense-date" class="form-control"  placeholder="Select Expense Date" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <label class="form-label"> Upload Bill </label>
            <input type="file" name="bill-img" class="form-control" required>
        </div>

        <div class="mb-3 form-group mt-4">
            <input type="submit" class="btn btn-md text-center" name="add-expense-btn" value="Add Expenses"> &nbsp;&nbsp;

            <input type="reset" class="btn btn-md text-center" name="reset-btn" value="Reset"> 
        </div>
    </form>
</div>