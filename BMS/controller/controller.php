<?php

require_once("model/model.php");

class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();

        if(isset($_POST["add-expense-btn"]))
        {
            $name = $_POST["budget-title"];
            $amt = $_POST["budget-amount"];
            $dt = $_POST["expense-date"];

            $data = array("expense_name" => $name, "expense_amount" => $amt, "expense_date" => $dt);

            $chk = $this->insert_data('tbl_expense', $data);

            if($chk)
            {
                echo "<div class='alert alert-success mx-auto m-5 p-4 text-center text-dark w-25'> Data Inserted. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-center text-dark w-25'> Data not inserted. </div>";
                header("refresh:3, './'");
            }
        }

        if(isset($_POST["update-expense-btn"]))
        {
            if(isset($_GET["expense-id"]))
            {
                $id = $_GET["expense-id"];        
            }

            $nm = $_POST["budget-title"];
            $amt = $_POST["budget-amount"];
            $dt = $_POST["expense-date"];

            $chk = $this->update_data('tbl_expense', $id, $nm, $amt, $dt, 'expense_id');

            if($chk)
            {
                echo "<div class='alert alert-success mx-auto m-5 p-4 text-center text-dark w-25'> Data Updated. </div>";
                header("refresh:3, './'");   
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-center text-dark w-50'> Data not updated. </div>";
                header("refresh:3, './update-data'");
            }
        }

        if(isset($_GET["del-id"]))
        {
            $id = $_GET["del-id"];

            $chk = $this->delete_data('tbl_expense', 'expense_id', $id);

            if($chk)
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-center text-dark w-25'> Data deleted. </div>";
                header("refresh:3, './'");
            }
            else
            {
                echo "<div class='alert alert-danger mx-auto m-5 p-4 text-center text-dark w-25'> Data not deleted. </div>";
                header("refresh:3, './'");
            }
        }

        $expenses = $this->select_data('tbl_expense'); 

        if(isset($_GET["expense-id"]))
        {
            $id = $_GET["expense-id"];

            $one_data = $this->select_one_data('tbl_expense', 'expense_id', $id);
        }
        

        // routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    break;

                case '/update-data':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("update_data.php");
                    break;

                default :
                    echo "<div class='alert alert-success mx-auto m-5 p-4 text-center text-dark w-50'> Enter valid URL. </div>";
                    break;
            }
        }
    }
}

$obj = new controller;

?>