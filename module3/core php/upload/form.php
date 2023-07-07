<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Image Upload Form </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- CSS FILE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- JS FILE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluide mt-0 p-2">
        <div class="container mt-5 p-5">
            <form method="post" action="upload-img.php" enctype="multipart/form-data" class="bg-info mt-2 p-5 shadow">

                <div class="form-group">
                    <center> <h3 class="bg-danger text-white text-center p-3 w-50"> <b> UPLOAD IMAGE FORM </b> </h3> </center>    
                </div>

                <div class="form-group mt-4">
                    <label> Uplaod user image </label>
                    <input type="file" name="userimg" required placeholder="Upload Your Photo" class="form-control mt-2 shadow">
                </div>

                <div class="form-group mt-4">
                    <label> Uplaod gallery image </label>
                    <input type="file" name="galleryimg" required placeholder="Upload gallery photo" class="form-control mt-2 shadow">
                </div>

                <div class="form-group mt-4">
                    <label> Uplaod product image </label>
                    <input type="file" name="productimg" required placeholder="Upload product photo" class="form-control mt-2 shadow">
                </div>

                <div class="form-group mt-4">
                    <input type="submit" name="submitbtn" value="Upload Images" class="btn btn-light text-dark mt-2">
                </div>

            </form>
        </div>
    </div>
</body>
</html>