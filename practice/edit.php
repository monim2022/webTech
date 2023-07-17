<?php 
include 'connect.php';

if (isset($_GET['submit'])) {
	// code...
	$name=$_GET['name'];
	$address=$_GET['address'];

	$sql="INSERT INTO crud(name,address) VALUES('$name','$address')";
	if(mysqli_query($conn, $sql)==true)
		{
          echo "Data inserted";
		}
		else{
			echo"not";
		}

	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit form</title>
</head>
<body>
	
     <form action="" method="get">
     	<div class="container">
     		<input type="text" name="name" placeholder="Enter your name"><br><br>
     		<input type="text" name="address" placeholder="Enter your address"><br><br>
     		<input type="submit" name="submit">
     	</div>
     </form>

</body>
</html>