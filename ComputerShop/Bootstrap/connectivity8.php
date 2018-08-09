<?php
$mysql_database = "computershop";
$prefix = "";
$conn = mysql_connect("localhost","root","");

$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

if(!$DB)
{ 
	die('Could not connect: ' . mysql_error());
}


$user=$_POST['name'];

 $sql = "Delete FROM employeedetails WHERE Emp_Name='".$user."'";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );
  // echo "$retval";
   /*if(!$retval ) {
      echo'<script>alert("Record  Not Deleted Successfullly")</script>';
      echo '<script>window.location="Delete.php";</script>';
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
  echo'<script>alert("Record Deleted Successfullly")</script>';
      //echo '<script>window.location="Delete.php";</script>';
   }*/
   $count= mysql_affected_rows();
   //echo "$count";
   if($count==1)
   {
          echo'<script>alert("Record Deleted Successfullly")</script>';
          echo '<script>window.location="index.html";</script>';
   }
   else
   {
         echo'<script>alert("Record Not Found ")</script>';
         echo '<script>window.location="DeleteEmp.php";</script>';
   }
   mysql_close($conn);

?>