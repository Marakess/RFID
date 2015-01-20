<?php

$servername = "localhost";
$username = "root";
$password = "HLF";


// Create connection
if (strlen($rfid) >= 6) {
$conn = new mysqli($servername, $username, $password, "mitglieder");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Nachname,Vorname,RFID FROM erfassung WHERE RFID = '$rfid'";
$result = $conn->query($sql);

//aktuelle Uhrzeit für Loginreferenz
$timestamp2 = time();
$uhrzeit = date("H:i:s", $timestamp2);



if ($result->num_rows > 0) {
    // output data of each row
    $proceed = TRUE;
    while ($row = $result->fetch_assoc()) {
        $Nachname_found = $row["Nachname"];
        $Vorname_found = $row["Vorname"];
        $RFID_found = $row["RFID"];
        
    }
} else {
    
    $proceed = false;
}
$conn->close();



    


// Wenn mit der RFID ein Eintrag gefunden
if ($proceed) {
    include 'checkentry.php';
// Create connection
    $conn = new mysqli($servername, $username, $password, "dienste");
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if ($entry_there == FALSE) {
    $sql = "INSERT INTO `" . $_SESSION["tableid"] . "` (Nachname, Vorname, RFID, Login)
VALUES ('" . $Nachname_found . "','" . $Vorname_found . "','" . $RFID_found . "','" . $uhrzeit . "')";

    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();
    }
    else if ($entry_there == TRUE) {
        $conn->close();
        
    }
    
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

