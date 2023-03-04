<?php
session_start();
echo $_SESSION['email'];
$ma = $_GET['mail'];
echo $ma;
?>