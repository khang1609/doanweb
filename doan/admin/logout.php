<?php 
if (!isset($_SESSION["nv"])) session_start();
unset($_SESSION['nv']);
header('location:login.php');
?>