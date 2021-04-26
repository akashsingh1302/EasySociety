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
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(isset($_POST["submit"])){
        $INSERT = "INSERT Into announcements(Date, Subject,Message) values(?, ?, ?)";
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("sss", $date, $subject, $message);
        $stmt->execute();
        header("Location:generatenoticesuccess.php");
        $stmt->close();
        $con->close();
    }}
   
?>