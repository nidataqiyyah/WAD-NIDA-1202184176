<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id=$_GET['id'];
// query SQL untuk insert data
$query="DELETE from event_tabel where id='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:home.php");
?>