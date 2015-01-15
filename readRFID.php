


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script>
   
document.onkeydown = function(event) {

  if ((event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 65 && event.keyCode <= 70)) {
    event.cancelBubble = true;
    event.returnValue = false;
    var taste = String.fromCharCode(event.keyCode);
    alert("Sie haben" + taste + "gedrückt");
  }
  return event.returnValue;
};
</script>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
