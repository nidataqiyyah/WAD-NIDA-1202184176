<?php 
include 'connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM `user` WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
	if(isset($_POST['remember'])){
		$cookie_name = 'email';
		$cookie_value = $email;
		setcookie($cookie_name, $cookie_value);
		$cookie_name = 'password';
		$cookie_value = $password;
		setcookie($cookie_name, $cookie_value);
	}
	while($d = mysqli_fetch_array($query)){
		$_SESSION['user_id'] = $d['id'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['no_hp'] = $d['no_hp'];
	}
	$_SESSION['email'] = $email;
	$_SESSION['loginTime'] = time();
	$_SESSION['nav'] = "Light";
	header( "refresh:0;url=login.php?notif=success" );
}else{
	header( "refresh:0;url=login.php?notif=failed" );
}
 
?>