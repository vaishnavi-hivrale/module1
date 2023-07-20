<?php
// error_reporting(0);
?>


<script>
    function login_modal()
    {
        alert('Are you sure to activate the new card ? Login first.')
        window.location="./login";
    }
</script>


<!-- student details here -->
<div class="container mt-5 p-5">
    <div class="row">
    
        <!-- <div class="col-md-4">
            <img src="https://i.gifer.com/OyH3.gif" class="img-fluid">
        </div> -->
    
        <div class="col-md-12">
            <h3 class="text-primary">Student management systems</h3>
            <hr class="border border-1 border-primary w-75">

            <button type="button" class="btn btn-sm btn-primary"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>

            <?php 
                if(!isset($_SESSION["studentid"])) 
                {
            ?>
                    
                    <!-- activavte card button before login -->
                    <button type="button" id="activate-card-btn" onclick="login_modal()" class="btn btn-sm btn-primary ms-4"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>
        
            <?php
                }
                else
                {
            ?>

                    <!-- activavte card button after login -->
                    <button type="button" data-bs-toggle="modal" data-bs-target="#activate-card" class="btn btn-sm btn-primary ms-4"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>
                
            <?php
                }
            ?>

            <?php
                if(isset($_SESSION["studentid"]))
                {
            ?>

                    <button type="button" class="btn btn-sm btn-success float-end"><span class="bi bi-printer fs-5"></span>&nbsp;Print Pdf</button>

                    <div class="mt-5">
                        <table id="examples" class="table table-responsive table-bordered table-hover mt-5 p-3">
                    
                            <thead>   
                                <tr>
                                    <th>Card Id</th>
                                    <th>Card Name</th>
                                    <th>Student Id</th>
                                    <th>Phone</th>
                                    <th>Staff Id</th>
                                    <th>Address</th>
                                    <th>Added date</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                    
                            <tbody>

                                <?php
                                foreach($carddata as $data)
                                {
                                ?>
                
                                    <tr>
                                        <td> <?php echo $data["card_id"]; ?></td>
                                        <td>  <?php echo $data["card_name"]; ?> </td>
                                        <td> <?php echo $data["student_id"]; ?> </td>
                                        <td> <?php echo $data["phone"]; ?> </td>
                                        <td> <?php echo $data["staff_id"]; ?> </td>
                                        <td> <?php echo $data["address"]; ?> </td>
                                        <td> <?php echo $data["added_date"]; ?> </td>
                                        <td><a href="#" class="btn btn-sm btn-warning"><span class="bi bi-book"></span></a></td>
                                        <td><a href="#" class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></td>
                                        <td><a href="#" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a></td>
                                    </tr>

                                <?php
                                }
                                ?>

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
