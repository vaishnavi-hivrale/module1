<?php

// class model start
class model 
{
    // public variable for database connection
    public $con = "";

    // constructor start
    public function __construct()
    {

        error_reporting(0);

        // try catch block to establish connection with db
        try
        {
            // $this is important to write here for connection with db 
            $this->con=new mysqli("localhost","root","","employee_db");
            // echo "connection successful";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
            echo "connection unsuccessful";
        }
        // try catch block end
    }

    // insertdata() method start
    public function insertdata($table,$data) 
    {
        $column = array_keys($data);
        $column1 = implode(",",$column);
        $value = array_values($data);
        $value1 =implode("','",$value);
        // echo $insert="insert into $table($column1) values('$value1')"; exit();
        $insert="insert into $table($column1) values ('$value1')";
        $query=mysqli_query($this->con,$insert);
       return $query;
    }
    // insertdata() method end


    // selectdata() method start
    public function selectdata($table)
    {
        $select = "select * from $table";

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
                $arr[] = $fetch;
        }

        return $arr;
    }
    // selectdata() method end


    // one_employee_data() method start
    public function one_employee_data($table, $column, $empid)
    {
        $select = "select * from $table where $column = '$empid'";

        $exe = mysqli_query($this->con, $select);

        $one_emp_info = mysqli_fetch_array($exe);

        return $one_emp_info;
    }
    // one_employye_data() method end


    // edit_employee_data() method start
    public function edit_employee_data($table, $id, $fnm, $lnm, $em, $mob, $address, $gender, $column, $empid)
    {
         $update = "update $table set id='$id', first_name = '$fnm', last_name='$lnm', email = '$em', mobile='$mob', address = '$address', gender = '$gender' where $column = '$empid' "; 

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // edit_employee_data() method end


    // delete_employee_data() method start
    public function delete_employee_data($table, $column, $delid)
    {
        $delete = "delete from $table where $column = '$delid'";

        $exe = mysqli_query($this->con, $delete);

        return $exe;
    }
    // delete_employee_data() method end

}

?>