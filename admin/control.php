<?PHP
session_start();


$usr = $pwd = "";


if (isset($_POST["usr"])) {
    $usr = test_input($_GET["usr"]);
    $pwd = test_input($_GET["pwd"]);

    echo $usr;
    echo $pwd;
    include 'userdata.php';
}





if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

  // header("Location: admin.php");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Control</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>



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

                <div class="col-lg-6">
                    Hier und so weiter...

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Startseite</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Suche</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stats"></span> Statistik</a></li>
                        <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-fire"></span> Admin</a></li>
                    </ul>
                </div>

            </div>

        </div>






    </body>
</html>
