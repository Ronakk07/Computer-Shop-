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

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
 $sql = "INSERT INTO feedback".
      " (firstname,lastname,email,subject,message) ".
      "VALUES ('$firstname','$lastname','$email','$subject','$message')";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo'<script>alert("Feedback Submitted Successfully")</script>';
      echo '<script>window.location="contact.html";</script>';
   
   mysql_close($conn);

?>