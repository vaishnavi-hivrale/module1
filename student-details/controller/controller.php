<?php

    require_once("../model/model.php");


    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

   
    // class controller start ( inherits class model )
    class controller extends model 
    {
        
        // __construct() start 
        public function __construct()
        {
            // parent:: to access the inherited methosds of class model from __construct()
            parent::__construct();


            // data-insert logic for activate card start
            if(isset($_POST["btn-add-card"]))
            {

                date_default_timezone_set("Asia/Calcutta");

                $cnm = $_POST["cardnm"];
                $sid = $_POST["studentid"];
                $p = $_POST["phone"];
                $stfid = $_POST["staffid"];
                $adrs = $_POST["address"];
                $datetime = date("d/m/y H:i:s a");

                $data = array("card_name"=>$cnm, "student_id"=>$sid, "phone"=>$p, "staff_id"=>$stfid, "address"=>$adrs, "added_date"=>$datetime);

                $chk = $this->insertdata('tbl_card', $data);

                if($chk)
                {
                    echo "<script> alert('Card added successfully')
                            window.location = './'; 
                            </script>";
                }
            }
            // data-insert logic end

                
            // data-insert logic for add new student (register) start
            if(isset($_POST["sub"]))
            {
                if($_POST["cpassword"] == $_POST["password"])
                {

                    // Load Composer's autoloader
                    require 'phpmailer/PHPMailer.php';
                    require 'phpmailer/SMTP.php';
                    require 'phpmailer/Exception.php';
                    date_default_timezone_set("Asia/Calcutta");

                    $fnm = $_POST["firstname"];
                    $lnm = $_POST["lastname"];
                    $p = $_POST["phone"];
                    $e = $_POST["email"];
                    $address = $_POST["address"];
                    $ct = $_POST["city"];
                    $st = $_POST["state"];
                    $cn = $_POST["country"];
                    $psw = $_POST["password"];
                    $added_datetime = date("d/m/y H:i:s a");

                    $data = array("first_name"=>$fnm, "last_name"=>$lnm, "phone"=>$p, "email"=>$e, "address"=>$address, "city_id" => $ct, "stateid" => $st, "country_id" => $cn, "password"=>$psw, "added_date" => $added_datetime);

                    $chk = $this->insertdata('tbl_student', $data);
                    

                    
                    // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try 
                    {
                        //Server settings

                        $mail->SMTPDebug = 2;                                  // Enable verbose debug output
                        $mail->isSMTP();                                       // Send using SMTP
                        $mail->Host = 'smtp.gmail.com';                        // Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                              // Enable SMTP authentication
                        $mail->Username = 'hivralevaishnavi@gmail.com';        // SMTP username
                        $mail->Password   = 'ajpbxwvswlcgdenl';                // SMTP password
                        $mail->SMTPSecure = 'TLS';                             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        //Recipients
                        $mail->setFrom("hivralevaishnavi@gmail.com");
                        $mail->addAddress($_POST["email"], 'hello');     // Add a recipient


                        // Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                        // Content
                        $mail->isHTML(true);                  // Set email format to HTML
                        $mail->Subject = "Student Management System";
                        $mail->Body    = "Thank you for connect with us Welcome to our website.";
                        //$mail->AltBody =;

                        $mail->send();

                        echo  "<script> alert('Email sent')
                                window.location = './login'; </script>";
                    } 
                    catch(Exception $e) 
                    {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
                else
                {
                    echo "<script> alert('pasword and confirm password did not matched try again')
                            window.location = './register'; 
                          </script>";
                }
                
            } 
            // data-insert logic for add new student end 


            // call selectdata() method to select the data of multiple tables
            // fetch staff data
            $staffdata = $this->selectdata('tbl_staff');

            // fetch student data 
            $studentdata = $this->selectdata('tbl_student');

            // fetch city data
            $city = $this->selectdata('tbl_city');

            // fetch country data
            $country = $this->selectdata('tbl_country');

            // fetch state data
            $state = $this->selectdata('tbl_state');

            // fetch card data
            // logic start - display activated cards by logged in user 
            if(isset($_SESSION["studentid"]))
            {
                $id = $_SESSION["studentid"];

                $carddata = $this->show_cards('tbl_card', 'student_id', $id);
            }
            // logic end


            // count and display total cards by logged in user
            // count card logic start
            if(isset($_SESSION["studentid"]))
            {
                $id = $_SESSION["studentid"];
                
                $totalcards = $this->count_cards('tbl_card', 'card_id', 'student_id', $id);
            }
            // count card logic end


            // student login logic start
            if(isset($_POST["login"]))
            {
                $email = $_POST["email"];
                $psw = $_POST["password"];

                $chk = $this->login('tbl_student', $email, $psw);

                if($chk)
                {
                    echo "<script> alert('You have logged-in successfully.') 
                        window.location='./'; </script>";
                            
                }
                else
                {
                    echo "<script> alert('Incorrect Email or Password try again.')  
                            window.location='./login'</script>";
                }                               
            }
            // student login logic end


            // student logout logic start
            if(isset($_GET["logout-here"]))
            {
                $chk = $this->logout();

                if($chk)
                {
                    echo "<script> alert('You have logged-out successfully.') 
                        window.location='./' </script>";
                }
            }
            // student logout logic end
                
        
            // routing start
            if(isset($_SERVER["PATH_INFO"]))
            {

                // switch start
                switch($_SERVER["PATH_INFO"])
                {
                    case '/':
                        require_once("index.php");
                        require_once("head.php");
                        require_once("navbar.php");
                        require_once("content.php");
                        require_once("activate-card.php");
                        require_once("logout.php");
                        require_once("footer.php");
                        break;

                    case '/login':
                        require_once("index.php");
                        require_once("head.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("activate-card.php");
                        require_once("logout.php");
                        require_once("footer.php");
                        break;
    
                    case '/register':
                        require_once("index.php");
                        require_once("head.php");
                        require_once("navbar.php");
                        require_once("register.php");
                        require_once("logout.php");
                        require_once("footer.php");
                        break;

                    default:
                        echo "<div bg-danger w-50 p-3 text-white text-center mx-auto mt-5> Enter valid url  </div>";
                        break;
                }
                // switch end

            }
            // routing end

        }
        // __construct() end

    }
    // class controller end


    // object of class controller 
    $obj = new controller;

?>