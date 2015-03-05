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
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>Dienst Abt. Stadtmitte</title>
    </head>
    <body onload="errorHandling(errorINT);">
        <script>
            function getFocus() {
                setTimeout(function () {
                    document.getElementById("eingabeRFID").focus();
                }, 0);

            }
            var errorINT = 99;</script>
        <?php
        if (isset($_GET['rfid'])) {

            $rfid = $_GET['rfid'];
        } else {
            $rfid = '';
        }

        if (isset($_POST['dienstart'])) {

            $_SESSION["dienstart_sess"] = $_POST['dienstart'];
        }


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
                    <form action="dienst.php" method="get" >
                        <p>TagCode <input  type="text" name="rfid" autofocus id="eingabeRFID" onblur="getFocus()"/></p>
                    </form>
                    <p>TableID  <?php echo $_SESSION["tableid"]; ?></p>

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
            <div class="row" >
                <div class="col-md-1"><h4>Dienst:</h4></div>
                <div class="col-md-3"><h4 id="dienstausgabe"><?php
                        if (isset($_SESSION["dienstart_sess"])) {
                            echo $_SESSION["dienstart_sess"];
                        }
                        ?></h4></div>


            </div>



            <form class="form-horizontal" method="POST">


                <div class="form-group">
                    <div class="col-md-6">
                        <label class="radio-inline">
                            <input type="radio" name="dienstart" id="inlineRadio1" value="Löschzug 1" onclick="submit()">LZ 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="dienstart" id="inlineRadio2" value="Löschzug 2" onclick="submit()">LZ 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="dienstart" id="inlineRadio3" value="Zug- und Gruppenführer" onclick="submit()">GF/ZF
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="dienstart" id="inlineRadio4" value="Maschinisten" onclick="submit()">Maschinisten
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="dienstart" id="inlineRadio5" value="Sonderdienst" onclick="submit()">Sonderdienst
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
                <div class="col-md-1"><button type="button" onclick="window.open('manualInput.php?nachname=', 'newwindow', config = 'height=400,width=500, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, directories=no, status=no')"  class="btn btn-primary" >
                        <span class="glyphicon glyphicon-user"></span> Manuell</button> 
                </div>
                <div class="col-md-1"><a href="index.php" class="btn btn-danger" onclick="closeSession()" >
                        <span class="glyphicon glyphicon-remove"></span> Beenden 
                    </a></div>

                <div class="col-md-2"><p id="output"></p></div>

            </div>
        </div>



        <script>


            function openWindowfixed(name) {
                window.open(name, 'Manuelle Eingabe', 'height=400,width=500,toolbar=0,location=0,menubar=0,resizable=0,scrollbars');
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
<?php $session_stop() ?>
            }
        </script>

    </body>

</html>