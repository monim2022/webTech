<?php
   include 'conn.php';
   $conn=getConnection();
   $sql="SELECT * FROM `crud operation`";
   $result=$conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud operation</title>
</head>
<body>
	<form action="" method="get">
		
      <div class="container">
		
		<h1>CRUDE OPERATION</h1>
		<Table border= 1px solid>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Adress</th>
				<th>Operation</th>
				

	
			</tr>
			
			<tr>
				
				<td><button>Edit</button></td>
				<td><button>Delete</button></td>

			</tr>
			
			
			
			
			
			
		</Table>
	</div>

	</form>
</body>
</html>