<?php
    // class model start
    class model
    {
        // public variable for db connection
        public $con = "";

        // __construct() start
        public function __construct()
        {

            session_start();

            // try catch block to establish db connection and catch exception if connection not established 
            try
            {
                $this->con = new mysqli("localhost", "root", "", "student");
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->con));
            }
        
        }
        // __construct() end


        // insertdata() method start
        public function insertdata($table, $data)
        {
            $column = array_keys($data);
            $column1 = implode(",", $column);

            $value = array_values($data);
            $value1 = implode("','", $value);

            $insert = "insert into $table($column1) values('$value1')";

            $exe = mysqli_query($this->con, $insert);

            return $exe;
        }
        // insertdata() method end
        

        // selectdata() method start
        public function selectdata($table)
        {
            $select = "select * from $table";    
            $exe = mysqli_query($this->con,$select);

            while($fetch = mysqli_fetch_array($exe))
            {
               $arr[] = $fetch; 
            }
        
            return $arr;
        }
        // selectdata() method end
    
        
        // login() method start
        public function login($table, $email, $psw)
        {
            $select = "select * from $table where email='$email' and password='$psw'";

            $exe = mysqli_query($this->con, $select);

            $fetch = mysqli_fetch_array($exe);

            $rows = mysqli_num_rows($exe);

            if($rows == 1)
            {
                $_SESSION["studentid"] = $fetch["student_id"];
                $_SESSION["name"] = $fetch["first_name"];
                $_SESSION["email"] = $fetch["email"];
                return true;
            }
            else
            {
                return false;
            }
            
        }
        // login() method end

        
        // display activated cards by logged in user 
        // show_cards() method start
        public function show_cards($table, $column, $id)
        {
            // error_reporting(0);

            $select = "select * from $table where $column = '$id'";

            $exe = mysqli_query($this->con, $select);

            while($fetch = mysqli_fetch_array($exe))
            {
                $arr[] = $fetch;
            }

            return $arr;

        }
        // show_cards() method end


        // count and display no. of cards by logged in user
        // count_cards() method start
        public function count_cards($table, $column1, $column2, $id)
        {
            $select = "select count($column1) as 'Total' from $table where $column2 = '$id'";

            $exe = mysqli_query($this->con, $select);

            while($fetch = mysqli_fetch_array($exe))
            {
                $arr[] = $fetch;
            }

            return $arr;

        }
        // count_cards() method end


        // logout() method start
        public function logout()
        {
            unset($_SESSION["studentid"]);
            unset($_SESSION["name"]);
            unset($_SESSION["email"]);

            session_destroy();
        }
        // logout() method end
      
    }

?>