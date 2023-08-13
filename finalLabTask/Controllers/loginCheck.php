<?php 
require_once('../Model/alldb.php');

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];


		$status= auth($email,$password);
		if($status)
		{
			header('location:../View/homePage.php');
		}
		else
		{
			header('location:../View/login.php');
		}
	}


?>