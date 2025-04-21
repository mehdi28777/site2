<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {


    header("Location: ../infoz.php");
}
else {
    header("Location: ../explain.php");
}
// SMS Config END