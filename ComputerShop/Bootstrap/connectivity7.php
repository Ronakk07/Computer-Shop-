<?php
$mysql_database = "computershop";
$prefix = "";
$conn = mysql_connect("localhost","root","");

$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

if(!$DB)
{ 
	die('Could not connect: ' . mysql_error());
}


$id=$_POST['empid'];
$name=$_POST['empname'];
$mail=$_POST['email'];
$mob=$_POST['Number'];
$sal=$_POST['salary'];

 $sql = "INSERT INTO employeedetails".
      " (Emp_Id,Emp_Name,Email,Mobile_Number,Salary) ".
      "VALUES ($id,'$name','$mail',$mob,$sal)";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );
    $count= mysql_affected_rows();
   echo"$sql";
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   if($count==1)
   {
   echo'<script>alert("Data Inserted Successfully")</script>';
      echo '<script>window.location="index.html";</script>';
   }
   else
   {
      echo'<script>alert("Data Not Inserted Successfully")</script>';
      echo '<script>window.location="Update.php";</script>';
   }
   mysql_close($conn);

?>