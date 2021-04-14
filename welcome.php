<?php
session_start();
//include views
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$name = $_SESSION['name'];
define('CSSPATH', 'views/'); //define css path
$cssItem = 'style.css'; //css item to display
include "views/welcome.view.php";
?>