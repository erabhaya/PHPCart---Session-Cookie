<?php
session_start();

if (!isset($_SESSION['buy'])) {
    $_SESSION['buy'] = array();
}
$_SESSION['buy']=$_SESSION['cart'];
$_SESSION['cart']=array();


header('Location: ../buynow.php');
