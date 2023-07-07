<?php

    require_once("model/model.php");

    class controller extends model 
    {
        public function __construct()
        {
            // parent:: to globaly access the __construct of model class here in controller 
            parent::__construct();


            // ROUTING

            if(isset($_SERVER["PATH_INFO"]))
            {
                switch($_SERVER["PATH_INFO"])
                {

                    // HOME
                    case '/':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("login.php");
                        require_once("navbar.php");
                        require_once("banner.php");
                        require_once("content.php");
                        require_once("footer.php");
                        break;

                    // ABOUT
                    case '/about-us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("about.php");
                        require_once("footer.php");
                        break;

                    // SERVICES
                    case '/services':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("services.php");
                        require_once("footer.php");
                        break;

                    // DEPARTMENTS
                    case '/departments':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("departments.php");
                        require_once("footer.php");
                        break;
                    
                    // DOCTORS
                    case '/doctors':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("doctors.php");
                        require_once("footer.php");
                        break;
                    
                    // CONTACT US
                    case '/contact-us':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("contact.php");
                        require_once("footer.php");
                        break;

                    //APPOINTMENT
                    case '/make-appointment':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("appointment.php");
                        require_once("footer.php");
                        break;

                    case '/register':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("register.php");
                        require_once("footer.php");
                        break;

                    // 404 ERROR PAGE IF UNWANTED URL HIT AND PAGE NOT FOUND
                    default:
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
                        require_once("404.php");
                        require_once("footer.php");
                        break;
                
                }
            }

            if(isset($_POST["contactbtn"]))
            {

                date_default_timezone_set("Asia/Calcutta");

                $nm = $_POST["name"];
                $em = $_POST["email"];
                $sub = $_POST["subject"];
                $m = $_POST["mob"];
                $msg = $_POST["message"];
                $datetime = date("d/m/y H:i:s a");

                $data = array("name"=>$nm, "email"=>$em, "subject"=>$sub, "mobile"=>$m, "message"=>$msg, "added_date_time"=>$datetime);
                
                $check = $this->insertalldata('contact', $data);

                if($check)
                {
                    echo "<script> alert('Thank you for contact with us we will contact you soon.')
                                    window.location='contact-us'; </script>";
                }
            }
        }
    }

    $obj = new controller;
?>