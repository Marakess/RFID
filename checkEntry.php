<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "HLF";
$tablename = $_SESSION["tableid"];


$vorname = $_GET["vorname"];
$nachname = $_GET["nachname"];


// Create connection
$conn = new mysqli($servername, $username, $password, $tablename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Nachname,Vorname FROM `" . $tablename . "` WHERE Nachname='$nachname' AND Vorname ='$vorname'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    static $entry_there = TRUE;
} else {
   
    static $entry_there = FALSE;
}
$conn->close();
