<!doctype html>
<html lang="en">
<?php 
session_start();
if(!isset($_SESSION['loginTime'])){ 
	header( "refresh:0;url=login.php" );
}else{	
} 
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <title>WAD Beauty</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">WAD Beauty</a>
    <div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="cart.php">Selamat Datang, <font color="blue"><?= $_SESSION['nama']; ?></font></a>
            </li>
            <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
        </li>   
    </ul>
</div>
</nav>

<?php if(isset($_GET['notif']) and $_GET['notif']=="success"){ 
	?>
		<div class="alert alert-warning">
			berhasil dihapus
		</div>	
	<?php } ?>
	<?php if(isset($_GET['notif']) and $_GET['notif']=="failed"){ 
	?>
		<div class="alert alert-danger">
			gagal dihapus
		</div>	
	<?php } ?>

  
<div class="container mt-5 d-flex justify-content-center">
<table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
	include 'connect.php';
	$user_id = $_SESSION['user_id'];
	$query = mysqli_query($conn,"SELECT * FROM `cart` WHERE user_id='$user_id'");
	$no=1;
	$total=0;
	while($d = mysqli_fetch_array($query)){
    $total+=$d['harga'];
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama_barang'] ?></td>
        <td>Rp. <?= number_format($d['harga']) ?></td>
        <td><a href="cartaksi.php?aksi=hapus&id=<?= $d['id'] ?>" class="btn btn-danger">Hapus</a></td>
    </tr>
    <?php } ?>
  </tbody>
  <thead>
    <tr>
    <th>Total</th>
    <th ></th>
    <th scope="col">Rp. <?= number_format($total) ?></th>
    <th ></th>
    </tr>
</thead>
</div>
</table>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>