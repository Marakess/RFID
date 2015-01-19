<?php
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
        <title>Manuelle Eingabe</title>

    </head>

    <body onload="reloadMother();
            giveFeedback(feedback);">
        <script>var feedback = 1;</script>

        <div class="container">
            <h2>Manuelle Eingabe</h2>
            <form role="form" class="form-horizontal" method="get">
                <div class="form-group">
                    <label class="control-label col-md-2" for="nn">Nachname</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nn" name="nachname" placeholder="Nachnamen eingeben">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="vn">Vorname</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="vn" name="vorname" placeholder="Vornamen eingeben">
                    </div>
                </div>
                <button type="submit" class="btn btn-default" onclick="addUser()"><span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span> Hinzufügen</button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 id="ergebnis"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="button" id="okButton" onclick="window.close();" class="btn btn-danger"> Schließen</button>
                </div>
            </div>

        </div>

        <?php
        if (strlen($_GET["nachname"]) > 0) {
            include 'readManual.php';
        }
        ?>

        <script>
        


            function addUser() {
                reloadMother();


            }
            function reloadMother() {
                opener.location.replace("dienst.php?rfid=");

            }
            function giveFeedback(feedback) {
                if (feedback == 2) {
                    document.getElementById("ergebnis").innerHTML = "Eintrag gefunden und hinzugefügt!";
                }
                else if (feedback == 3) {
                    document.getElementById("ergebnis").innerHTML = "Kein Eintrag gefunden!";
                }
                else if (feedback == 1){
                    document.getElementById("ergebnis").innerHTML = "Erwarte Eingabe";
                }
            }

            function activateButton() {
                document.getElementById("okButton").removeAttribute("disabled");
                document.getElementById("okButton").setAttribute("enabled");

            }

        </script>

    </body>
</html>
