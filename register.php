<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homegage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
		
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark">
			<a class="navbar-brand ml-1 font-weight-bold " href="#">Easy Society</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item p-2">
						<a class="nav-link text-white" href="index.php">Home</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white" href="contacts.php">Contacts</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link text-white " href="about.php">About Us</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container text-center text-white col-lg-6 col-md-8 col-sm-10 ">
			<div class="border border-white rounded">
				<h2 >Registration Form</h2>
				<?php
				if(isset($_REQUEST["msg"]) && $_REQUEST["msg"] != ""){
					$msg = $_REQUEST["msg"];
					echo "<h6 class='text-danger'>".$msg."</h5>";}
				 ?>
				<hr style="background-color:white">
					<form method="POST" class="text-center py-3" action="controllers/registercontrol.php">
						<table class="text-center col-lg-10 col-md-10  mx-auto">
							<tr >
								<td>Flat Number</td>
								<td><input type="text" class="form-control" name="Emp-Id" placeholder="Enter Employee Id" required autocomplete="off"></td>
							</tr>
							<tr >
								<td>Owner's Full Name</td>
								<td><input type="text" class="form-control" name="fullname" placeholder="Enter your name" required autocomplete="off"></td>
							</tr>

							<tr>
								<td>Email Id</td>
								<td><input type="Email" class="form-control" name="Email_Id" placeholder="Enter your email id" required autocomplete="off"></td>
							</tr>
							<tr>
								<td>Contact</td>
								<td><input type="number" class="form-control" name="mobile" placeholder="Enter Mobile Number" required autocomplete="off"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="off"></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input type="password" class="form-control" id="cnfpassword" name="cnfpassword" placeholder="Retype Password" required autocomplete="off"></td>
							</tr>
							<tr>
								<td colspan="2" class="text-center"><input type="submit" class="btn btn-outline-success  mt-3" value="Register" data-toggle="modal" data-target="#myModal1"></td>
							</tr>
							<tr>
								<td colspan="2">Already Registered&nbsp;&nbsp;&nbsp;<a href="index.php" class="btn btn-outline-primary mt-2">Login</a></td>
							</tr>
						</table>
					</form>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		</body>
	</html>