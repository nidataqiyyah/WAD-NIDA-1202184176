<?php 
include 'connect.php';
session_start();
if($_GET['aksi']=="tambah"){
	$user_id = $_SESSION['user_id'];
	$nama_barang = $_GET['nama_barang'];
	$harga = $_GET['harga'];
	
	$query = mysqli_query($conn, "INSERT INTO `cart`(`id`, `user_id`, `nama_barang`, `harga`) VALUES ('', '$user_id', '$nama_barang', '$harga')");
	if($query){
		header( "refresh:0;url=index.php?notif=success" );
	}else{
		header( "refresh:0;url=index.php?notif=gagal" );
	}
}
if($_GET['aksi']=="hapus"){
	$id = $_GET['id'];
	$query = mysqli_query($conn, "DELETE FROM `cart` WHERE id='$id'");
	if($query){
		header( "refresh:0;url=cart.php?notif=success" );
	}else{
		header( "refresh:0;url=cart.php?notif=failed" );
	}
}
?>