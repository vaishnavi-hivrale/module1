<?php

require_once("model/model.php");

class controller extends model 
{
    public function __construct()
    {

        parent:: __construct();

        // add employee logic start
        if(isset($_POST["add-employee-btn"]))
        {

            $empfnm = $_POST["empfirstname"];
            $emplnm = $_POST["emplastname"];
            $em = $_POST["empemail"];
            $mob = $_POST["empmobile"];
            $address = $_POST["empaddress"];
            $gender=$_POST["empgender"];
            $pwd=$_POST["emppassword"];
            $cpwd=$_POST["empconfirmpassword"];

            if($pwd == $cpwd)
            {
                $data=array("first_name"=>$empfnm,"last_name"=>$emplnm,"email"=>$em, "mobile"=>$mob,"address"=>$address,"gender"=>$gender,"password"=>$pwd);

                $chk=$this->insertdata('employee',$data);

                if($chk)
                {
                    echo "<script>
                    
                    alert('Employee data added successfully')
                        window.location='./employee-data'; 
                        
                        </script>";
                }
                else
                {
                    echo "<script> 
                    
                    alert('Could not add employee data try again.')
                        window.location='./add-employee'; 
                        
                        </script>";
                }
            } 
            else
            {
                echo "<script> 
                    
                alert('Incorrect username or password.')
                    window.location='./add-employee'; 
                    
                    </script>";
            }   
                
        }
        // add employee logic end


        // edit employee data logic start
        if(isset($_POST["edit-emp-btn"]))
        {
            if(isset($_GET["empid"]))
            {
                $empid = $_GET["empid"];
            }

            $fnm = $_POST["firstname"];
            $lnm = $_POST["lastname"];
            $em = $_POST["email"];
            $mob = $_POST["mobile"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];

            $chk = $this->edit_employee_data('employee', $empid, $fnm, $lnm, $em, $mob, $address, $gender, 'id', $empid);

            if($chk)
            {
                echo "<script> 
                    
                    alert('Employee data updated successfully.')
                        window.location='./'; 
                        
                        </script>";
            }
            else
            {
                echo "<script> 
                    
                    alert('Could not update employee data try again.')
                        window.location='./edit-employee'; 
                        
                        </script>";
            }

        }
        // edit employee data logic end


        // delete employee data logic start
        if(isset($_GET["delid"]))
        {
            $delid = $_GET["delid"];
            
            $chk = $this->delete_employee_data('employee', 'id', $delid);

            if($chk)
            {
                echo "<script> alert('Employee data deleted successfully.')
                        window.location = './';        
                </script>";
            }
            else
            {
                echo "<script> alert('Could not employee data try again') 
                    window.location = './';
                </script>";
            }

        }
        // delete employee data logic end


        // fetch employees data
        $employee = $this->selectdata('employee');

        // fetch one emloyee data
        if(isset($_GET["empid"]))
        {
            $empid = $_GET["empid"];
            $oneemp = $this->one_employee_data('employee', 'id', $empid);
        }

        // routing start
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/add-employee':
                    require_once("navbar.php");
                    require_once("add-employee.php");
                    require_once("footer.php");
                    break;

                case '/employees-data':
                    require_once("navbar.php");
                    require_once("employee-data.php");
                    require_once("footer.php");
                    break;

                case '/view-employee':
                    require_once("navbar.php");
                    require_once("view-employee.php");
                    require_once("footer.php");
                    break;

                case '/edit-employee':
                    require_once("navbar.php");
                    require_once("edit-employee.php");
                    require_once("footer.php");
                    break;
            }
        }
    }
}

$obj = new controller;

?>