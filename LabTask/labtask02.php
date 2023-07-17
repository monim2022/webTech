

<!DOCTYPE html>
<html>
<header>
	<title>labtask01</title>
	</header>
	<body>
		<h1>Registration</h1>
		<form action="output.php" method="post">
		<fieldset name="regiId">
			<br><legend>Registration</legend><br>
		<label>First name:</label>
		<input type="text" placeholder="Enter first name..." name="fName"></input><br><br>
        <label>Last name:</label>
		<input type="text" placeholder="Enter last name..." name="lName"></input><br><br>
		<label for="">Mobile:</label>
         <input class="Mobile" type="text" name="mobileId" placeholder="Enter mobile no..."><br><br>

		<label> Gender:</label>
		<input type="radio" name="radioId">Male</input>
		<input type="radio" name="radioId">Female</input><br><br>
		<label>Mail:</label>
		<input type="email" name="email"></input><br><br>
		<label>Date of Birth:</label>
		<input type="date" name="Date"></input><br><br>

		<label>Address:</label><br>
		<textarea></textarea><br><br>
		
		

		<input type="submit" name=""></input>
	</fieldset>


</form>




		
	</body>
</html>