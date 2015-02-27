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

        <script>
            function createTable() {
<?php
include "createTable.php";
$_SESSION["tableid"] = $namestring;
?>
            }

        </script>

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

                
                <div class="col-lg-3"><a href='einsatz.php'   class="btn btn-lg btn-danger btn-block disabled" role='button'>Einsatz</a></div>
                <div class="col-lg-3"><a  href='dienst.php' onclick="createTable()" class="btn btn-lg btn-warning btn-block">Dienst</a></div>
                <div class="col-lg-3"><button type="button" class="btn btn-lg btn-primary btn-block disabled">Sonstiges</button></div>
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Startseite</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Suche</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Statistik</a></li>
                        <li><a href="admin/admin.php"><span class="glyphicon glyphicon-fire"></span> Admin</a></li>
                    </ul>
                </div>

            </div>

        </div>

 
</body>
</html>

