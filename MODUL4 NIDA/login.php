<!doctype html>
<html lang="en">
<?php
session_start();
?>

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
                    <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php if (isset($_GET['notif']) and $_GET['notif'] == "success") {
        header("refresh:2;url=index.php");
    ?>
        <div class="bg-white pb-1">
            <div class="alert alert-warning">
                Berhasil login
            </div>
        </div>
    <?php } ?>

    <?php if (isset($_GET['notif']) and $_GET['notif'] == "failed") { ?>
        <div class="bg-white pb-1">
            <div class="alert alert-danger">
                Gagal login
            </div>
        </div>
    <?php } ?>


    <?php if (isset($_SESSION['notif'])) { ?>
        <div class="bg-white pb-1">
            <div class="alert alert-warning">
                <?= $_SESSION['notif']; ?>
            </div>
        </div>
        <?php unset($_SESSION['notif']); ?>
    <?php } ?>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center mt-2">
                    <h3>Login</h3>
                </li>
                <li class="list-group-item">
                    <form action="loginaksi.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_COOKIE['email'])) {
                                                                                                        echo $_COOKIE['email'];
                                                                                                    } ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                    echo $_COOKIE['password'];
                                                                                                                } ?>">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                            <p>Belum Punya Akun? <a href="register.php">Registrasi</a></p>
                        </div>

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>