
<?php 
  require_once('../Model/alldb.php');
  $result=displayEmployee();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allEmployee</title>
        <link rel="stylesheet" href="..//cssFiles/displayemp.css">

</head>
<body>

    <a href="add.php"><button>Add Employee</button></a>
    <div class="mainContainer">
        <h2>Employee Information</h2>
     <table border="1">
     	<tr>
     		<th>Employee Id</th>
     		<th>Employee Name</th>
     		<th>Employee Email</th>
     		<th>Employee type</th>
            <th>Employee salary</th>
     	</tr>
     	<?php while($row=$result->fetch_assoc()){ ?>
     	<tr>
     		<td><?php echo $row["id"]; ?></td>
     		<td><?php echo $row["emp_name"]; ?></td>
     		<td><?php echo $row["emp_email"]; ?></td>
     		<td><?php echo $row["emp_type"]; ?></td>
     		<td><?php echo $row["emp_salary"]; ?></td>

     	</tr>
     <?php } ?>
     </table>
    
    </div>
    
    
</body>
</html>