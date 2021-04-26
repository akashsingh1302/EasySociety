<?php

$username = $_POST["username"];
$password = $_POST["password"];
$security = "Security";
require "dbconnection/db.php";
$conn = dbconnect();
$sql = "SELECT Username,Password FROM admin where Username = '$username' and Admintype = '$security'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  	$row = mysqli_fetch_assoc($result);
	  print_r($row);
	if ($row["Password"] == $password)
	{
		echo "Checkpoint 1";
		$username = $row["Username"]; 
		echo $username;
		session_start();
		$_SESSION["username"] = $row["Username"];
		$_SESSION["valid"] = true;
		echo "Checkpoint 2";
		header("Location:layout backup/add_visitors.html");
	}
	else{
		header("Location:securitylogin.php?valid=false");
	}

}
else{
	header("Location:securitylogin.php?valid=false");
}
mysqli_close($conn);
?>