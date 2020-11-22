<?php
session_start();
session_unset();
$_SESSION['notif']='Berhasil logout';
    header("refresh:0;url=login.php");
?>