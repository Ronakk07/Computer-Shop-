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
			<img src="Images/phone.png" > 9999999999
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

						<h1 style="font-family:verdona;font-size:35px;color:red;"> Register Your Compliant &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--Welcome  <?php $username1="Rakesh"; echo "$username1";

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


			<div class="row col-sm-12" style="margin-top: -170px">

				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 				<a href="index.html" class="btn btn-danger">HOME</a>

  				<div class="wrap">
  					<form action="connectivity3.php" method="POST">
  						<center>
  							<h1 ></h1><br>

							<div class="avatar">

    					 	 <img src="Images/Comps/user.jpg">
							</div>

							<input type="text" placeholder="Name" name="username" required><br>
							<input type="text" placeholder="Mobile Number" required minlength="10" maxlength="10" name="mob"><br>
							<textarea class="form-control" rows="3" style="width: 270px"  placeholder="Enter Your Address" name="address"></textarea><br>

							<!--<select style="width: 268px">
								<option name="Motherboard">Motherboard</option>
								<option name="CPU">CPU</option>
								<option name="Monitor">Monitor</option>
								<option name="RAM">RAM</option>
							</select>-->
							<textarea class="form-control" rows="3" style="width: 270px"  placeholder="Type Your Compliant" name="complaint"></textarea><br>
							<br>
							<input type="Submit" name="button1" value="Submit" class="button" >
						</center>
					</form>
				</div>

			</div><!--End of row 1-->


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
				<?php
echo "<h1>Rakesh</h1>"; ?>
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
