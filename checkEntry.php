<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





// Create connection
$conn = new mysqli($servername, $username, $password, "dienste");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'charset.php'; 

$sql = "SELECT Nachname,Vorname FROM `" . $_SESSION["tableid"] . "` WHERE Nachname='$Nachname_found' AND Vorname='$Vorname_found'";

$result_check = $conn->query($sql);
//echo "$result_check->num_rows";

if ($result_check->num_rows > 0) {
    // output data of each row
     $entry_there = TRUE;
     echo "<script>errorINT = 0;</script>";
    
   
   
} elseif ($result_check->num_rows == 0) {
    $entry_there = FALSE;  
   
}
$conn->close();
