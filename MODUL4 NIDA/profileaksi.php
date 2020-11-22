<?php 
include 'connect.php';
session_start();

$id = $_SESSION['user_id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['no_hp'] = $_POST['no_hp'];
$cookie_name = 'warna';
$cookie_value = $_POST['warna'];;
setcookie($cookie_name, $cookie_value);
 
$query = mysqli_query($conn,"UPDATE `user` SET `nama`='$nama',`no_hp`='$no_hp',`password`='$password' WHERE `id`='$id'");
if($query){
	header( "refresh:0;url=profile.php?notif=success" );
}else{
	header( "refresh:0;url=profile.php?notif=failed" );
}
?>