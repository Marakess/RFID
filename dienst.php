<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>


    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>Dienst Abt. Stadtmitte</title>
    </head>
    <body>

        <?php
        $tableid = $_GET['idtable'];

        $rfid = $_GET['rfid'];
        if (strlen($rfid >= 6)) {
            include 'readName.php';
        }
        echo strlen($rfid);
        ?>




        <div class="container">
            <div class ="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <img src="pictures/schriftzug.gif" align="right" alt="Logo" width="200" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h1>Anwesenheit <small>Dienst</small></h1>
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-1"><h4>Datum:</h4></div>
                <div class="col-md-1"><h4> <?php
        $timestamp = time();
        $datum = date("d.m.Y", $timestamp);
        echo $datum;
        ?></h4></div>
            </div>

            <form class="form-horizontal">


                <div class="form-group">
                    <div class="col-md-6">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="LZ1" checked>LZ 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="LZ2">LZ 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="GF">GF/ZF
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="MA">Maschinisten
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="SON">Sonderdienst
                        </label>
                    </div>
                </div>


        </div>
    </form>
</div>

<div class="container" >
    <h3>Mannschaft</h3>         
    <table class="table table-bordered table-condensed" id="mannschaft">
        <thead>
            <tr>
                <th>Nachname</th>
                <th>Vorname</th>
                <th>ID</th>
                <th>Loginzeit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //if (strlen($rfid >= 6)) {
                include 'readTable.php';
            //}
            ?>
        </tbody>
    </table>
</div>

<div class="container">
    <div class="row">


        <div class="col-md-2"> <a href="#" onclick="print();" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-print"></span> Drucken 
            </a></div>
        <div class="col-md-2"><a href="#"  class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-user"></span> Manuell 
            </a></div>
        <div class="col-md-10"></div>


    </div>

    <form action="dienst.php" method="get">
        <p>RFID: <input type="text" name="rfid" /></p>
        <p> <input type="text" value="<?php echo $tableid ?>" name="idtable"></p>
        <p><input type="submit" /></p>
    </form>


</div>
</body>



















</html>