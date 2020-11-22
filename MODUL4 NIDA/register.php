<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>WAD Beauty</title>
    <style>
        body {
            background: #E0FFFF;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WAD Beauty</a>
        <div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php if (isset($_GET['notif']) and $_GET['notif'] == "success") { ?>
        <div class="bg-white pb-1">
            <div class="alert alert-warning">
                Berhasil registrasi
            </div>
        </div>
    <?php } ?>
    <?php if (isset($_GET['notif']) and $_GET['notif'] == "gagal") { ?>
        <div class="bg-white pb-1">
            <div class="alert alert-danger">
                Gagal registrasi
            </div>
        </div>
    <?php } ?>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">
                    <h3>Registrasi</h3>
                </li>
                <li class="list-group-item">

                    <form action="regisaksi.php" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No. Handphone">
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" onchange="return confirm()" class="form-control" id="password" name="password" placeholder="Buat Katasandi">
                        </div>
                        <div class="form-group">
                            <label for="kpassword"> Konfirmasi Kata Sandi</label>
                            <input type="password" onchange="return confirm()" class="form-control" id="kpassword" name="kpassword" placeholder="Konfirmasi Kata Sandi">
                        </div>
                        <div class="text-center">
                            <button onclick="return v()" type="submit" class="btn btn-primary" name="submit" id="submit">Daftar</button>
                            <p>Sudah punya akun?<a href="login.php">Login</a></p>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function confirm() {
            var password = $('#password').val();
            var kpassword = $('#kpassword').val();
            if (kpassword) {
                if (password != kpassword) {
                    $('#notification').html(")*tidak sama");
                    $('#notification').removeAttr("color").attr("color", "#A00");
                    $('#submit').removeAttr("type").attr("type", "button");
                } else {
                    $('#notification').html(")*sudah sama");
                    $('#notification').removeAttr("color").attr("color", "#0A0");
                    $('#submit').removeAttr("type").attr("type", "submit");
                }
            }
        }

        function v() {
            var password = $('#password').val();
            var kpassword = $('#kpassword').val();
            if (password != kpassword) {
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