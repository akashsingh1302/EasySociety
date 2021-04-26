<?php

$username= $_POST["username"];
$password = $_POST["password"];

require "db.php";
$conn = dbconnect();
$sql = "SELECT Username,Password,FlatOwner FROM housingmembers where Username = '$username' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  	$row = mysqli_fetch_assoc($result);
  	print_r($row);
	if ($row["password"] == $password)
	{
		echo "Checkpoint 1";
		$username = $row["username"]; 
		echo $username;
		session_start();
		$_SESSION["name"] = $row1["FlatOwner"];
		$_SESSION["id"] = $row1["Username"];
		$_SESSION["valid"] = true;
		echo "Checkpoint 2";
	}
	else{
		header("Location:../residentlogin.php");
	}

}
mysqli_close($conn);
?>