<?php 
require_once('../Model/alldb.php');

if(isset($_POST['add']))
{
	$id=$_POST['id'];
	$emp_name=$_POST['emp_name'];
	$emp_type=$_POST['emp_type'];
	$emp_email=$_POST['emp_email'];
	$emp_salary=$_POST['emp_salary'];


		$status= add($id,$emp_name,$emp_type,$emp_email,$emp_salary);
		if($status)
		{
			header('location:../View/homePage.php');
		}
		else
		{
			echo "Error try again";
		}
	}


?>