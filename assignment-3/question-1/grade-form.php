<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Subject Marks Form | </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'> </script>

    <!-- online cdn css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- online cdn js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <!-- container fluid start -->
    <div class="container-fluid bg-white">

        <!-- div start -->
        <div height="auto" width="70%" class="mt-5 p-0">

            <!-- form start -->
            <form method="post" action="calculate-grade.php"  class="m-5 p-5 shadow" style="background-color:aqua">

                <!-- form heading -->
                <div>
                    <h1 align="center"> Student Grade Form </h1>
                    <hr class="w-25 mx-auto border border-2 border-dark ">
                </div>

                <!-- physics marks -->
                <div class="form-group">
                    <label class="mt-4"> Physics </label>
                    <input type="text" name="physics" placeholder="Enter marks of Physics" class="form-control mt-2 p-2" required>
                </div>

                <!-- chemistry marks -->
                <div class="form-group">
                    <label class="mt-4"> Chemistry </label>
                    <input type="text" name="chemistry" placeholder="Enter marks of Chemistry" class="form-control mt-2 p-2" required>
                </div>

                <!-- biology marks -->
                <div class="form-group">
                    <label class="mt-4"> Biology </label>
                    <input type="text" name="biology" placeholder="Enter marks of Biology" class="form-control mt-2 p-2" required>
                </div>

                <!-- mathemetics marks -->
                <div class="form-group">
                    <label class="mt-4"> Mathemetics </label>
                    <input type="text" name="mathemetics" placeholder="Enter marks of Mathemetics" class="form-control mt-2 p-2" required>
                </div>

                <!-- computer marks -->
                <div class="form-group">
                    <label class="mt-4"> Computer </label>
                    <input type="text" name="computer" placeholder="Enter marks of Computer" class="form-control mt-2 p-2" required>
                </div>

                <!-- submit btn -->
                <div class="form-group">
                    <input type="submit" name="sub" class="btm btn-dark  mt-4">
                </div>
            </form>
        </div>
    </div>
</body>
</html>