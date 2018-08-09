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
$customer=$_POST['customerno'];
$price=$_POST['charges'];
$status1=$_POST['status'];

 $sql = "UPDATE callattemp SET Emp_Id=" .$id .",Charges=" .$price .",status='" .$status1 ."' WHERE Customer_Number=" .$customer;
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
   echo'<script>alert("Data Updated Successfull")</script>';
      echo '<script>window.location="index.html";</script>';
   }
   else
   {
      echo'<script>alert("Data Not Updated Successfull")</script>';
      echo '<script>window.location="Update.php";</script>';
   }
   mysql_close($conn);

?>