<?php
   function getConnection()
   {
   	$server="localhost";
   	$username="root";
   	$password="";
   	$dbName="finaltask";
   	$con= new mysqli($server,$username,$password,$dbName);
   	return $con; 
   }
?>