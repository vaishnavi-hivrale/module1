<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Check Odd Even no. </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    

    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        include("odd-even.php");
    ?>

    <div class="container-fluide mt-0 p-5">
        <div class="container mt-5 p-5 border border-4" style="background-color:lightgreen">

            <center>
                <form method="post" action="odd-even.php" style="background-color: white" class="shadow mt-2 p-5">
                    <div class="form-group">
                        <h2 class="w-50 bg-dark text-white text-center"> Check Odd-Even No. </h2>
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="txt" placeholder="Enter any no." class="form-control" required>
                    </div>

                    <div class="form-grouo mt-3">
                        <input type="submit" value="Submit" name="sub" class="btn btn-primary">
                    </div>
                </form>
            </center>
        </div>
    </div>
</body>
</html>