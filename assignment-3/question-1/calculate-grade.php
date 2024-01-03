<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Student Grade | </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!-- online cdn css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- online cdn js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body style="background-color:aquamarine;">

    <?php
    // This program calculates percentage and generates grade of the student using if-else if statement

        if(isset($_POST["sub"]))
        {
        
            // Get values from user using super global variable $_POST
            $phy=$_POST["physics"];
            $chem=$_POST["chemistry"];
            $bio=$_POST["biology"];
            $maths=$_POST["mathemetics"];
            $comp=$_POST["computer"];

    ?>
            <!-- CONTAINER-FLUIDE START -->
            
            <!-- print marks of all subjects -->
            <div class="container-fluid">

            <!-- Form heading -->
            <h1 align="center" class="mt-5"> Grades </h1>
            <hr class="border border-dark border-2 w-25 mx-auto">
           
            <!-- TABLE START -->
            <center>
                <table class="w-50 table bordered table-light table-striped table-responsive mt-5 p-4">
                    <tr>
                        <th> Subject </th>
                        <th> Marks </th>
                    </tr>

                    <tr>
                        <td> <?php print("Marks of Physics"); ?> </td> 
                        <td> <?php print($phy); ?> </td>
                    </tr>

                    <tr>
                        <td> <?php print("Marks of Chemistry"); ?> </td> 
                        <td> <?php print($chem); ?> </td>
                    </tr>

                    <tr>
                        <td> <?php print("Marks of Biology"); ?> </td>
                        <td> <?php print($bio); ?> </td> 
                    </tr>

                    <tr>
                        <td> <?php print("Marks of Mathemetics"); ?> </td> 
                        <td> <?php print($maths); ?> </td>
                    </tr>

                    <tr>
                        <td> <?php print("Marks of Computer"); ?> </td>
                        <td> <?php print($comp); ?> </td>
                    </tr>

    <?php

                    // calculate average marks 
                    $total = $phy + $chem + $bio + $maths + $comp;
                    $percentage = ( $total / 500 ) * 100;
                
    ?>

                    <!-- print percentage -->
                    <tr align="center">
                        <td colspan=2> <b> <?php print("Percentage: $percentage%"); ?> </b> </td>
                    </tr>
                
                    <tr align="center">
                        <td colspan=2> <b>
    <?php
                        // check percentage and calculate grade
                        if($percentage > 90 && $percentage <= 100)
                        {
                            print("Grade A+");
                        }
                        else if($percentage > 80 && $percentage <= 90 )
                        {
                            print("Grade: A");
                        }
                        else if($percentage > 70 && $percentage <= 80 )
                        {
                            print("Grade: B+");
                        }
                        else if($percentage > 60 && $percentage <= 70 )
                        {
                            print("Grade: B");
                        }
                        else if($percentage > 50 && $percentage <= 60 )
                        {
                            print("Grade: C");
                        }
                        else if($percentage > 40 && $percentage <= 50 )
                        {
                            print("Grade: D");
                        }
                        else
                        {
                            print("You are fail");
                        }
    ?>
                        </b> </td>
                    </tr>
                </table>
            </center>
            <!-- TABLE END -->

            </div>
            <!-- CONTAINER-FLUIDE END -->
    <?php
    }
    else
    {
    ?>
        <div class="mt-5 p-5" style="margin-left:35%;">
        <a href="grade-form.php" class="btn btn-dark btn-lg text-light text-center p-3"> Click here to go Back to Grade form </a>
        </div>
    <?php
    }
    ?>
</body>
</html>