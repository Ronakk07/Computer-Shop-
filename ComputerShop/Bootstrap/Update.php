<!Doctype HTML>
<html lang="en-US">
<head>  <style>.carousel-inner > .item > img { width:100%; height:20px; } </style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="<IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>The Computer Shop</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">

	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style>
	.styled-select{
		background-image: url("Images/Comps/drop.jpg") no-repeat 96% 0;
	height: 29px;
	overflow: hidden;
	width: 240px;

	}
	.styled-select select {
		 background: white;
		 border: none;
		 font-size: 14px;
		 height: 29px;
		 padding: 5px; /* If you add too much padding here, the options won't show in IE */
		 width: 268px;
	}
	.styled-select.slate {
		 background-image: url("Images/Comps/drop.jpg") no-repeat right center;
		 height: 34px;
		 width: 240px;
	}

	.styled-select.slate select {
		 border: 1px solid #ccc;
		 font-size: 16px;
		 height: 34px;
		 width: 268px;
	}

	</style>

	</head>
	<body>
<!--header-->
	<div class="container-fluid top_bar">
	<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="facebook" class="social-icons"> <i class="fa fa-facebook" style="font-size: 20px ;color:white;"></i></a>
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="social-icons"> <i class="fa fa-twitter" style="font-size: 20px ;color:white;"></i></a>
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="social-icons"> <i class="fa fa-youtube-play" style="font-size: 20px ;color:white;"></i></a>
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+" class="social-icons"> <i class="fa fa-google-plus" style="font-size: 20px ;color:white;"></i></a>
		</div>
		<div class="col-sm-9 text-right contact_info">
			<span class="glyphicon glyphicon-envelope " > thecomputershop.in</span>
			<img src="Images/phone.png" > 9876546755
		</div><!--End of Row-->
	</div><!-- End of Conatainer-->
	</div><!-- End of Conatainer fluid-->
</div>
	<!--Logo and Navigation-->

	<div class="container">
		<div class="row">

			<div class="col-sm-4">
				<img src="Images/complogo.jpg" alt="" width="235px" height="160px">
			</div><!--End of col-5-->
			<div class="col-sm-8 my_menu">

				<nav class="navbar navbar-default">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
						<spna class="icon-bar"></spna>
						<spna class="icon-bar"></spna>
						<spna class="icon-bar"></spna>
					</button>
				</div><!--end of navbar header-->

					<div class="collapse navbar-collapse " id="mynavbar">

						<h1 style="font-family:verdona;font-size:35px;color:red;">&nbsp;&nbsp; Update Records&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--Welcome  <?php $username1="Rakesh"; echo "$username1";

						 ?>--><br></p>
					</div><!--End of collapse-->
				</nav>
			</div><!--End of col-7-->
		</div><!--End of row-->

	</div><!--End of Container-->
	<!--End of Logo and Navigation-->

	<!--End of Header-->

