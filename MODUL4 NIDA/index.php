<?php 
session_start();
if(!isset($_SESSION['loginTime'])){ 
	header( "refresh:0;url=login.php" );
}else{	
} ?>
<!doctype html>
<html lang="en">

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
			Berhasil ditambahkan
		</div>	
	<?php } ?>
	<?php if(isset($_GET['notif']) and $_GET['notif']=="failed"){ 
	?>
		<div class="alert alert-danger">
			Gagal ditambahkan
		</div>
	<?php } ?>   
<div class="container mt-3 d-flex justify-content-center">
<div class="card text-center" style="width: 60rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h1>WAD Beauty</h1>
    <p>Tersedia Skincare dengan Harga Murah tetapi Tidak Murahan dan Berkualitas</p>
    </li>

    <div class="card-group">
        <div class="card">
            <img src="cleanser.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">The Ordinary Squalane Cleanser</h5>
            <p class="card-text text-left">
            Produk pembersih yang lembut diformulasikan untuk menargetkan penghapusan riasan sementara membuat kulit terasa halus dan lembab. Formula ini menggabungkan Squalane, bersama dengan ester lipofilik lainnya yang lembut, melembabkan, efisien dalam melarutkan riasan dan kotoran wajah serta meningkatkan daya sebar produk.
            </p>     
            <hr>   
            <p class="font-weight-bold">Rp. 100.000 </p>
        </div>
        <div class="card-footer bg-light">
        <td><a href="cartaksi.php?aksi=tambah&nama_barang=The%20Ordinary%20Squalane%20Cleanser&harga=100000" role="button" class="card-link btn btn-primary" role="button">Tambah ke Keranjang</a>
        </td>
        </div>
    </div>

  
  <div class="card">
    <img src="serum.png" class="card-img-top" alt="...">

    <div class="card-body">
      <h5 class="card-title">The Ordinary Niacinamide</h5>
        <p class="card-text text-left">
        Merupakan serum yang mampu dapat mengurangi produksi melanin pada kulit sehingga bisa mencerahkan kulit dan mengurangi noda hitam.Selain itu, niacinamide juga mampu mengurangi penyumbatan pada pori sehingga pori tampak mengecil, lebih bersih dan terbebas dari jerawat juga komedo. Belum lagi kemampuannya untuk merangsang kolagen sehingga sangat baik juga sebagai bahan anti-aging.
        </p>     
      <hr>   
        <p class="font-weight-bold">Rp. 150.000 </p>
    </div>
      <div class="card-footer bg-light">
        <td><a href="cartaksi.php?aksi=tambah&nama_barang=The%20Ordinary%20Niacinamide&harga=150000" role="button" class="card-link btn btn-primary" role="button">Tambah ke Keranjang</a></td>
      </div>
  </div>

  <div class="card">
    <img src="toner.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">The Ordinary Glycolic Acid 7% Toning Solution</h5>
      <p class="card-text text-left">
      Merupakan toner yang dapat digunakan untuk mild exfoliation. Dapat membuat kulit terlihat lebih cerah dan memperbaiki tekstur kulit jika dipakai secara berkelanjutan. Mengandung Tasmanian Pepperberry yang dapat membantu mengurangi iritasi kulit saat penggunaan acid. Tidak dianjurkan digunakan untuk kulit yang sensitif atau bermasalah.
      </p>     
        <hr>   
        <p class="font-weight-bold">Rp. 200.000 </p>
    </div>
    <div class="card-footer bg-light">
    <td><a href="cartaksi.php?aksi=tambah&nama_barang=The%20Ordinary%20Glycolic%20Acid%207%%20Toning%20Solution&harga=200000" role="button" class="card-link btn btn-primary" role="button">Tambah ke Keranjang</a></td>
    </div>
  </div>
</div>
</div>
</div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
