<div class="modal fade" role="dialog" id="activate-card">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- form start -->
            <form method="post" class="mt-0 p-5">

                <!-- Heading -->
                <div class="form-group">
                    <h3 class="w-75 text-white text-center mx-auto p-2" style="background-color: royalblue;"> Add Card Details <hr class="border border-2 border-white w-25 mx-auto"> </h3>
                </div>
    
                <!-- card name -->
                <div class="form-group mt-3">
                    <label> Name </label>
                    <input type="text" name="cardnm" placeholder="Enter card name" required class="form-control">
                </div>
    
                <!-- student id -->
                <div class="form-group mt-3">
                    <label> Select student id </label>
                    <select name="studentid" placeholder="student id" required class="form-control">
                        <option value=""> -select student- </option>
                 
                        <?php
                            foreach($studentdata as $values)
                            {
                        ?>
                                <option value = "<?php echo $values["student_id"]; ?>"> <?php  echo $values["first_name"], $values["last_name"]; ?> </option>
                        <?php
                            }
                        ?> 
                    </select>
                </div>  
            
                <!-- phone -->
                <div class="form-group mt-3">
                    <label> Phone </label>
                    <input type="text" name="phone" placeholder="Enter contact no." required class="form-control">
                </div>

                <!-- staff id -->
                <div class="form-group mt-3">
                    <label> Select staff id </label>
                    <select name="staffid" placeholder="staff id" required class="form-control">
                        <option value=""> -select staff- </option>

                        <?php  
                            foreach($staffdata as $values1)
                            {
                        ?>
                                <option value= "<?php echo $values1["staff_id"] ?>"> <?php echo $values1["first_name"], $values1["last_name"];?> </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>

                <!-- adress -->
                <div class="form-group mt-3">
                    <label> Address </label>
                    <textarea type="text" name="address" placeholder="Enter Adress" required class="form-control"> </textarea>
                </div>
    
                <!-- submit btn -->
                <div class="form-group mt-4">
                    <input type="submit" name="btn-add-card" value="Add Card" class="btn btn-dark text-white text-center"> <br><br>
                </div>
            
            </form>
        
        <!-- form end -->      
        </div>
    </div>
</div>