<!--Services Area-->

		<div class="container-fluid our_courses" >

			<div class="container">


				<div class="row">
				<div class="col-sm-6 col-xs-6">
					<?php
									$mysql_database = "computershop";
									$prefix = "";
									$conn = mysql_connect("localhost","root","");

									$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

									if(!$DB)
									{
											die('Could not connect: ' . mysql_error());
									}

 									$sql = "SELECT * FROM employeedetails";
      								//echo"$sql";
   									mysql_select_db('computershop');
   									$result = mysql_query( $sql, $conn );


   									 echo "<table border='3' style='color:white; width:250px;' >";
            						 echo "<tr><th colspan='2' style='text-align:center'>Employee Details</th></tr>";
            						 echo "<tr>";
                					 echo "<th>&nbsp;Name</th>";
                					 echo "<th>Emp Id&nbsp;</th>";
                					 echo "</tr>";
   									while ($row=mysql_fetch_array($result))
   									 {


   								     	echo "<tr>";
               							 echo "<td>" . $row['Emp_Name'] . "</td>";
               						 	echo "<td>" . $row['Emp_Id'] . "</td>";

           							 	echo "</tr>";


   									}
   									echo "</table><br><br>";
   								?>
				</div>
				<div class="col-sm-6 col-xs-6">
					<?php
									$mysql_database = "computershop";
									$prefix = "";
									$conn = mysql_connect("localhost","root","");

									$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

									if(!$DB)
									{
											die('Could not connect: ' . mysql_error());
									}

									$sql1 = "SELECT * FROM complaints";
      								//echo"$sql";
   									mysql_select_db('computershop');
   									$result1 = mysql_query( $sql1, $conn );


   									 echo "<table border='3' style='color:white; width:250px;' >";
   									 echo "<tr><th colspan='3' style='text-align:center'>Customer Details</th></tr>";
            						 echo "<tr>";
                				 	 echo "<th>&nbsp;Name</th>";
                				 	 echo "<th>Number&nbsp;</th>";
                				 	 echo "<th>Problem</th>";
                					 echo "</tr>";
   									 while ($row1=mysql_fetch_array($result1))
   								 	 {


   								    	 echo "<tr>";
               							 echo "<tr>";
               							 echo "<td>" . $row1['userName'] . "</td>";
               							 echo "<td>" . $row1['Mobile_No'] . "</td>";
               							 echo "<td>" . $row1['Complaint'] . "</td>";

           								 echo "</tr>";


   									}
   									echo "</table>";

   									mysql_close($conn);

								?>
								<!--<input type="Submit" name="submit1 " value ="Submit" class="button" onclick="disp()" style="width: --><!--130px;">&nbsp;&nbsp;<input type="submit" name="submit2 " value ="Update" class="button" style="width: 125px;>-->
				</div>
			</div><!--End of row 1-->

						<div class="col-sm-6 col-xs-6">
								<div class="wrap" style="margin-left: -35px;margin-top: -5px;">
									<form action="connectivity6.php" method="POST">
  										<h1 align='center' style="font-family:verdona;font-size:35px;color:yellow;"></h1>

											<input type="text" placeholder="Enter Employee ID" required name="empid"><br>

											<input type="text" name="customerno" placeholder="Enter Customer Number" required><br>
											<input type="text" name="charges" placeholder=" Enter Charges" required><br>
											<div class="styled-select slate" style="margin-left: 12px; width:500px; font-family:TimesNewRoman; color:dimgrey;">
															<select>
																<option value="solved">Solved</option>
																<option value="unsolved">Unsolved</option>
															</select><br>
														</div><br>
												<input type="Submit" name="button1" value="Update" class="button" style="width: 120px;"><br>
											<!--<a href="connectivity6.php" class="btn btn-warning">Update Record</a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="index.html" class="btn btn-warning"  onclick="">Home Page </a>-->
									</form>

								</div>
						</div>

						<div class="col-sm-6 col-xs-6">
						<?php
									$mysql_database = "computershop";
									$prefix = "";
									$conn = mysql_connect("localhost","root","");

									$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

									if(!$DB)
									{
											die('Could not connect: ' . mysql_error());
									}

									$sql1 = "SELECT * FROM callattemp";
      								//echo"$sql";
   									mysql_select_db('computershop');
   									$result1 = mysql_query( $sql1, $conn );


   									 echo "<table border='3' style='color:white; width:250px;' >";
   									 echo "<tr><th colspan='4' style='text-align:center'>Customer Details Status</th></tr>";
            						 echo "<tr>";
                				 	 echo "<th>&nbsp;Emp_Id</th>";
                				 	 echo "<th>Number&nbsp;</th>";
                				 	 echo "<th>Charges</th>";
                				 	 echo "<th>Status</th>";
                					 echo "</tr>";
   									 while ($row1=mysql_fetch_array($result1))
   								 	 {


   								    	 echo "<tr>";
               							 echo "<tr>";
               							 echo "<td>" . $row1['Emp_Id'] . "</td>";
               							 echo "<td>" . $row1['Customer_Number'] . "</td>";
               							 echo "<td>" . $row1['Charges'] . "</td>";
               							  echo "<td>" . $row1['status'] . "</td>";

           								 echo "</tr>";


   									}
   									echo "</table>";

   									mysql_close($conn);

								?>

					</div>
				</div><!--End of row 2-->
			</div><!--End of Container-->
		</div><!--End of Container Fluid-->
	<!--Footer-->

		<div class="container-fluid footer">
			<div class="container">

			<div class="col-sm-4" align="center">
				<img src="Images/computer.jpg" alt="" class="img-responsive" width="100px" height="100px">
				<p>
					The ComputerShop is one of the best website for software solutions and Hardware.
				</p>
				<p>
					<a href="#" class="btn btn-danger"  onclick="myFunction()">Read More...</a>
				</p>
			</div><!--End of Col 1-->
			<div class="col-sm-4">

			<h3>Quick Links</h3>

				<ul>
					<li><a href="index.html">&raquo; Home</a></li>
					<li><a href="Services.html" >&raquo; Services</a></li>
					<li><a href="products.html" >&raquo; Products</a></li>
					<li><a href="contatct.html" >&raquo; Contact Us</a></li>
					<li><a href="about.html" >&raquo; About Us</a></li>

				</ul>

			</div><!--End of Col 2-->
			<div class="col-sm-4">
				<h3>Contact Details</h3>

				<p><strong>Address :  </strong>Bhiwandi City,Maharashtra(India)</p>
				<p><strong>Email :    </strong>thecomputershop@gmail.com</p>
				<p><strong>Phone Number :    </strong>+91-9999999999</p>

			</div><!--End of Col 3-->



			</div><!--End of Container-->



		</div><!--End of Footer-->



	<!--End of Footer-->
		<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<script>
		function myFunction() {
   		 var myWindow = window.open("", "", "width=400,height=300");
   		 	 myWindow.document.write("<h1 align='center'>Welcome to The ComputerShop</h1>");
			}
		</script>

	</body>
	</html>
