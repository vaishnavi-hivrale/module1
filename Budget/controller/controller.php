<?php

require_once("model/model.php");

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        // insert data logic for user start
        if(isset($_POST["register-btn"]))
        {
            if($_POST["password"] == $_POST["confirm-password"])
            {
                $fnm = $_POST["first-name"];
                $lnm = $_POST["last-name"];
                $country = $_POST["country"];
                $state = $_POST["state"];
                $city = $_POST["city"];
                $contact = $_POST["contact"];
                $em = $_POST["email"];
                $address = $_POST["address"];
                $psw = $_POST["password"];

                $data = array("first_name" => $fnm, "last_name" => $lnm, "country_id" => $country, "state_id" => $state, "city_id" => $city, "contact" => $contact, "email" => $em, "address" => $address, "password" => $psw);

                $chk = $this->insert_data('tbl_user', $data);

                if($chk)
                {
                    // Load Composer's autoloader        require 'phpmailer/PHPMailer.php';
                    require 'phpmailer/SMTP.php';
                    require 'phpmailer/Exception.php';
                    require 'phpmailer/PHPMailer.php';
            
                    // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try 
                    {
                        //Server settings
                        $mail->SMTPDebug = false;                                  // Enable verbose debug output
                        $mail->isSMTP();                                       // Send using SMTP
                        $mail->Host = 'smtp.gmail.com';                        // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                              // Enable SMTP authentication
                        $mail->Username = 'hivralevaishnavi@gmail.com';        // SMTP username
                        $mail->Password   = 'ajpbxwvswlcgdenl';                // SMTP password
                        $mail->SMTPSecure = 'TLS';                             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        //Recipients
                        $mail->setFrom("hivralevaishnavi@gmail.com");
                        $mail->addAddress($em);     // Add a recipient


                        // Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                        // Content
                        $mail->isHTML(true);                  // Set email format to HTML
                        $mail->Subject = "Budget Management System";
                        $mail->Body    = "<img src='https://i0.wp.com/teachingresources.co.za/wp-content/uploads/2019/11/Rainbow-Door-Sign.png?fit=854%2C601&ssl=1'> <br> 
                        <p> Thanks for create account with us. <br> Welcome to our website. </p>";
                        //$mail->AltBody =;

                        $mail->send();

                        echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Thanks for create account with us. </div>";
                        header("refresh:3, './login'");
                    } 
                    catch(Exception $e) 
                    {
                        echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Cold not send email try again. </div>";
                        header("refresh:3, './forgot-password'");
                    }
                }
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Password and Confirm password did not matched. </div>";
                header("refresh:3, './register'");
            }
        }
        // insert data logic for user end


        // login logic start for user 
        if(isset($_POST["login-btn"]))
        {
            $em = $_POST["email"];
            $psw = $_POST["password"];

            $chk = $this->login('tbl_user', 'email', 'password', $em, $psw);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Login Successful. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Incorrect email or password try again. </div>";
                header("refresh:3, './login'");
            }
        }
        // login logic end


        // add expense logic start
        if(isset($_POST["add-expense-btn"]))
        {
            if(isset($_SESSION["userid"]))
            {
                $id = $_SESSION["userid"];
            }

            $exptitle = $_POST["expense-title"];
            $expfor = $_POST["expense-for"];
            $expamt = $_POST["expense-amount"];
            $expdesc = $_POST["expense-description"];
            $expdate = $_POST["expense-date"];

            $tmp_name = $_FILES["bill-img"]["tmp_name"];
            $type = $_FILES["bill-img"]["type"];
            $size = $_FILES["bill-img"]["size"]/1024;
            $path = "uploads/bills/".$_FILES["bill-img"]["name"];
            move_uploaded_file($tmp_name, $path);

            $data = array("user_id" => $id, "expense_title" => $exptitle, "expense_for" => $expfor, "expense_amount" => $expamt, "expense_description" => $expdesc, "expense_date" => $expdate, "bill_img" => $path);

            $chk = $this->insert_data('tbl_expense', $data);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Expense data added successfully . </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Something went wrong could not add expense data try again. </div>";
                header("refresh:3, './login'");
            }
        }
        // add expense logic end


        // update expense logic start
        if(isset($_POST["update-expense-btn"]))
        {
            if(isset($_GET["expense-id"]))
            {
                $expid = $_GET["expense-id"];
            }

            $exptitle = $_POST["expense-title"];
            $expfor = $_POST["expense-for"];
            $expamount = $_POST["expense-amount"];
            $expdesc = $_POST["expense-description"];
            $expdate = $_POST["expense-date"];

            $tmp_name = $_FILES["expense-bill"]["tmp_name"];
            $type = $_FILES["expense-bill"]["type"];
            $size = $_FILES["expense-bill"]["size"]/1024;
            // bill image path
            $expbill = "uploads/bills/".$_FILES["expense-bill"]["name"];
            move_uploaded_file($tmp_name, $expbill);

            $chk = $this->update_expense_data('tbl_expense', $expid, $exptitle, $expfor, $expamount, $expdesc, $expdate, $expbill, 'expense_id');

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Expense data updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Something went wrong could not update expense data try again. </div>";
                header("refresh:3, './update-expense'");
            }
        }
        // update expense logic end


        // delete expense data logic start
        if(isset($_GET["exp-del-id"]))
        {
            $expid = $_GET["exp-del-id"];

            $chk = $this->delete_expense_data('tbl_expense', 'expense_id', $expid);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Expense data deleted successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Something went wrong could not delete expense data try again. </div>";
                header("refresh:3, './view-expenses'");
            }
        }
        // delete expense data logic end


        // update profile logic start
        if(isset($_POST["update-profile-btn"]))
        {
            if(isset($_SESSION["userid"]))
            {
                $id = $_SESSION["userid"];
            }

            $fnm = $_POST["first-name"];
            $lnm = $_POST["last-name"];
            $cn = $_POST["country"];
            $st = $_POST["state"];
            $ct = $_POST["city"];
            $contact = $_POST["contact"];
            $em = $_POST["email"];
            $address = $_POST["address"];

            $chk = $this->update_user_profile('tbl_user', $id, $fnm, $lnm, $cn, $st, $ct, $contact, $em, $address, 'user_id');

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Profile data updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Something went wrong could not update profile data try again. </div>";
                header("refresh:3, './'");
            }
        }
        // update profile logic end


        // change password logic start
        if(isset($_POST["chnage-password-btn"]))
        {
            $opass = $_POST["old-password"];
            $npass = $_POST["new-password"];
            $cpass = $_POST["confirm-password"];

            if(isset($_SESSION["userid"]))
            {
                $id = $_SESSION["userid"];
            }

            $chk = $this->change_password('tbl_user', $opass, $npass, $cpass, 'user_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Password changed successfully. </div>";

                $this->logout();

                header("refresh:3, './login'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Old Password, New Password and Confrim password does not match. </div>";
                header("refresh:3, './change-password'");
            }
        }
        // change password logic end


        // forgot password logic start
        if(isset($_POST["forgot-password-btn"]))
        {
            $em = $_POST["email"];

            $password = $this->forgot_password('tbl_user', 'email', $em);

            if($chk)
            {
                // Load Composer's autoloader          require 'phpmailer/PHPMailer.php';
                require 'phpmailer/SMTP.php';
                require 'phpmailer/Exception.php';
                require 'phpmailer/PHPMailer.php';
            
                // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try 
                {
                    //Server settings
                    $mail->SMTPDebug = false;                                  // Enable verbose debug output
                    $mail->isSMTP();                                       // Send using SMTP
                    $mail->Host = 'smtp.gmail.com';                        // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                              // Enable SMTP authentication
                    $mail->Username = 'hivralevaishnavi@gmail.com';        // SMTP username
                    $mail->Password   = 'ajpbxwvswlcgdenl';                // SMTP password
                    $mail->SMTPSecure = 'TLS';                             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom("hivralevaishnavi@gmail.com");
                    $mail->addAddress($em, 'Budget Management System');     // Add a recipient


                    // Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    // Content
                    $mail->isHTML(true);                  // Set email format to HTML
                    $mail->Subject = "Forgot Password";
                    $mail->Body    = "Your password is : $password";
                    //$mail->AltBody =;

                    $mail->send();

                    echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Password sent to your registered email address. </div>";
                    header("refresh:3, './login'");
                } 
                catch(Exception $e) 
                {
                    echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Cold not send email try again. </div>";
                    header("refresh:3, './forgot-password'");
                }
            }
        }
        // forgot password logic end


        // logout logic start for user
        if(isset($_GET["logout"]))
        {
            $chk = $this->logout();

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> You have logged out successfully. </div>";
                header("refresh:3, './login'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Something went wrong could not logout. </div>";
                header("refresh:3, './'");
            }
        }
        // logout logic end


        // fetch all countries
        $countries = $this->select_data('tbl_country');

        // fetch all states
        $states = $this->select_data('tbl_state');

        // fetch all cities
        $cities = $this->select_data('tbl_city');


        // fetch expense data for single user
        if(isset($_SESSION["userid"]))
        {
            $id = $_SESSION["userid"];

            $expense_data = $this->select_expense_data('tbl_expense', 'tbl_user', $id);
        }


        // fetch one expense data
        if(isset($_GET["expense-id"]))
        {
            $expid = $_GET["expense-id"];

            $one_expense_data = $this->select_one_expense_data('tbl_expense', 'expense_id', $expid);
        }


        // fetch data of logged in user (to display in view profile)
        if(isset($_SESSION["userid"]))
        {
            $id = $_SESSION["userid"];

            $user_data = $this->select_user_data('tbl_user', 'tbl_country', 'tbl_state', 'tbl_city', 'country_id', 'state_id', 'city_id', 'user_id', $id);
        }

        // routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/add-expenses':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("add-expenses.php");
                    require_once("footer.php");
                    break;

                case '/view-expenses':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("view-all-expenses.php");
                    require_once("footer.php");
                    break;

                case '/view-one-expense-data':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("view-one-expense.php");
                    require_once("footer.php");
                    break;

                case '/update-expense':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("update-expense.php");
                    require_once("footer.php");
                    break;

                case '/view-profile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("view-profile.php");
                    require_once("footer.php");
                    break;

                case '/update-profile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("update-profile.php");
                    require_once("footer.php");
                    break;

                case '/change-password':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("change-password.php");
                    require_once("footer.php");
                    break;

                case '/forgot-password':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("forgot-password.php");
                    require_once("footer.php");
                    break;

                default:
                    echo "Enter valid url";
                    break;
            }
        }
    }
}

$obj = new controller;

?>