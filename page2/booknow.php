<?php
    include("conn.php");

?>

<?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $room = $_POST['_u671951939132724816'];
 $message = $_POST['message'];
 $ci = $_POST['ci'];
 $co = $_POST['co'];


 $sql = "insert into book_now(name, email, phone, room, message, ci , co) values('$name','$email','$phone','$room','$message','$ci','$co')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Inserted Succesfully')</script>";
        header("refresh:1;url=check in check out.html");
    }
    else{
        echo "<script>alert('Insert Unsuccesfull')</script>";
    }
?>