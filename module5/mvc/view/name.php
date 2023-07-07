<?php
require_once("../controller/name-controller.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>  | name</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post" align="center" style="margin-top:5%">
        <div class="form-group">
          <label for="exampleInputEmail1"> Enter name </label>
          <input type="text" class="form-control" id="nm" name="name" placeholder="Enter name" required>
          
        </div>
        
        <div class="form-group form-check">
            <button type="submit" name="sub" class="btn btn-primary" style="margin-top:2%">Submit</button>     
        </div>
        
      </form>
</body>
</html>