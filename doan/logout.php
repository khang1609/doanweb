<?php 
if (!isset($_SESSION["kh"])) session_start();
unset($_SESSION['kh']);
header('location:login.php');
?>