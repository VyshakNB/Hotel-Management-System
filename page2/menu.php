<?php
    include("../page1/hotel.php");

?>

<?php
 
 $name = $_POST['name'];
 $quantity = $_POST['quantity'];
 $food = $_POST['_u671951939132724816'];


 $sql = "insert into menu(name, food ,quantity) values('$name','$food' ,'$quantity')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Ordered Succesfully')</script>";
		header("refresh:0;url=menu page.html");

       
    }
	 
    else{
        echo "<script>alert('Order Unsuccesfull')</script>";
    }
?>