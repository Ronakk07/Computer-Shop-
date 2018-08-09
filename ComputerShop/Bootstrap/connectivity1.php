<?php
 require('connect.php');
if (isset($_POST['username']) and isset($_POST['password']))
{

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM username WHERE userName='$username' and pass='$password'";

	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1)
	{
		if ($username=="admin" && $password="admin123")
		{
			echo'<script>alert("Login Successfull")</script>';
			echo '<script>window.location="dashboard.php";</script>';
		}
		else
		{
			//echo"Login Successfull";
			echo'<script>alert("Login Successfull")</script>';
           
			echo '<script>window.location="complaint.php";</script>';
		}
	}
	else
	{
		echo'<script>alert("Invalid Credentials try Again...!")</script>';
		echo '<script>window.location="login.html";</script>';


	}

}

//else{echo"RK";}

?>
