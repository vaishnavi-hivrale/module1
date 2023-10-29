<?php

// class model start
class model 
{
    // public variable for connection with database
    public $con = "";

    // constructor start
    public function __construct()
    {
        // session start
        session_start();


        // establish connection
        try
        {
            $this->con = new mysqli("localhost", "root", "", "budget");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
        }
    }

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
    // insert_data() meyhod end


    // select_data() method start
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
    // select_data() method start


    // login() method start
    public function login($table, $column, $column1, $em, $psw)
    {
        $select = "select * from $table where $column = '$em' and $column1 = '$psw'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        $row = mysqli_num_rows($exe);

        if($row == 1)
        {
            $_SESSION["userid"] = $fetch["user_id"];
            $_SESSION["name"] = $fetch["first_name"];
            $_SESSION["email"] = $fetch["email"];

            return true;
        }
        else
        {
            false;
        }
    }
    // login() method end


    // select_expense_data() method start (to select all expense join using user_id to fetch username in expense table) 
    public function select_expense_data($table, $table1, $id)
    {
        $select = "select $table.*,first_name  from $table join $table1 on $table.user_id=$table1.user_id where $table1.user_id = '$id'";

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
    // select_expense_data() method end


    // select_one_expense_data() method start
    public function select_one_expense_data($table, $column, $expid)
    {
        $select = "select * from $table where $column = '$expid'"; 

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        if(isset($fetch))
        {
            return $fetch;
        }
    }
    // select_one_expense_data() method end


    // update_expense_data() method start
    public function update_expense_data($table, $expid, $exptitle, $expfor, $expamount, $expdesc, $expdate, $expbill, $column)
    {
        $update = "update $table set expense_id = '$expid', expense_title = '$exptitle', expense_for = '$expfor', expense_amount = '$expamount', expense_description = '$expdesc', expense_date = '$expdate', bill_img = '$expbill' where $column = '$expid'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // update_expense_data() method end


    // delete_expense_data() method start
    public function delete_expense_data($table, $column, $expid)
    {
        $delete = "delete from $table where $column = '$expid'";

        $exe = mysqli_query($this->con, $delete);

        return $exe;
    }
    // delete_expense_data() method end


    // select_user_data() method start
    public function select_user_data($table, $table1, $table2, $table3, $column, $column1, $column2, $column3, $id)
    {
        $select = "select * from $table join $table1 on $table.$column = $table1.$column join $table2 on $table.$column1 = $table2.$column1 join $table3 on $table.$column2 = $table3.$column2 where $column3 = '$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        if(isset($fetch))
        {
            return $fetch;
        }
    }
    // select_user_data() method end


    // update_user_profile() method start
    public function update_user_profile($table, $id, $fnm, $lnm, $cn, $st, $ct, $contact, $em, $address, $column)
    {
        $update = "update $table set user_id = '$id', first_name = '$fnm', last_name = '$lnm', country_id = '$cn', state_id = '$st', city_id = '$ct', contact = '$contact', email = '$em', address = '$address' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }
    // update_user_profile() method end


    // change_password() method start
    public function change_password($table, $opass, $npass, $cpass, $column, $id)
    {
        // select old password 
        $select = "select password from $table where $column = '$id'";

        $ex = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($ex);

        $psw = $fetch["password"];

        if($opass == $psw && $npass == $cpass)
        {
            $update = "update $table set password = '$npass' where $column = '$id'";

            $exe = mysqli_query($this->con, $update);

            return $exe;
        }
    }
    // chnage_password() method end


    // forgot_password() method start
    public function forgot_password($table, $column, $em)
    {
        $select = "select password from $table where $column = '$em'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysql_fetch_array($exe);

        $psw = $fetch["password"];

        if(isset($psw))
        {
            return $psw;
        }
    }
    // forgot_password() method end


    // logout() method start
    public function logout()
    {
        unset($_SESSION["userid"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);

        session_destroy();

        return true;
    }
    // logout() method end
    
}

?>