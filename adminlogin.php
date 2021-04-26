
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "css/loginstyle.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<title>LOGIN</title>
<style>
.right{
background-color:#C2C5CD;
}
.bi{

  padding:10px;
  font-size: 20px;
  width: 20px;
  text-align:center;
  color:white;
  background-color:black;
  border-radius:5px;
  margin-right:5px;
}
@media screen and (max-width: 1024px) {
	.left{
		display:none;
    }
	.right{
		width:100%;
		background-color:#E3E8EC;
	}
	
}
</style>
</head>
<body>
<div class="split left" style="	background-color:#E6E9F5;">
<div class="centered" style="background-color:transparent;top:35%;width:500px;height:450px;">
<img src = "images/apt3logo2.jpg" style="height:30%;width:30%;">
<div style="width:550px;">
<h1 style="text-align:left;font-size:50px;color:black">Welcome to EasySociety</h1>
</div>
<p style="text-align:center;color:black;font-size:20px;">
EasySociety is all about easing the life of a society 
resident by connecting them to their society and their workflow. 
A Web-App that digitalize and revolutionalize the traditional way of housing.</p>
<div>
<h3 style="text-align:center;color:black">Connnect us!</h3>
<br>
<div style="font-size:15px">
<a href="#link"><i class="bi bi-twitter"></i></a>
<a href="#link"><i class="bi bi-facebook"></i></a>
<a href="#link"><i class="bi bi-google"></i></a>
<a href="#link"><i class="bi bi-linkedin"></i></a>
</div>
</div>
</div>
</div>
<div class="split right">
<div class="centered1" style="opacity:0.9">
<h1>Admin Login</h1><hr>
<form method="post" action="adminloginauthenticate.php" style="margin-top: 40px">

<input type="text" name="username" placeholder="Username.."required>
<input type="password"name="password" placeholder="Password.."required>
<input type="submit" value="Login"required>
	</form>
	<?php
				if(isset($_REQUEST["valid"]) && $_REQUEST["valid"] == "false"){ ?>
				<h5>Wrong Login credentials! Try again</h5>
				<?php }
	?>

	<br>
<a href="index.html"><button class = "button"><strong>Back to Last Page</strong></button></a>
	</div>
	
</div>
</body>
</html>