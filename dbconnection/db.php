<?php
function dbconnect(){
  //$servername = "localhost";
  //$username = "root";
  //$password = "";
  //$db = "easysociety";
  
  $servername = "remotemysql.com";
  $username = "6hd1LFHScJ";
  $password = "DJ2EHdd6jZ";
  $db = "6hd1LFHScJ";
  $conn = mysqli_connect($servername, $username, $password, $db);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    return $conn;
  }
}
?>
