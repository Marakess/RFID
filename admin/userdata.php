<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "HLF";
$dbname = "mitglieder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include '../charset.php'; 

$sql = "SELECT username FROM user WHERE username='$usr' AND password ='$pwd'";
$result = $conn->query($sql);


if (isset($_SESSION['login']))

if ($result->num_rows > 0) {
    // output data of each row
   
    while ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['login']="1";
        header ("Location: control.php");
        echo "Hallo". $row["usr"]. "Willkommen zurück!";
        
        
    }
} else {
        
        session_start();
        $_SESSION['login']="";
        echo "Falscher Nutzer/Passwort";
      
}
$conn->close();
