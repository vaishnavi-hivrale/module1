<div class="mt-5 p-5 content">

    <div class="mt-3 frm-heading">
        <h3 class="text-light text-center mx-auto p-4"> USER PROFILE </h3>
    </div>

    <div class="mt-5">
        
        <form method="post">
            
            <table class="table table-responsive table-bordered table-striped" style="width:100%">
                    
                <tbody>
                    
                    <tr>   
                        <td> User Id </td>
                        <td> <?php echo $user_data["user_id"]; ?> </td>    
                    </tr>

                    <tr>   
                        <td> First Name </td>
                        <td> <?php echo $user_data["first_name"]; ?> </td>     
                    </tr>
                    
                    <tr>   
                        <td> Last Name </td>
                        <td> <?php echo $user_data["last_name"]; ?> </td>   
                    </tr>

                    <tr>   
                        <td> Country </td>
                        <td> <?php echo $user_data["country_name"]; ?> </td>   
                    </tr>

                    <tr>   
                        <td> State </td>
                        <td> <?php echo $user_data["state_name"]; ?> </td>    
                    </tr>

                    <tr>   
                        <td> City </td>
                        <td> <?php echo $user_data["city_name"]; ?> </td>  
                    </tr>

                    <tr>   
                        <td> Contact </td>
                        <td> <?php echo $user_data["contact"]; ?> </td>  
                    </tr>

                    <tr>   
                        <td> Email </td>
                        <td> <?php echo $user_data["email"]; ?> </td>  
                    </tr>

                    <tr>   
                        <td> Address </td>
                        <td> <?php echo $user_data["address"]; ?> </td>  
                    </tr>

                </tbody>
        
            </table>
    
        </form>
    
    </div>
        
</div>