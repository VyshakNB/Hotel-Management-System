<?php
include_once '../page1/hotel.php';

$sql = "DELETE FROM book_now WHERE email ='" . $_GET["email"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<h1>Record deleted successfully</h1>";
    
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>