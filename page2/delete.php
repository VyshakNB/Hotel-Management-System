<?php
include_once '../page1/hotel.php';
$result = mysqli_query($conn,"SELECT * FROM book_now");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="customerdetails.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete employee data</title>
</head>
<body>
<nav class="navbar navbar-expand-sm style="background-color: #e3f2fd;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="book_now.html">Booking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="customerdetails.php">dispaly</a>
    </li>
    
  </ul>

</nav>

<center>
<h1>Delete from watchlist</h1>
<table  width = "20%" border = "10" cellpadding = "7" cellspacing = "7">
	<tr>
	  <th><h2>name</h2></th>
      <th><h2>email</h2></th>
      <th><h2>phone</h2></th>
      <th><h2>room</h2></th>
      <th><h2>message</h2></th>
      <th><h2>check in </h2></th>
      <th><h2>check out</h2></th>
      <th><h2>Delete</h2></th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($email)) echo $email;?>">
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><?php echo $row["room"]; ?></td>
  <td><?php echo $row["message"]; ?></td>
  <td><?php echo $row["ci"]; ?></td>
  <td><?php echo $row["co"]; ?></td>
	<td><a href="delete-process.php?email=<?php echo $row["email"]; ?> ">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>

</body>
</center>
</html>