<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Image upload logic </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- CSS FILE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- JS FILE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</head>
<body>
    
    <?php
        if(isset($_POST["submitbtn"]))
        {

            // upload user image
            $img=$_FILES["userimg"]["tmp_name"];
            $imgtype=$_FILES["userimg"]["type"];
            $imgsize=$_FILES["userimg"]["size"]/100000;
            $imgpath="upload-img/users/".$_FILES["userimg"]["name"];
            move_uploaded_file($img, $imgpath);

            // upload gallery image
            $galleryimg=$_FILES["galleryimg"]["tmp_name"];
            $galleryimgtype=$_FILES["galleryimg"]["type"];
            $galleryimgsize=$_FILES["galleryimg"]["size"]/100000;
            $galleryimgpath="upload-img/gallery/".$_FILES["galleryimg"]["name"];
            move_uploaded_file($galleryimg, $galleryimgpath);

            // upload product image
            $productimg=$_FILES["productimg"]["tmp_name"];
            $productimgtype=$_FILES["productimg"]["type"];
            $productimgsize=$_FILES["productimg"]["size"]/100000;
            $productimgpath="upload-img/product/".$_FILES["productimg"]["name"];
            move_uploaded_file($productimg, $productimgpath);
        
            echo "<div class='alert alert-success mt-5 p-3 bg-success text-white text-center w-25 mx-auto'> <span> Images uploaded successfully. </span> </div>";
			header("refresh:4, form.php");
		}
    ?>

</body>
</html>