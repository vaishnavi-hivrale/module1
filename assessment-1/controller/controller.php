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


        // select role logic start
        if(isset($_POST["select-role-btn"]))
        {
            $role = $_POST["jobrole"];

            switch($role)
            {
                case 1:
                    header("refresh:3, './counseller-login'");
                    break;

                case 2:
                    header("refresh:3, './faculty-login'");
                    break;

                case 3:
                    header("refresh:3, './student-login'");
                    break;

                default:
                    echo "<div class='alert alert-danger m-5 p-4 mx-auto text-center text-dark w-25'> Enter valid jobrole. </div>";
                    header("refresh:3, './select-role'");
                    break;

            }

        }
        // select role logic end


        // counseller login logic start
        if(isset($_POST["counseller-login-btn"]))
        {
            $counsellerem = $_POST["counseller-email"];
            $counsellerpsw = $_POST["counseller-psw"];

            $chk = $this->counseller_login('tbl_counseller', 'counseller_email', 'counseller_password', $counsellerem, $counsellerpsw);

            if($chk)
            {
                echo "<div class='alert alert-success mx-auto m-5 p-4 text-dark text-center w-25'> You are logged in successfully as an counseller. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-dark text-center w-25'> Incorrect username or password </div>";
                header("refresh:3, './counseller-login'");
            }
        }
        // counseller login logic end


        // edit counseller profile logic start
        if(isset($_POST["edit-counseller-profile-btn"]))
        {
            if(isset($_SESSION["counsellerid"]))
            {
                $id = $_SESSION["counsellerid"];
            }

            $fnm = $_POST["counseller-firstname"];
            $lnm = $_POST["counseller-lastname"];
            $email = $_POST["counseller-email"];
            $contact = $_POST["counseller-contact"];
            $dob = $_POST["counseller-dob"];
            $gender = $_POST["counseller-gender"];
            $address = $_POST["counseller-address"];

            $chk = $this->edit_counseller_profile_data('tbl_counseller', $id, $fnm, $lnm, $email, $contact, $dob, $gender, $address, 'counseller_id');

            if($chk)
            {
                echo "<div class='alert alert-success mx-auto m-5 p-4 text-dark text-center w-25'> Counseller data updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-dark text-center w-25'> Something went wrong could not update counseller data try again. </div>";
                header("refresh:3, './edit-counseller-profile'");
            }
        }
        // edit counseller profile logic end


        // change counseller password logic start
        if(isset($_POST["counseller-change-password-btn"]))
        {
            if(isset($_SESSION["counsellerid"]))
            {
                $id = $_SESSION["counsellerid"];
            }            

            $opass = $_POST["counseller-old-password"];
            $npass = $_POST["counseller-new-password"];
            $cpass = $_POST["counseller-confirm-password"];

            $chk = $this->counseller_chnage_password('tbl_counseller', $opass, $npass, $cpass, 'counseller_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-dark text-center w-25'> Counseller password updated successfully. </div>";

                $this->counseller_logout();

                header("refresh:3, './counseller-login'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto text-dark text-center w-25'> Something went wrong could not update password. </div>";
                header("refresh:3, './counseller-change-password'");
            }
        }
        // change counseller password logic end


        // counseller logout logic start
        if(isset($_GET["counseller-logout"]))
        {
            $chk = $this->counseller_logout();

            if($chk)
            {
                echo "<div class='alert alert-success mx-auto m-5 p-4 text-dark text-center w-25'> You have logged out successfully </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-dark text-center w-25'> Something went wrong could not log out. </div>";
                header("refresh:3, './'");
            }         
        }
        // counseller logout logic end


        // insert data for student logic start
        if(isset($_POST["add-student-btn"]))
        {
            $faculty = $_POST["student-faculty"];
            $subject = $_POST["student-subject"];
            $fnm = $_POST["student-firstname"];
            $lnm = $_POST["student-lastname"];
            $contact = $_POST["student-contact"];
            $dob = $_POST["student-dob"];
            $gender = $_POST["student-gender"];
            $email = $_POST["student-email"];
            $address = $_POST["student-address"];            
            $marks = $_POST["student-marks"];
            $fees = $_POST["student-fees"];
            $psw = $_POST["student-password"];

            $data = array("faculty_id" => $faculty, "subject_id" => $subject, "student_first_name" => $fnm, "student_last_name" => $lnm, "student_contact" => $contact, "student_dob" => $dob, "student_gender" => $gender, "student_email" => $email, "student_address" => $address, "student_marks" => $marks, "student_fees" => $fees, "student_password" => $psw);

            $chk = $this->insert_data('tbl_student', $data);

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
                   $mail->addAddress($email);     // Add a recipient


                   // Attachments
                   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                   // Content
                   $mail->isHTML(true);                  // Set email format to HTML
                   $mail->Subject = "Student Management System";
                   $mail->Body    = "<img src='https://i0.wp.com/teachingresources.co.za/wp-content/uploads/2019/11/Rainbow-Door-Sign.png?fit=854%2C601&ssl=1'> <br> 
                   <p> Dear student your account has been created on student Magement System. <br> Welcome to our website. <br> You can now login to the website with your email id. <br> your password : $psw </p>";
                   //$mail->AltBody =;

                   $mail->send();

                   echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Student data added succefully. </div>";
                   header("refresh:3, './'");
               } 
               catch(Exception $e) 
               {
                   echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Coul not add student data try again. </div>";
                   header("refresh:3, './'");
               }
            }
    
        }
        // insert data for student logic end


        // edit student data logic start
        if(isset($_POST["edit-student-data-btn"]))
        {
            if(isset($_GET["student-id"]))
            {
                $id = $_GET["student-id"];
            }
            $fnm = $_POST["student-first-name"];
            $lnm = $_POST["student-last-name"];
            $contact = $_POST["student-contact"];
            $dob = $_POST["student-dob"];
            $gender = $_POST["student-gender"];
            $email = $_POST["student-email"];
            $address = $_POST["student-address"];
            $subject = $_POST["student-subject"];
            $faculty = $_POST["student-faculty"];
            $marks = $_POST["student-marks"];
            $fees = $_POST["student-fees"];

            $chk = $this->edit_student_data('tbl_student', $id, $fnm, $lnm, $contact, $dob, $gender, $email, $address, $subject, $faculty, $marks, $fees, 'student_id');

            if($chk)
            {
                echo "<script> alert('Student data updated successfully,')
                        window.location = './';
                     </script>";
            }
            else
            {
                echo "<script> alert('Student data updated successfully,')
                        window.location = './';
                      </script>";
            }
        }
        // edit student data logic end


        // delete student data logic start
        if(isset($_GET["delid"]))
        {
            $id = $_GET["delid"];

            $chk = $this->delete_student_data('tbl_student', 'student_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-dark text-center w-25'> Student data deleted successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto text-dark text-center w-25'> Something went wrong could not delete student data try again. </div>";
                header("refresh:3, './'");
            }
        }
        // delete student data logic end


        // faculty login logic start
        if(isset($_POST["faculty-login-btn"]))
        {
            $facultyem = $_POST["faculty-email"];
            $facultypsw = $_POST["faculty-password"];

            $chk = $this->faculty_login('tbl_faculty', 'faculty_email', 'faculty_password', $facultyem, $facultypsw);

            if($chk)
            {
                echo "<div class='alert alert-success p-4 m-5 mx-auto w-25 text-center text-dark'> You have logged in successfully as an faculty. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger p-4 m-5 mx-auto w-25 text-center text-dark'> Incorrect username or password. </div>";
                header("refresh:3, './faculty-login'");
            }
        }
        // faculty login logic end


        // add assignment logic start
        if(isset($_POST["add-assignment-btn"]))
        {

            $assignment_name = $_FILES["assignment-file"]["tmp_name"];
            $type = $_FILES["assignment-file"]["type"];
            $size = $_FILES["assignment-file"]["size"]/102400;
            $path = "uploads/assignments/".$_FILES["assignment-file"]["name"];
            move_uploaded_file($assignment_name, $path);

            $sub = $_POST["assignment-subject"];
            $name = $_POST["assignment-name"];
            $desc = $_POST["assignment-description"];
            $adate = $_POST["assigned-date"];
            $ddate = $_POST["due-date"];

            $data = array("assignment_path" => $path, "subject_id" => $sub, "assignment_name" => $name, "assignment_description" => $desc, "assigned_date" => $adate, "due_date" => $ddate);

            $chk = $this->insert_data('tbl_assignments', $data);

            if($chk)
            {
                echo "<div class='alert alert-success p-4 m-5 mx-auto w-25 text-center text-dark'> Assignment uploaded successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger p-4 m-5 mx-auto w-25 text-center text-dark'> Something went wrong could not upload assignment. </div>";
                header("refresh:3, './add-assignments'");
            }
        }
        // add assignment logic start


        // faculty edit assignment logic start
        if(isset($_POST["edit-assignment-btn"]))
        {
            if(isset($_GET["assignment-id"]))
            {
                $id = $_GET["assignment-id"];
            }

            $file_name =  $_FILES["assignment-file"]["tmp_name"];
            $type = $_FILES["assignment-file"]["type"];
            $size = $_FILES["assignment-file"]["size"];
            $path = "uploads/assignments/".$_FILES["assignment-file"]["name"];
            move_uploaded_file($file_name, $path);

            $sub = $_POST["assignment-subject"];
            $name = $_POST["assignment-name"];
            $desc = $_POST["assignment-description"];
            $adate = $_POST["assigned-date"];
            $ddate = $_POST["due-date"];

            $chk = $this->edit_assignment('tbl_assignments', $id, $sub, $path, $name, $desc, $adate, $ddate, 'assignment_id');

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-dark text-center'> Assignment data updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-dark text-center'> Something went wrong could not update assignment data try again. </div>";
                header("refresh:3, './faculty-edit-assignment'");
            }

        }
        // faculty edit assignment logic end


        // delete assignment logic start
        if(isset($_GET["del-assignment-id"]))
        {
            $id = $_GET["del-assignment-id"];

            $chk = $this->delete_assignment('tbl_assignments', 'assignment_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-dark text-center'> Assignment deleted successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-dark text-center'>";
                header("refresh:3; './'");
            }
        }
        // delete assignment logic end


        // edit faculty profile logic start
        if(isset($_POST["edit-faculty-profile-btn"]))
        {
            if(isset($_SESSION["facultyid"]))
            {
                $id = $_SESSION["facultyid"];
            }

            $fnm = $_POST["faculty-firstname"];
            $lnm = $_POST["faculty-lastname"];
            $email = $_POST["faculty-email"];
            $contact = $_POST["faculty-contact"];
            $dob = $_POST["faculty-dob"];
            $gender = $_POST["faculty-gender"];
            $address = $_POST["faculty-address"];

            $chk = $this->edit_faculty_profile('tbl_faculty', $id, $fnm, $lnm, $email, $contact, $dob, $gender, $address, 'faculty_id');

            if($chk)
            {
                echo "<div class='alert alert-success p-4 m-5 mx-auto w-25 text-center text-dark'> Faculty data updated successfuly. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger p-4 m-5 mx-auto w-25 text-center text-dark'> Something went wrong could not update faculty data try again. </div>";
                header("refresh:3, './edit-faculty-profile'");
            }
        }
        // edit faculty profile logic end


        // faculty change password logic start
        if(isset($_POST["faculty-change-password-btn"]))
        {
            if(isset($_SESSION["facultyid"]))
            {
                $id = $_SESSION["facultyid"];
            }

            $opass = $_POST["faculty-old-password"];
            $npass = $_POST["faculty-new-password"];
            $cpass = $_POST["faculty-confirm-password"];

            $chk = $this->faculty_change_password('tbl_faculty', $opass, $npass, $cpass, 'faculty_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 text-dark text-center w-25 mx-auto'> Faculty password updated successfully. </div>";

                $this->faculty_logout();
 
                header("refresh:3, './faculty-login'");
            }
            else
            {
                echo "<div class='alert alert-success m-5 p-4 text-dark text-center w-25 mx-auto'> Something went wrong could not update password try again. </div>";
                header("refresh:3, './faculty-change-password'");
            }
        }
        // faculty change password logic end


        // faculty logout logic start
        if(isset($_GET["faculty-logout"]))
        {
            $chk = $this->faculty_logout();
        
            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-dark text-center w-25'> You have loggedout successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-dark text-center w-25'> Something went wrong could not logout try again. </div>";
                header("refresh:3, './'");
            }
        }
        // faculty logout logic end


        // add student marks logic start
        if(isset($_POST["add-marks-btn"]))
        {
            if(isset($_GET["student-id"]))
            {
                $id = $_GET["student-id"];
            }

            $marks = $_POST["student-marks"];

            $chk = $this->add_marks('tbl_student', $marks, 'student_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success p-4 m-5 mx-auto text-dark text-center w-25'> Student marks updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-success p-4 m-5 mx-auto text-dark text-center w-25'> Something went wrong could not update student marks try again. </div>";
                header("refresh:3, './'");
            }
        }
        // add student marks logic end


        // student login logic start
        if(isset($_POST["student-login-btn"]))
        {
            $studentem = $_POST["student-email"];
            $studentpsw = $_POST["student-password"];

            $chk = $this->student_login('tbl_student', 'student_email', 'student_password', $studentem, $studentpsw);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-center text-dark w-25'> You have logged in suuccessfully as a student. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto text-center text-dark w-25'> Incorrect username or password. </div>";
                header("refresh:3, './student-login'");
            }
        }
        // student login logic end


        if(isset($_POST["edit-student-profile-btn"]))
        {
            if(isset($_SESSION["studentid"]))
            {
                $id = $_SESSION["studentid"];
            }

            $fnm = $_POST["student-firstname"];
            $lnm = $_POST["student-lastname"];
            $contact = $_POST["student-contact"];
            $dob = $_POST["student-dob"];
            $gender = $_POST["student-gender"];
            $email = $_POST["student-email"];
            $address = $_POST["student-address"];

            $chk = $this->edit_student_profile('tbl_student', $id, $fnm, $lnm, $contact, $dob, $gender, $email, $address, 'student_id');


            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-center text-dark w-25'> Student data updated successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto text-center text-dark w-25'> Something went wrong could not update student data try again. </div>";
                header("refresh:3, './edit-student-profile'");
            }
        }
        // edit student profile logic end


        // student change password logic start
        if(isset($_POST["student-change-password-btn"]))
        {
            if(isset($_SESSION["studentid"]))
            {
                $id = $_SESSION["studentid"];
            }

            $opass = $_POST["student-old-password"];
            $npass = $_POST["student-new-password"];
            $cpass = $_POST["student-confirm-password"];
            
            $chk = $this->student_change_password('tbl_student', $opass, $npass, $cpass, 'student_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-5 mx-auto text-center text-dark w-25'> Student password updated successfully. </div>";

                $this->student_logout();

                header("refresh:3, './student-login'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-5 mx-auto text-center text-dark w-25'> Old, New or Confirm password did not matched try again.  </div>";
                header("refresh:3, './student-change-password'");
            }
        }
        // student change password logic end

        // student logout logic start
        if(isset($_GET["student-logout"]))
        {
            $chk = $this->student_logout();

            if($chk)
            {
                echo "<div class='alert alert-success m-5 p-4 mx-auto text-center text-dark w-25'> You have logged out successfully. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto text-center text-dark w-25'> Something went wrong could not log out try again. </div>";
                header("refresh:3, './'");
            }
        }
        // student logout logic end


        // forgot password logic start
        if(isset($_POST["forgot-password-btn"]))
        {
            
            $role = $_POST["jobrole"];
            $em = $_POST["email"];
                
            switch($role)
            {
                case 1:
                    $psw = $this->forgot_password('tbl_counseller', $role, 'counseller_email', $em);
                    break;

                case 2:
                    $psw = $this->forgot_password('tbl_faculty', $role, 'faculty_email', $em);
                    break;

                case 3:
                    $psw = $this->forgot_password('tbl_student', $role, 'student_email', $em);
                    break;

                default:
                    echo "<div class='alert alert-danger m-5 p-4 mx-auto text-center text-dark w-25'> Enter valid jobrole. </div>";
                    header("refresh:3, './select-role'");
                    break;
                    
            }

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
                $mail->Subject = "Student Management System - Forgot Password";
                $mail->Body    = "Your Password is: $psw";
                //$mail->AltBody =;

                $mail->send();

                echo "<div class='alert alert-success m-5 p-4 mx-auto w-25 text-center text-dark'> Password sent to your registerd email address. </div>";
                
                switch($role)
                {
                    case 1:
                        header("refresh:3, './counseller-login'");
                        break;
                        
                    case 2:
                        header("refresh:3, './faculty-login'");
                        break;

                    case 3:
                        header("refresh:3, './student-login'");
                        break;

                    default:
                        echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Enter Valid Jobrole. </div>";
                        header("refresh:3, './forgot-password'");
                }
            } 
            catch(Exception $e) 
            {
                echo "<div class='alert alert-danger m-5 p-4 mx-auto w-25 text-center text-dark'> Cold not send email try again. </div>";
                header("refresh:3, './forgot-password'");
            }
        }
        // forgot password logic end

        // fetch all subjects data
        $subjects = $this->select_data('tbl_subject');


        // fetch all student data
        $allstudents = $this->select_all_student_data('tbl_student', 'tbl_subject', 'tbl_faculty', 'tbl_student.subject_id=tbl_subject.subject_id', 'tbl_student.faculty_id=tbl_faculty.faculty_id');

        // fetch all faculties data
        $faculties = $this->select_data('tbl_faculty');

        
        // fetch assignments to display for students
        $student_assignments = $this->select_student_assignment('tbl_assignments', 'tbl_student', 'tbl_subject', 'tbl_assignments.subject_id = tbl_student.subject_id', 'tbl_assignments.subject_id = tbl_subject.subject_id');
    


        // fetch one student data for counseller and faculty
        if(isset($_GET["student-id"]))
        {
            $id = $_GET["student-id"];

            $student_info = $this->select_one_student_data('tbl_student', 'tbl_subject', 'tbl_faculty', 'tbl_student.subject_id = tbl_subject.subject_id', 'tbl_student.faculty_id=tbl_faculty.faculty_id', 'student_id', $id);
        }


        // fetch student data (to display when the sudent login to website)
        if(isset($_SESSION["studentid"]))
        {
            $id = $_SESSION["studentid"];

            $student_data = $this->select_student_data('tbl_student', 'tbl_subject', 'tbl_student.subject_id = tbl_subject.subject_id', 'student_id', $id);
        }


        // fetch counseller data who is login
        if(isset($_SESSION["counsellerid"]))
        {
            $id = $_SESSION["counsellerid"];

            $counseller_data = $this->select_counseller_data('tbl_counseller', 'counseller_id', $id);
        }


        // fetch faculty data who is login
        if(isset($_SESSION["facultyid"]))
        {
            $id = $_SESSION["facultyid"];

            $faculty_data = $this->select_faculty_data('tbl_faculty', 'faculty_id', $id);
        }

        // fetch all assignments to display for faculty
        if(isset($_SESSION["facultyid"]))
        {
            $assignments_data = $this->select_all_assignments('tbl_assignments', 'tbl_subject', 'subject_id', $faculty_data["subject_id"]);
        }
         
         


        // fetch one assignment data
        if(isset($_GET["assignment-id"]))
        {
            $id = $_GET["assignment-id"];
            
            $assignment = $this->select_one_assignment_data('tbl_assignments', 'tbl_subject', 'tbl_assignments.subject_id = tbl_subject.subject_id', 'assignment_id', $id);
        }

            
        


        // routing start    
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/select-role':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("select-role.php");
                    require_once("footer.php");
                    break;

                case '/counseller-login':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("counseller-login.php");
                    require_once("footer.php");
                    break;

                case '/faculty-login':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("faculty-login.php");
                    require_once("footer.php");
                    break;

                case '/student-login':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("student-login.php");
                    require_once("footer.php");
                    break;

                case '/add-student':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("add-student.php");
                    require_once("footer.php");
                    break;

                case '/students-details':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("students-detail.php");
                    require_once("footer.php");
                    break;

                case '/view-student-data':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("view-student-data.php");
                    require_once("footer.php");
                    break;

                case '/edit-student-data':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("edit-student-data.php");
                    require_once("footer.php");
                    break;

                case '/add-marks':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("add-marks.php");
                    require_once("footer.php");
                    break;

                case '/view-marks':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("view-marks.php");
                    require_once("footer.php");
                    break;

                case '/view-counseller-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("counseller-profile.php");
                    require_once("footer.php");
                    break;

                case '/view-faculty-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("faculty-profile.php");
                    require_once("footer.php");
                    break;

                case '/edit-counseller-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("edit-counseller-profile.php");
                    require_once("footer.php");
                    break;

                case '/edit-faculty-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("edit-faculty-profile.php");
                    require_once("footer.php");
                    break;

                case '/counseller-change-password':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("counseller-change-password.php");
                    require_once("footer.php");
                    break;

                case '/faculty-change-password':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("faculty-change-password.php");
                    require_once("footer.php");
                    break;

                case '/student-change-password':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("student-change-password.php");
                    require_once("footer.php");
                    break;

                case '/view-student-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("student-profile.php");
                    require_once("footer.php");
                    break;

                case '/edit-student-profile':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("edit-student-profile.php");
                    require_once("footer.php");
                    break;

                case '/add-assignments':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("add-assignments.php");
                    require_once("footer.php");
                    break;

                case '/all-assignments':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("faculty-view-assignments.php");
                    require_once("footer.php");
                    break;

                case '/faculty-view-assignment':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("view-assignment.php");
                    require_once("footer.php");
                    break;

                case '/faculty-edit-assignment':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("faculty-edit-assignment.php");
                    require_once("footer.php");
                    break;

                case '/student-view-assignments':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("student-view-assignment.php");
                    require_once("footer.php");
                    break;

                case '/forgot-password':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("forgot-password.php");
                    require_once("footer.php");
                    break;

            }
        }
        // routing end
    }
}

$obj = new controller;

?>