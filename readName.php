<?php


$servername = "localhost";
$username = "root";
$password = "HLF";


// Create connection
$conn = new mysqli($servername, $username, $password, "mitglieder");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Nachname,Vorname,RFID FROM erfassung WHERE RFID = $rfid";
$result = $conn->query($sql);

//aktuelle Uhrzeit für Loginreferenz
$timestamp2 = time();
$uhrzeit = date("H:i:s",$timestamp2);



if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $Nachname_found = $row["Nachname"];
        $Vorname_found = $row["Vorname"];  
        $RFID_found = $row["RFID"];
    }
} else {
    echo "0 results";
}
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, "dienste");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `".$tableid."` (Nachname, Vorname, RFID, Login)
VALUES ('".$Nachname_found."','".$Vorname_found."','".$RFID_found."','".$uhrzeit."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

