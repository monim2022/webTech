<?php
   require_once('db.php');

   function auth($email,$password)
   {
      $con=getConnection();
      $sql="select * from login where email='{$email}' 
      and  password='{$password}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function add($id,$emp_name,$emp_type,$emp_email,$emp_salary)
   {
      $con=getConnection(); 
      $sql="INSERT INTO addemp(emp_name,emp_type,emp_email,emp_salary) VALUES('$emp_name','$emp_type','$emp_email','$emp_salary')";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return true;
      }
      else
      {
         return false;
      }

   }

   function displayEmployee()
   {
            $con=getConnection(); 
            $sql = "SELECT * FROM addemp";
            $result = mysqli_query($con,$sql);
          if($result)
           {
            return $result;
           }
           else
           {
            echo " Error";
           }



   }



 

?>