<!DOCTYPE html>
<?php
	// Authorisation details.
  if(isset($_POST['btn1'])){
	$username = $_POST['username'];
	$hash = $_POST['hash'];


	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = $_POST['sender']; // This is who the message appears to be from.
	$numbers = $_POST['Number']; // A single number or a comma-seperated list of numbers
	$message = $_POST['message'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
  //echo($result);
}
?>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<!-- <script>
function disp()
{alert();}
</script> -->
</head>

<body><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="index.html" class="btn btn-danger">HOME</a>
  <div class="wrap"><h1 align='center' style="font-family:verdona;font-size:35px;color:yellow;">Feedback Form</h1>
  <form action="feedback.php" method="POST">

		<div class="avatar">
      <img src="Images/Comps/user.jpg">
		</div>
		<input type="text" placeholder="username" name="username" required><br>
		<div class="bar">
			<i></i>
		</div>
		<input type="text" placeholder="enter hash key" name="hash" required><br>
    <input type="text" placeholder="enter sender name" name="sender" required><br>
		<input type="text" placeholder="Mobile Number" name="Number" required maxlength="10" minlength="10">
		<br>
<textarea class="form-control" rows="3" style="width: 300px"  placeholder="Enter Your message" name="message"></textarea>&nbsp;&nbsp;<br>
<input type="Submit" name="btn1" value="Submit" class="button">
</form>
	</div>



</body>

</html>
