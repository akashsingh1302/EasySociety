<?php

   require("dbconnection/db.php");
   $con=dbconnect();
    session_start();
    $i=0;
    if(!(isset($_SESSION['username'])))
    {
        echo "<center><h3><script>alert('Something went wrong!');</script></h3></center>";
    echo "<script>setTimeout(\"location.href = 'adminlogin.php';\",1500);</script>";    
}
    
    else{
    $date = $_POST['date'];
    $name = $_POST['visitor_name'];
    $contact=$_POST['visitor_contact'];
    $flat=$_POST["flataddress"];

    if(isset($_POST["submit"])){
        $SELECT = "SELECT * FROM housingmembers";
        $result = $con->query($SELECT);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               
                if($row['FlatAddress']==$flat){
            $i=1;
                break;
                }
            }
        }
    if($i==1){
        $INSERT = "INSERT Into visitors(Date, VisitorName, VisitorContact, FlatAddress) values(?,?, ?, ?)";
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("ssds", $date, $name, $contact, $flat);
        $stmt->execute();
        header("Location:addvisitorsuccess.php");
        $stmt->close();
        $con->close();
    }
    else{
        echo "<center><h3><script>alert('The flat does not exist!');</script></h3></center>";
        echo "<script>setTimeout(\"location.href = 'layout backup/add_visitors.html';\",1500);</script>"; 
    }
    }}
   
?>