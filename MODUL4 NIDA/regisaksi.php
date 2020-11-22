<?php 
include 'connect.php';
 
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
 
$query = mysqli_query($conn,"INSERT INTO `user`(`id`, `nama`, `email`, `no_hp`, `password`) VALUES ('','$nama','$email','$no_hp','$password')");
if($query){
	header( "refresh:0;url=register.php?notif=success" );
}else{
	header( "refresh:0;url=register.php?notif=failed" );
}
?>