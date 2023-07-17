<?php
include 'conn.php';
$conn=getConnection();
$sql="select * from ab";
$result=$conn->query($sql);

if($_SERVER["REQUEST_METHOD"]=="GET")
{
	if(isset($_GET['edit']))
	{
      header("location:edit.php");   
	}
	elseif(isset($_GET['delete']))
	{
		header("location:delete.php");
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="get">
      <table border="1">
      	<tr>
      		<th>Id</th>
      		<th>Name</th>
      		<th>Address</th>
      		<th>Option</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["Id"] ; ?></td>
      		<td><?php echo $row["Name"] ; ?></td>
      		<td><?php echo $row["Address"] ; ?></td>
      		<td><button name="edit" value="<?php echo $row["Id"] ; ?>">Edit</button></td>
      		<td><button name="delete" value="<?php echo $row["Id"] ; ?>">Delete</button></td>

      	</tr>

     <?php } ?>
      </table>
      </form>
</body>
</html>