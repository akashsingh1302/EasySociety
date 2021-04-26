<?php

   require("dbconnection/db.php");
   $con=dbconnect();
   $conn=dbconnect();
    session_start();
$i=0;
    if(!(isset($_SESSION['username'])))
    {
        echo "<center><h3><script>alert('Something went wrong!');</script></h3></center>";
    echo "<script>setTimeout(\"location.href = 'adminlogin.php';\",1500);</script>";    
}
    
        $wing = $_POST['wing'];
        $flatno = $_POST['flatno'];
        $flat = $wing."-".$flatno;
        $owner = $_POST['owner'];
        $members = $_POST['members'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $area = $_POST['area'];
        $twowheeler = $_POST['2wheeler'];
        $fourwheeler = $_POST['4wheeler'];
        $dues = $_POST['r_dues'];
        $contact = $_POST['phoneno'];
        $email = $_POST['email'];

        echo $flat,$owner,$members,$username,$pass,$area,$twowheeler,$fourwheeler,$dues,$contact,$email;

        if(isset($_POST["submit"])){
            $sql = "SELECT * FROM housingmembers";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                echo "Enter";
             // output data of each row
            while($row = $result->fetch_assoc()) {
            if($row['Username']== $username ||  $row['FlatAddress']== $flat){
                $i=1;
            }
        }
    }
}
echo $i;
if ($i==0){
            echo "Enter";    
            $INSERT1 = "INSERT into housingmembers(FlatAddress, FlatOwner, ContactNo, Email, No_of_House_Members, Username, Password) values(?, ?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($INSERT1);
            $stmt->bind_param("ssssdss", $flat, $owner, $contact, $email, $members, $username, $pass);
            $stmt->execute();
            $stmt->close();
          

            $INSERT2 = 'INSERT INTO flat_and_parking_details values(?,?,?,?,?)';
            $stmt2 = $con->prepare($INSERT2);
            $stmt2 -> bind_param('sdsdd', $flat, $area, $owner, $twowheeler, $fourwheeler);
            $stmt2 ->execute();
       
            $stmt2 ->close();

            $INSERT3 = 'INSERT INTO remainingbills values(?,?)';
            $stmt3 = $con->prepare($INSERT3);
            $stmt3 -> bind_param('sd', $flat, $dues);
            $stmt3 ->execute();
 
            $stmt3 ->close();

            header("Location:addmemberssuccess.php");
            $con->close();
        }
        else{
            echo "<center><h3><script>alert('Flat or Username is repeated. Please try again!');</script></h3></center>";
            echo "<script>setTimeout(\"location.href = 'layout backup/add_members.html';\",1500);</script>"; 
        }
       
    ?>