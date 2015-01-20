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



<html onclick="getFocus()">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>Dienst Abt. Stadtmitte</title>
    </head>
    <body onload="errorHandling(errorINT);">
        <script> var errorINT = 99;</script>
        <?php
        $rfid = $_GET['rfid'];

        include 'readName.php';
        
        ?>

        <div class="container">
            <div class ="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <img src="pictures/schriftzug.gif" align="right" alt="Logo" width="300" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h1>Anwesenheit <small>Dienst</small></h1>
                </div>
                <div class="col-md-4">
                    <form action="dienst.php" method="get">
                        <p>TagCode <input  type="text" name="rfid" autofocus="autofocus" id="demorfid" onblur="getFocus()"/></p>
                        <p>TableID <?php echo $_SESSION["tableid"]; ?></p>

                    </form>

                </div>
            </div>

        </div>

        <div class="container">
            <div class="row" >
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
                    include 'readTable.php';
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <div class="row">


                <div class="col-md-1"> <a href="#" onclick="print();" class="btn btn-success">
                        <span class="glyphicon glyphicon-print"></span> Drucken 
                    </a></div>
                <div class="col-md-1"><a href="#" onclick="openWindowfixed('manualInput.php?nachname=')"  class="btn btn-primary" >
                        <span class="glyphicon glyphicon-user"></span> Manuell 
                    </a></div>
                <div class="col-md-1"><a href="index.php" class="btn btn-danger" onclick="closeSession()" >
                        <span class="glyphicon glyphicon-remove"></span> Beenden 
                    </a></div>
                    
                <div class="col-md-2"><p id="output"></p></div>
                    
                </div>
            </div>

       

        <script>
            
            
                    function getFocus() {
                        document.getElementById("demorfid").focus();
                    }

            function openWindowfixed(name) {
                window.open(name, 'Manuelle Eingabe', 'height=400,width=500,toolbar=0,location=0,menubar=0,resizable=0,scrollbars').focus();
                return false;
            }

            function errorHandling(errorINT) {
                var errorString = "";
                switch (errorINT) {
                    case 0: //Eintrag bereits vorhanden
                        errorString = "Eintrag bereits vorhanden";
                        window.alert("Eintrag bereits vorhanden");
      
                        break;

                    case 99:
                        errorString = "Alles gut"
                        
                        break;
                    default:
                        errorString = "Fehler. Kontaktieren Sie den Admin";
                       
                        break;
                }


                return errorString;
            }

            function closeSession();
            {
                <?php $session_stop()?>
            }
        </script>

    </body>

</html>