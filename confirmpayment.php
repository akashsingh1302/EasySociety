<?php
session_start();
$flat = $_SESSION["flataddress"];
$owner = $_SESSION["name"];
$month_year = $_SESSION['Month&Year'];
$total = $_SESSION["total"];
$today = date("d-m-Y");
echo "$today";
require('dbconnection/db.php');
$conn = dbconnect();

$sql = "INSERT INTO paymenthistory VALUES ('$month_year','$today','$flat','$owner','$total')";
if(mysqli_query($conn,$sql)){
    $sql1 = "DELETE FROM duebills where FlatAddress = '$flat'";
    $result = mysqli_query($conn,$sql1);
    $due = 0;
    $sql2 = "UPDATE remainingbills SET DueBills = '$due' WHERE FlatAddress='$flat'";
    $result1 = mysqli_query($conn,$sql2);

    echo "Payment Done and Receipt Generated";
    header("Location:paymentsuccess.php");
}
else{
    echo "Something Went Wrong";
    header("Location:paymentfailure.php");
}
?>