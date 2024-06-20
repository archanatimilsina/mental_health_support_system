<?php 
session_start();
unset($_SESSION['userpanel']['email']);
echo header('location:index.php');
?>