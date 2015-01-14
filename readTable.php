<?php

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
$sql = "SELECT Nachname,Vorname,RFID FROM `".$tableid."`";
$result = $conn->query($sql);

//aktuelle Uhrzeit für Loginreferenz


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Nachname"] . "</td>" . "<td>" . $row["Vorname"] . "</td>" .  "<td>" . $row["RFID"] . "</td>" . "<td>" . $uhrzeit . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();