<?php
session_start();

$detect = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


if ( $detect === 'en' ) {
    include('./includes/lang/en.php');
}
elseif  ( $detect === 'de' ) {
    include('./includes/lang/de.php');
}
elseif  ( $detect === 'ru' ) {
    include('./includes/lang/ru.php');
}
elseif  ( $detect === 'ar' ) {
    include('./includes/lang/ar.php');
}
elseif  ( $detect === 'ja' ) {
    include('./includes/lang/jp.php');
}
elseif  ( $detect === 'tr' ) {
    include('./includes/lang/tr.php');
}
elseif  ( $detect === 'fr' ) {
    include('./includes/lang/fr.php');
}
elseif  ( $detect === 'es' ) {
    include('./includes/lang/es.php');
}
elseif  ( $detect === 'it' ) {
    include('./includes/lang/it.php');
}
elseif  ( $detect === 'pt' ) {
    include('./includes/lang/pt.php');
}
elseif  ( $detect === 'et' ) {
    include('./includes/lang/et.php');
}
else {
    include('./includes/lang/en.php');
}
?>