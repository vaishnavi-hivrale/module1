<?php

class model 
{
    public $con = "";
    
    public function __construct()
    {
        try
        {
            $this->con = new mysqli("localhost", "root", "", "budget_db");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
        }
    }

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

    public function select_data($table)
    {
        $select = "select * from $table";

        $exe = mysqli_query($this->con, $select);

        while($fetch = mysqli_fetch_array($exe))
        {
            $arr[] = $fetch;
        }

        return $arr;
    }

    public function select_one_data($table, $column, $id)
    {
        $select = "select * from $table where $column = '$id'";

        $exe = mysqli_query($this->con, $select);

        $fetch = mysqli_fetch_array($exe);

        return $fetch;
    }

    public function update_data($table, $id, $nm, $amt, $dt, $column)
    {
        $update = "update $table set expense_id = '$id', expense_name = '$nm', expense_amount = '$amt', expense_date = '$dt' where $column = '$id'";

        $exe = mysqli_query($this->con, $update);

        return $exe;
    }

    public function delete_data($table, $column, $id)
    {
        $delete = "delete from $table where $column = '$id'";

        $exe = mysqli_query($this->con, $delete);

        return $exe;
    }
}

?>