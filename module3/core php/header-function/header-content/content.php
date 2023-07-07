<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Content </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- CSS FILES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body style="background-color: cyan;">
    <!-- CONTAINER-FLUIDE START -->
    <div class="container-fluide">

        <!-- HEADING -->
        <center> 
            <h2 class="mt-2 p-3 w-25 bg-danger text-white"> Images </h2>
        <center>
    
        <!-- GRID START -->
        <!-- row 1 start -->
        <div class="row">
            <div class="col-md-6">

                <!-- CARD 1 START -->
                <div class="card w-75 mt-4 p-4">

                    <!-- CARD HEADER -->
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center"> Plant 1 </h4>
                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body">
                    
                        <form method="post" action="download-img.php">
                            <image src="images/plant.jpeg" height="400" width="450" class="image-fluide"> <br>
                            <input type="submit" name="dwn1" value="Download" class="btn btn-primary mt-4">
                        </form>

                    </div>
                
                </div>
                <!-- CARD 1 END -->

            </div>

            <div class="col-md-6">
                
                <!-- CARD 2 START -->
                <div class="card w-75 mt-4 p-4">
    
                    <!-- CARD HEADER -->
                    <div class="card-header bg-primary">
                        <h4 class="text-center text-white"> Plant 2 </h4>
                    </div>
    
                    <!-- CARD BODY -->
                    <div class="card-body">
                        
                        <form method="post" action="download-img.php">
                            <img src="images/plant1.jpeg" heigth="600" width="450" class="image-fluide"> <br>
                            <input type="submit" name="dwn2" value="Download" class="btn btn-primary mt-4">
                        </form>
                    
                    </div>
    
                </div>
                <!-- CARD 2 END -->
    
            </div>

        </div>
        <!-- row1 end -->

        <!-- row2 start -->
        <div class="row">
            <div class="col-md-6">
                <!-- CARD 3 START -->
                <div class="card w-75 mt-4 p-4">

                    <!-- CARD HEADER -->
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center"> Flower </h4>
                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body">
                        <form method="post" action="download-img.php">
                            <image src="images/flower.jpg" height="400" width="400" class="image-fluide">
                            <input type="submit" value="Download" name="dwn3" class="btn btn-primary mt-4">
                        </form>
                    </div>
                </div>
                <!-- CARD 3 END -->
            </div>

            <div class="col-md-6">
                <!-- CARD 4 START -->
                <div class="card w-75 mt-4 p-4">

                    <!-- CARD HEADER -->
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center"> Download PDF here >> </h4>
                    </div>
                    
                    <!-- CARD BODY -->
                    <div class="card-body"> 
                        <form method="post" action="download-pdf.php">
                            <input type="submit" name="dwn4" value="Download" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- CARD 4 END -->
            </div>

        </div>
        <!-- row2 end -->
        <!-- GRID END -->

    </div>
    <!-- CONTAINER-FLUIDE END -->
</body>
</html>