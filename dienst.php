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
        phpinfo();
        ?>

        <div class="container">
            <h1>Erfassung Anwesenheit</h1>
            <h2>Dienst</h2>
            <p>Anmeldung über RFID-Terminal</p>
        </div>

        <div class="container">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputDate" class="col-sm-2 control-label">Datum <em>[TT.MM.JJJJ]</em></label>
                    <div class="col-md-2">
                        <input type="date" name="inputDate" class="form-control" id="inputDate" placeholder="Datum">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-6">
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

                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-2-10">
                        <button type="submit" class="btn btn-default">Speichern</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container" >
            <h2>Führungskräfte</h2>         
            <table class="table">
                <thead>
                    <tr>
                        <th>Nachname</th>
                        <th>Vorname</th>
                        <th>Loginzeit</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>May</td>
                        <td>Michael</td>
                        <td>19:30:22</td>
                        <td>0x1234567</td>
                    </tr>
                    <tr>
                        <td>Kroll</td>
                        <td>Thomas</td>
                        <td>19:33:22</td>
                        <td>0x1234569</td>
                    </tr>
                    <tr>
                        <td>Schmid</td>
                        <td>Martin</td>
                        <td>19:45:22</td>
                        <td>0x9234567</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container" >
            <h2>Mannschaft</h2>         
            <table class="table">
                <thead>
                    <tr>
                        <th>Nachname</th>
                        <th>Vorname</th>
                        <th>Loginzeit</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kessler</td>
                        <td>Marcel</td>
                        <td>19:30:22</td>
                        <td>0x1234567</td>
                    </tr>
                    <tr>
                        <td>Fischer</td>
                        <td>Stefan</td>
                        <td>19:33:22</td>
                        <td>0x1234569</td>
                    </tr>
                    <tr>
                        <td>Lichtenberger</td>
                        <td>Sebastian</td>
                        <td>19:45:22</td>
                        <td>0x9234567</td>
                    </tr>
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




        </div>


















    </body>
</html>