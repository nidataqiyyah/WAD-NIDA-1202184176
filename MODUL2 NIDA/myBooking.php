<?php
$nama = $_GET['nama'];
$date = $_GET['date'];

$durasi = $_GET['durasi'];
$tipe = $_GET['tipe'];
$servis = "no service";
$no = $_GET['no'];

$cekout = date('d/m/Y', strtotime($date . ' + '. $durasi .' days'));
$date = date('d/m/Y', strtotime($date));

if ($tipe == 'Standard') {
  $total=90*$durasi;
}elseif($tipe=='Superior'){
  $total=150*$durasi;
} else {
  $total=200*$durasi;
}

if(!empty($_GET['servis'])){
  $servis = $_GET['servis'];
  $totalservis = count($servis) *20;
  $total = $total+ $totalservis;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>EAD Hotel</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class=" justify-content-center collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="text-center">
    <div class="container mt-5">
      <table class="table">
        <thead>
          <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Room Type</th>
            <th>Phone Number</th>
            <th>Service</th>
            <th>Total Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><?= rand() ?></th>
            <td><?= $nama ?></td>
            <td><?= $date ?></td>
            <td><?= $cekout ?></td>
            <td><?= $tipe ?></td>
            <td><?= $no ?></td>
            <td>
              <?php
              if ($servis == "no service") {
                echo ($servis);
              } else {
                echo '<ul>';
                foreach ($servis as $value) {
                  echo '<li>'. $value . '</li>';
                }
                echo '</ul>';
              }
              ?>
            </td>
            <td><?= $total ?></td>
          </tr>
      </table>
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