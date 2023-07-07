<?php

class model 
{
    public $con="";

    public function __construct()
    {

        try
        {
            $this->con = new mysqli("localhost", "root", "", "nashamukti_db");
            echo "<h3 style='color:green';> Connection Successful </h3>";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));            
        }
    }

    public function insertalldata($table, $data)
    {
        $column = array_keys($data);
        $column1 = implode(",", $column);

        $value = array_keys($data);
        $value1 = implode("','", $value);

        $insert = "insert into $table($column1) values('$value1')";

        $exe = mysqli_query($this->con, $insert);

        return $exe;
    }
}

?>