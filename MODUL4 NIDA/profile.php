<!doctype html>
<html lang="en">
<?php 
session_start();
if(!isset($_SESSION['loginTime'])){ 
	header( "refresh:0;url=login.php" );
}else{	
} ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <title>WAD Beauty</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-<?= $_COOKIE['warna'] ?>">
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
<?php if(isset($_GET['notif']) and $_GET['notif']=="success"){ ?>
	<div class="bg-white pb-1">
		<div class="alert alert-warning">
			Berhasil diperbaharui
		</div>	
	</div>
	<?php } ?>
	<?php if(isset($_GET['notif']) and $_GET['notif']=="failed"){ ?>
	<div class="bg-white pb-1">
		<div class="alert alert-danger">
			Berhasil diperbaharui
		</div>	
	</div>
	<?php } ?>
<div class="container mt-5 justify-content-center">
    <h1 class="text-center mb-3">Profile</h1>

<form action="profileaksi.php" method="POST">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['email']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label" id="nama" name="nama">Nama</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $_SESSION['nama']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="no_hp" class="col-sm-2 col-form-label" id="no_hp" name="no_hp">No. Handphone</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $_SESSION['no_hp']; ?>">
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <label for="pass" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input name="password" type="password" onchange="return confirm()" class="form-control" id="password">
        </div>
    </div>

    <div class="form-group row">
        <label for="kpass" class="col-sm-2 col-form-label">Password Confirm</label>
        <div class="col-sm-10">
        <input name="password2" type="password" onchange="return confirm()" class="form-control" id="kpassword" >
        </div>
    </div>

    <div class="form-group row">
        <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>
        <div class="col-sm-10">
            <select class="custom-select" name="warna" value="warna" >
            <option >pilih warna</option>
            <option <?php if($_COOKIE['warna']=="light"){echo "selected";}?> value="light">Light</option>
            <option <?php if($_COOKIE['warna']=="dark"){echo "selected";}?> value="dark">Dark</option>
            </select>
        </div>
    </div>
            <button class="btn btn-primary btn-block mt-3" type="submit" >Submit</button>
            <button class="btn btn-light btn-block" type="reset">Cancel</button>
</form>
</div>
<script>
	function confirm(){
		var password = $('#password').val();
		var kpassword = $('#kpassword').val();
		if(kpassword){
			if(password != kpassword){
				$('#notification').html(")*tidak sama");
				$('#notification').removeAttr("color").attr("color", "#A00");
				$('#submit').removeAttr("type").attr("type", "button");
			}else{
				$('#notification').html(")*sudah sama");
				$('#notification').removeAttr("color").attr("color", "#0A0");
				$('#submit').removeAttr("type").attr("type", "submit");
			}
		}
	}function v(){
		var password = $('#password').val();
		var kpassword = $('#kpassword').val();
		if(password != kpassword){
			alert("Password salah");
		}
	}
</script>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>