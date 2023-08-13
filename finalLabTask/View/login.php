
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <link rel="stylesheet" href="..//cssFiles/login.css">

</head>
<body>

   
<div class="container">

   <form action="../Controllers/loginCheck.php" method="post">
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter email" class="box"><br><br>
      <input type="password" name="password" required placeholder="enter password" class="box"><br><br>
      <input type="submit" name="submit" class="btn" value="Login">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>