<?php
    include("../page1/hotel.php");

?>

<?php
 
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message'];



 $sql = "insert into feedback(firstname, lastname, email, phone, message) values('$firstname','$lastname','$email','$phone','$message')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Feedback form successfully submitted. Thank You. ')</script>";
        header("refresh:1;url=book_now.html");
    }
    else{
        echo "<script>alert('Insert Unsuccesfull')</script>";
    }
?>