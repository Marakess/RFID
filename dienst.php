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
        <title>Einsatz</title>
    </head>
    <body>
        <?php
        phpinfo();
        ?>

        <div class="container-fluid">
            <h1>Erfassung Anwesenheit</h1>
            <h2>Dienst</h2>
            <p>Anmeldung über RFID-Terminal</p>
        </div>


        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputDate" class="col-sm-2 control-label">Datum <em>[TT.MM.JJJJ]</em></label>
                <div class="col-md-2">
                    <input type="date" class="form-control" id="inputDate" placeholder="Datum">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-md-4">
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="LZ1" checked> LZ 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="LZ2"> LZ 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="GF"> GF/ZF
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="MA"> Maschinisten
                    </label>
                     <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="SON"> Sonderdienst
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-md-2-10">
                <button type="submit" class="btn btn-default">Speichern</button>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col-md-10"><span class="label label-success">Marcel Kessler</span></div>















</body>
</html>