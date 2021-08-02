<?php
include_once '../page1/hotel.php';
$result = mysqli_query($conn,"SELECT * FROM book_now");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Delete customer data</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="customerdetails.css">

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Update customer Data</title>



</head>
<body>
<nav class="navbar navbar-expand-sm style="background-color: #e3f2fd;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="book_now.html">Booking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="photo gallery.html">Photo Gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customerdetails.php">dispaly</a>
    </li>
    
  </ul>

</nav>

  <center>
    <h1>update customer list</h1>
<table width = "10%" border = "10" cellpadding = "10" cellspacing = "15">
<tr>
<td><h3>Name</h3></td>
<td><h3>Email</h3></td>
<td><h3>Phone</h3></td>
<td><h3>room</h3></td>
<td><h3>message</h3></td>
<td><h3>check in</h3> </td>
<td><h3>check out</h3></td>
<td><h3>update</h3></td>
<!-- <td>Action</td> -->
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><h5><i><?php echo $row["name"]; ?></h5></i></td>
<td><h5><i><?php echo $row["email"]; ?></h5></i></td>
<td><h5><i><?php echo $row["phone"]; ?></h5></i></td>
<td><h5><i><?php echo $row["room"]; ?></h5></i></td>
<td><h5><i><?php echo $row["message"]; ?></h5></i></td>
<td><h5><i><?php echo $row["ci"]; ?></h5></i></td>
<td><h5><i><?php echo $row["co"]; ?></h5></i></td>


<td><a href="update-process.php?email=<?php echo $row["email"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</center>
</html>