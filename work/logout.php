<?php 
session_start();
$_SESSION = [];
unset($_SESSION);
echo header('location:index.php');
?>