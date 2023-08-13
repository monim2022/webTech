<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>addemployee</title>
	<link rel="stylesheet" href="..//cssFiles/add.css">

</head>
<body>

     <a href="homePage.php"><button>Back</button></a>

	<form action="../Controllers/addCheck.php" method="post">
		
		<div class="mainContainer">
     		<h2 class="formName">ADD EMPLOYEE</h2>
     		
     		<input type="text" name="emp_name" placeholder="Enter employee name"><br>
     		<input type="text" name="emp_type" placeholder="Enter employee type"><br>
     		<input type="email" name="emp_email" placeholder="Enter employee email"><br>
     		<input type="text" name="emp_salary" placeholder="Enter employee salary"><br><br>
     		<input  class="submitBtn" type="submit" name="add">
     		
     		
     	</div>
     	




	</form>
	
</body>
</html>