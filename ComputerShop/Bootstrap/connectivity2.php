<?php
$mysql_database = "computershop";
$prefix = "";
$conn = mysql_connect("localhost","root","");

$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

if(!$DB)
{ 
	die('Could not connect: ' . mysql_error());
}

/*$Name=$_POST['username'];
$Password=$_POST['password'];
$Mob=$_POST['Number'];*/

$user=$_POST['username'];
$password1=$_POST['password'];
$Number1=$_POST['Number'];

 $sql = "INSERT INTO username".
      " (userName,pass,Mob_No) ".
      "VALUES ('$user','$password1',$Number1)";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo'<script>alert("Registration Successfull")</script>';
      echo '<script>window.location="login.html";</script>';
   
   mysql_close($conn);

?>