<?php
function getConnection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="classTask";
	$conn=new mysqli($servername,$username,$password,$dbname);
	return $conn;
}
?>