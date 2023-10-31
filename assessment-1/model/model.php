<?php

class model 
{
    public $con="";

    public function __construct()
    {

        // session start
        session_start();

        try 
        {
            $this->con = new mysqli("localhost", "root", "", "student");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
        }
    }

    // counseller_login() method start
    public function counseller_login($table, $column, $column1, $counsellerem, $counsellerpsw)
    {
        $select = "select * from $table where $column = '$counsellerem' && $column1 = '$counsellerpsw'";

        $exe = mysqli_query($this->con, $select);

        $rows = mysqli_num_rows($exe);

        $counseller_info = mysqli_fetch_array($exe);

        if($rows == 1)
        {
            $_SESSION["counsellerid"] = $counseller_info["counseller_id"];
            $_SESSION["counsellername"] = $counseller_info["counseller_first_name"];

            return true;
        }
        else
        {
            return false;
        }
    }
    // counseller_login() method end


    // select_counseller_data() method start
    public function select_counseller_data($table, $column, $id)
    {
        $select = "select * from $table where $column = '$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        return $fetch;
    }
    // select_counseller_data() method end


    // edit_counseller_profile_data() method start
    public function edit_counseller_profile_data($table, $id, $fnm, $lnm, $email, $contact, $dob, $gender, $address, $column)
    {
        $update = "update $table set counseller_id = '$id', counseller_first_name = '$fnm', counseller_last_name = '$lnm', counseller_email = '$email', counseller_contact = '$contact', counseller_dob = '$dob', counseller_gender = '$gender', counseller_address = '$address' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_counseller_profile_data() method end


    // counseller_change_password() method start
    public function counseller_chnage_password($table, $opass, $npass, $cpass, $column, $id)
    {
        // select password
        $select = "select counseller_password from $table";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        $psw = $fetch["counseller_password"];


        // update password
        if($psw == $opass && $npass == $cpass)
        {
            $update = "update $table set counseller_password='$npass'";

            $exe = mysqli_query($this->con, $update);

            return $exe;
        }
    }
    // counseller_change_password() method end


    // counseller_logout() method start
    public function counseller_logout()
    {
        unset($_SESSION["counsellerid"]);
        unset($_SESSION["counsellername"]);

        session_destroy();

        return true;
    }
    // counseller_logout() method end

    
    // insert_data() method start
    public function insert_data($table, $data)
    {
        $column = array_keys($data);
        $column1 = implode(",", $column);

        $value = array_values($data);
        $value1 = implode("','", $value);

        $insert = "insert into $table($column1) values('$value1')";

        $exe = mysqli_query($this->con, $insert);

        return $exe;
    }
    // insert_data() method start


    // select_data() start
    public function select_data($table)
    {
        $select = "select * from $table";

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
            $arr[] = $fetch;
        }

        if(isset($arr))
        {
            return $arr;
        }
    }
    // select_data() end


    // select_all_student_data() method start
    public function select_all_student_data($table, $table1, $table2, $condition1, $condition2)
    {
        $select = "select * from $table join $table1 on $condition1 join $table2 on $condition2";

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
            $arr[] = $fetch;
        }

