<?php

   require("dbconnection/db.php");
   $con=dbconnect();
    session_start();

    if(!(isset($_SESSION['username'])))
    {
        echo "<center><h3><script>alert('Something went wrong!');</script></h3></center>";
    echo "<script>setTimeout(\"location.href = 'adminlogin.php';\",1500);</script>";    
}
    
    else{
    $common = $_POST['common'];
    $water = $_POST['water'];
    $sink = $_POST['sink'];
    $building = $_POST['building'];
    $twowheeler = $_POST['twowheeler'];
    $fourwheeler = $_POST['fourwheeler'];
    $insurance = $_POST['insurance'];
    $others = $_POST['others'];

    if(isset($_POST["submit"])){
     
        $INSERT = "UPDATE bills SET CommonCharges=?, WaterCharges=?, SinkingFund=?, BuildingRepairFund=?, twowheelerParkingCharges=?, fourwheelerParkingCharges=?, InsurancePremium=?, Others=?";
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("dddddddd", $common, $water, $sink, $building, $twowheeler, $fourwheeler, $insurance, $others);
        $stmt->execute();
        header("Location:generateupdatesuccess.php");
        $stmt->close();
        $con->close();
    }}
   
?>