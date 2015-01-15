<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script>
    createTable(){
<?php include "createTable.php"; 
$_SESSION["tableid"] = $namestring;
?>
    }

</script>



<html>
    <head>
        <title>Startseite</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>


        <div id="tablecreate"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"><h1>Erfassung <small>Einsatz/Dienst</small></h1></div>
                <div class="col-sm-4"><p></p></div>
                <div class="col-sm-4"><p></p></div>

            </div>
            <div class="row">
                <div class="col-sm-4"><h3>Abt. Stadtmitte</h3></div>
                <div class="col-sm-4"><p></p></div>
                <div class="col-sm-4"><p></p></div>

            </div>


            <div class="row">
                <div class="col-lg-4"><a href='einsatz.php'   class='btn btn-danger btn-lg btn-block' role='button'>Einsatz (not working)</a></div>
                <div class="col-lg-4"><a  href='dienst.php?rfid=' onclick="createTable()" class="btn btn-warning btn-lg btn-block">Dienst (beta)</a></div>
                <div class="col-lg-4"><button type="button" class="btn btn-primary btn-lg btn-block">Sonstiges (not working)</button></div>

            </div>



        </div>



    </body>
</html>

