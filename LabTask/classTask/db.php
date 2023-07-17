<?php
include 'conn.php';
$conn=getConnection();
$sql="select * from ab";
$result=$conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="get" action="edit.php">
      <table border="1">
      	<tr>
      		<th>Id</th>
      		<th>Name</th>
      		<th>Address</th>
      		<th>Option</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {

      ?>
	
      	<tr>
      		<td><?php echo $row["Id"] ; ?></td>
      		<td><?php echo $row["Name"] ; ?></td>
      		<td><?php echo $row["Address"] ; ?></td>
      		<td><button name="edit" value="<?php echo $row["Id"] ; ?>">Edit</button></td>

      	</tr>

     <?php} ?>
      </table>
      </form>
</body>
</html>