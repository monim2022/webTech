<?php 
   include 'connect.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="..//..//cssFile//admin.css">
</head>
<body>

	<form action="" method="get">
		
		<div class="container">

			<div class="adminDash">ADMIN DASHBOARD</div>
			<hr>
			

		<?php 

		    $sql = "SELECT * FROM admin";
		    $query = mysqli_query($conn,$sql);
		  echo "<table border = '1px solid'> 
		        <tr>
					<th>Employee Id</th>
					<th>Employee Name</th>
					<th>Employee Type</th>
					<th>Employee email</th>
					<th>Employee Salary</th>
					<th>Action</th>

					
				</tr> " ;
		   while ($data = mysqli_fetch_assoc($query)) {
		    	

		   	$id = $data['id'];
		    $employee_name = $data['employee_name'];
		    $employee_type = $data['employee_type'];
		    $email = $data['email'];
          $employee_salary = $data['employee_salary'];
		   echo "<tr>
		         <td>$id</td>
		         <td>$employee_name</td>
		         <td>$employee_type</td>
		         <td>$email</td>
		         <td>$employee_salary</td>
               <td><span><a href='edit.php?id=$id'>Update</a></span></td>
               <td><span><a href='delete.php?id=$id'>Delete</a></span></td>



		       </tr>" ;

		    } ;
		   
		    
		 ?>
	     
	     <div class="insertBtn" >
	     	<button><a href="edit.php">ADD EMPLOYEE</a></button>
	     </div>
      	

  
			
		</div>
	</form>
	
</body>
</html>