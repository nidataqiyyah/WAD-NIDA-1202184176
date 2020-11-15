<?php
include ('config.php');
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>EAD EVENTS</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-white" href="#">EAD EVENTS</a>
    <div class=" justify-content-end collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link text-white" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a href="buatevent.php" role="button" class="btn btn-outline-light my-2 my-sm-0">Buat Event</a>
            </li>
        </ul>
    </div>
</nav>
<div class="text-center mt-3">
    <h3 class="text-primary">WELCOME TO EAD EVENTS!</h3>
</div>

<div class="row no-gutters">
<div class="container mt-5" >
    <div class="card-deck">
        <div class="col col-12">
            <?php
            $data = mysqli_query($conn,"select * from event_tabel");
            if(mysqli_num_rows($data) == 0) { ?>
                <div class="align-items-center">
                    <p >No Events Found</p>
                </div>
            <?php } ?>
        
        <div class="row">
            <?php while($tampil = mysqli_fetch_array($data)){ ?>         
                <div class="col-md-4" >
                    <div class="card card-home">
                        <img width="150" height="250" src="gambar/<?php echo $tampil['gambar'] ?>" class="card-img-top img-poster" alt="">
                        <div class="card-body">
                            <h3> <?php echo $tampil['name']; ?> </h3>
                            <p class="card-text" >
                                <p>- <?php echo $tampil['tanggal']; ?></p>
                                <p>- <?php echo $tampil['tempat']; ?></p>
                                <p> Kategori : Event <?php echo $tampil['kategori']; ?></p>
                            </p>
                        </div>
        
                        <div class="card-footer bg-transparent">
                            <a href="detail.php?id=<?= $tampil['id']; ?>" >
                            <p style="text-align: end;"><button type="button" class="btn btn-primary">Detail</button></p>
                            </a>
                        </div>

                    </div>
                </div>
            <?php } ?>
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