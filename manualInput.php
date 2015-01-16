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

    <body>

        <div class="container">
            <h2>Manuelle Eingabe</h2>
            <form role="form" class="form-horizontal" method="post">
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
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span>Hinzufügen</button>
            </form>

        </div>
        <?php
        if (strlen($_POST["nachname"])> 0)
            {
            echo $_POST["nachname"].$_POST["vorname"];
            }
        
        ?>
    </body>
</html>