        return $arr;
    }
    // select_all_student_data() method end


    // select_one_student_data() method start (for counseller and faculty)
    public function select_one_student_data($table, $table1, $table2, $condition1, $condition2, $column, $id)
    {
        $select = "select * from $table join $table1 on $condition1 join $table2 on $condition2 where $column='$id'";

        $exe = mysqli_query($this->con, $select);

        $student_info = mysqli_fetch_array($exe);

        return $student_info;
    }
    // select_one_student_data() method end


    // edit_student_data() method start
    public function edit_student_data($table, $id, $fnm, $lnm, $contact, $dob, $gender, $email, $address, $subject, $faculty, $marks, $fees, $column)
    {
        $update = "update $table set student_id = '$id', student_first_name = '$fnm', student_last_name = '$lnm', student_contact = '$contact', student_dob = '$dob', student_gender = '$gender', student_email = '$email', student_address = '$address', subject_id = '$subject', faculty_id = '$faculty', student_marks = '$marks', student_fees = '$fees' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_student_data() method end


    // delete_student_data() method start
    public function delete_student_data($table, $column, $id)
    {
        $delete = "delete from $table where $column = '$id'";

        $exe = mysqli_query($this->con, $delete);

        return $exe;
    }
    // delete_student_data() method end


    // faculty_login() method start
    public function faculty_login($table, $column, $column1, $facultyem, $facultypsw)
    {
        $select = "select * from $table where $column = '$facultyem' && $column1 = '$facultypsw'";

        $exe = mysqli_query($this->con, $select);

        $rows = mysqli_num_rows($exe);

        $faculty_info = mysqli_fetch_array($exe);

        if($rows == 1)
        {
            $_SESSION["facultyid"] = $faculty_info["faculty_id"];
            $_SESSION["facultyname"] = $faculty_info["faculty_first_name"];

            return true;
        }
        else
        {
            return false;
        }
    }
    // faculty_login() method end

    
    // select_faculty_data() method start
    public function select_faculty_data($table, $column, $id)
    {
        $select = "select * from $table where $column = '$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        return $fetch;
    }
    // select_faculty_data() method end


    // edit_faculty_profile() method start
    public function edit_faculty_profile($table, $id, $fnm, $lnm, $email, $contact, $dob, $gender, $address, $column)
    {
        $update = "update $table set faculty_id = '$id', faculty_first_name = '$fnm', faculty_last_name = '$lnm', faculty_email = '$email', faculty_contact = '$contact', faculty_dob = '$dob', faculty_gender = '$gender', faculty_address = '$address' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_faculty_profile() method end


    // faculty_change_password() method start
    public function faculty_change_password($table, $opass, $npass, $cpass, $column, $id)
    {
        // select password
        $select = "select faculty_password from $table where $column='$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        $psw = $fetch["faculty_password"];


        // update password
        if($psw == $opass && $npass == $cpass)
        {
            $update = "update $table set faculty_password='$npass' where $column='$id'";

            $faculty_psw = mysqli_query($this->con, $update);

            return $faculty_psw;
        }
    }
    // faculty_change_password() method end


    // select_all_assignments() method start
    public function select_all_assignments($table, $table1, $column, $id)
    {
        $select = "select * from $table join $table1 on $table.subject_id = $table1.subject_id where $table.$column = '$id'"; 

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
            $arr[] = $fetch;
        }

        if(isset($arr))
        {
            return $arr;
        }
        
    }
    // select_All_assignments() method end

    // select_one_assignment_data() method start
    public function select_one_assignment_data($table, $table1, $condition, $column, $id)
    {
        $select = "select * from $table join $table1 on $condition where $column='$id'"; 

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        return $fetch;
    }
    // select_one assignment_data() method end


    // edit_assignment() method start
    public function edit_assignment($table, $id, $sub, $path, $name, $desc, $adate, $ddate, $column)
    {
        $update = "update $table set assignment_id='$id', subject_id='$sub', assignment_path='$path', assignment_name='$name', assignment_description='$desc', assigned_date='$adate', due_date='$ddate' where $column='$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_assignment() method end


    // delete_assignment() method start 
    public function delete_assignment($table, $column, $id)
    {
        $delete = "delete from $table where $column='$id'";

        $exe = mysqli_query($this->con, $delete);

        return $exe;
    }
    // delete_assignment() method end


    // faculty_logout() method start
    public function faculty_logout()
    {
        unset($_SESSION["facultyid"]);
        unset($_SESSION["facultyname"]);

        session_destroy();

        return true;
    }
    // faculty_logout() method end


    // add_marks() method start
    public function add_marks($table, $marks, $column, $id)
    {
        $update = "update $table set student_marks = '$marks' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // add_marks() method end

    
    // student_login() method start
    public function student_login($table, $column, $column1, $studentem, $studentpsw)
    {
        $select = "select * from $table where $column = '$studentem' && $column1 = '$studentpsw'";

        $exe = mysqli_query($this->con, $select);

        $rows = mysqli_num_rows($exe);

        $student_login_info = mysqli_fetch_array($exe);

        if($rows == 1)
        {
            $_SESSION["studentid"] = $student_login_info["student_id"];
            $_SESSION["studentname"] = $student_login_info["student_first_name"];

            return true;
        }
        else
        {
            return false;
        }

    }
    // student_login() method end



    // select_student_data() method start (to display when the student login to website)
    public function select_student_data($table, $table1, $condition, $column, $id)
    {
        $select = "select * from $table join $table1 on $condition where $column = '$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        return $fetch;
    }
    // select_student_data() method end


    // select_student_assignment() method start
    public function select_student_assignment($table, $table1, $table2, $condition1, $condition2)
    {
        $select = "select * from $table join $table1 on $condition1 join $table2 on $condition2";

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
            $arr[] = $fetch;
        }

        if(isset($arr))
        {
            return $arr;
        }
    }
    // select_student_assignment() method end


    // edit_student_profile() method start
    public function edit_student_profile($table, $id, $fnm, $lnm, $contact, $dob, $gender, $email, $address, $column)
    {
        $update = "update $table set student_id = '$id', student_first_name = '$fnm', student_last_name = '$lnm', student_contact = '$contact', student_dob = '$dob', student_gender = '$gender', student_email = '$email', student_address = '$address' where $column = '$id'";
        
        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_student_profile() method end


    // student_change_password() method start
    public function student_change_password($table, $opass, $npass, $cpass, $column, $id)
    {
        // select password
        $select = "select student_password from $table where $column='$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        $psw = $fetch["student_password"];

        // update password
        if($psw == $opass && $npass == $cpass)
        {
            $update = "update $table set student_password='$npass' where $column='$id'";

            $changepsw = mysqli_query($this->con, $update);

            return $changepsw;
        }
    }
    // student_change_password() method end


    // stduent_logout() method start
    public function student_logout()
    {
        unset($_SESSION["studentid"]);
        unset($_SESSION["studentname"]);

        session_destroy();

        return true;
    }
    // student_logout() method end


    // forgot_password() method start
    public function forgot_password($table, $role, $column, $em)
    {
        if($role == 1)
        {
            $select = "select counseller_password from $table where $column = '$em'";

            $exe = mysqli_query($this->con, $select);

            $fetch = mysqli_fetch_array($exe);

            $psw = $fetch["counseller_password"];

            return $psw;
        }

        if($role == 2)
        {
            $select = "select faculty_password from $table where $column = '$em'";

            $exe = mysqli_query($this->con, $select);

            $psw = $fetch["faculty_password"];

            return $psw;
        }

        if($role == 3)
        {
            $select = "select student_password from $table where $column = '$em'";

            $exe = mysqli_query($this->con, $select);

            $psw = $fetch["student_password"];

            return $psw;
        }
    }
    // forgot_password() method end

}

?>