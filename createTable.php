

<?php
$createtime = time();
$namestring = (string) $createtime;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "HLF";
$dbname = "dienste";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE `" . $namestring . "` (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nachname VARCHAR(30) ,
Vorname VARCHAR(30),
RFID VARCHAR(30),
Login VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table" . $createtime . "created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


