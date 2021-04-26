<?php

$username = $_POST["username"];
$password = $_POST["password"];
require "dbconnection/db.php";
$conn = dbconnect();
$sql = "SELECT Username,Password FROM admin where Username = '$username' ";
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
		header("Location:layout backup/admindashboard.php");
	}
	else{
		header("Location:adminlogin.php?valid=false");
	}

}
else{
	header("Location:adminlogin.php?valid=false");
}
mysqli_close($conn);
?>