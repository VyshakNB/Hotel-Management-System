<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="customerdetails.css">

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <center>
    <h1>Menu</h1>
 <?php

include("../page1/hotel.php");

?>

    <table width = "50%" border = "10" cellpadding = "7" cellspacing = "7">

        <thead>

            <th><h2>Customer Name</h2></th>
            <th><h2>Food</h2></th>
            <th><h2>Quantity</h2></th>

          

        </thead>
        <tr>
                <?php 

                    $sql = "select * from menu"; 

                    $result = mysqli_query($conn,$sql); 

                    while($row = mysqli_fetch_array($result)) 

                    {
                        ?>
                        <tr>
                        <td><h5><i><?php echo $row['name'];?></i></h5></td>
                        <td><h5><i><?php echo $row['food'];?></i></h5></td>
                        <td><h5><i><?php echo $row['quantity'];?></i></h5></td> 
                        
                        </tr>

                        <?php
                    }
                    

               ?>
        </tr>     


      

    </table>
    </center>  

</body>

</html>