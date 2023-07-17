<?php 
include 'connect.php';

if (isset($_GET['submit'])) {
	// code...
	$name=$_GET['employee_name'];
	$employee_type=$_GET['employee_type'];
	$email=$_GET['email'];
	$salary=$_GET['employee_salary'];
	
	$sql="INSERT INTO admin(employee_name,employee_type,email,employee_salary) VALUES('$name','$employee_type','$email','$salary')";
	if(mysqli_query($conn, $sql)==true)
		{
          header("location:admin.php");
             
        }
		else{
			header("location:edit.php");
		}

	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit form</title>
	<link rel="stylesheet" href="..//cssFile//edit.css">
</head>
<body>
	
     <form action="" method="get">
     	<div class="backBtn">
     		<button><a href="admin.php">BACK</a></button>
     	</div>
     	<div class="container">
     		<h2>ADD EMPLOYEE</h2>
     		<div class="inputItems">
     		<input type="text" name="employee_name" placeholder="Enter employee name"><br>
     		<input type="text" name="employee_type" placeholder="Enter employee type"><br>
     		<input type="email" name="email" placeholder="Enter employee email"><br>
     		<input type="text" name="employee_salary" placeholder="Enter employee salary"><br><br>
     		<input class="submitBtn" type="submit" name="submit">
     		</div>
     		
     	</div>
     	
     </form>

</body>
</html>