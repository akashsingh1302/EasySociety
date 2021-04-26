<?php

$username = $_POST["username"];
$password = $_POST["password"];
require "dbconnection/db.php";
$conn = dbconnect();
$sql = "SELECT Username,Password,FlatOwner,FlatAddress,Email FROM housingmembers where Username = '$username' ";
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
		$_SESSION["name"] = $row["FlatOwner"];
		$_SESSION["username"] = $row["Username"];
		$_SESSION["flataddress"] = $row["FlatAddress"];
		$_SESSION['email'] = $row['Email'];
		$_SESSION["valid"] = true;
		echo "Checkpoint 2";
		header("Location:residentdashboard.php");
	}
	else{
		header("Location:residentlogin.php?valid=false");
	}

}
else{
	header("Location:residentlogin.php?valid=false");
}
mysqli_close($conn);
?>