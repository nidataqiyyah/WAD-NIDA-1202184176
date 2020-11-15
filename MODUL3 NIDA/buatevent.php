<?php
include ('config.php');
$query = "SELECT * FROM event_tabel";
$select = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">

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

<div class="container mt-5">
    <h3 class="text-primary">Buat Event</h3>
</div>

<form action="create.php" method="POST" enctype="multipart/form-data">


<div class="container">
    <div class="row">
      <div class="col-sm mt-3">
        <div class="card">
          <div class="card-header bg-danger"> </div>
            <div class="card-body">
            <fieldset>
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Name</label>
                    <input type="name" class="form-control" id="name" name="name" >
                </div>

                <div class="form-group">
                    <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
                </div>
                
                <label for="gambar" class="font-weight-bold">Upload gambar</label>
                <div class="custom-file">
                    <input type="file" name="gambar" class="custom-file-input" id="gambar">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <fieldset class="form-group">
                  <label for="kategori" class="font-weight-bold mt-3">Kategori</label>
                    <div class="col">
                        <div class="form-check">
                            <div class="row">
                                <div class="col-2">
                                    <input class="form-check-input" type="radio" name="kategori[]" id="gridRadios1" value="Online" action="">
                                    <label class="form-check-label" for="online">Online</label>
                                </div>
                    
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="kategori[]" id="gridRadios2" value="Offline" action="">
                                    <label class="form-check-label" for="offline">Offline</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="mt-5"></div>

                </fieldset>
            </div>
        </div>
      </div>
      
      <div class="col-sm mt-3">
        <div class="card">
            <div class="card-header bg-primary"> </div>
            <div class="card-body">
            <fieldset>
                <div class="form-group">
                    <label for="tanggal" class="font-weight-bold">Tanggal</label>
                    <input class="form-control" type="date" name="tanggal" id="">
                </div>

                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="mulai" class="font-weight-bold">Jam Mulai</label> 
                    <input type="time" class="form-control" id="mulai" name="mulai">
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="berakhir" class="font-weight-bold">Jam Berakhir</label> 
                    <input type="time" class="form-control" id="berakhir" name="berakhir">
                    </select>
                </div>
                </div>                
                <div class="form-group">
                    <label for="tempat" class="font-weight-bold">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="form-group">
                    <label for="harga" class="font-weight-bold">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" >
                </div>
                <div>
                    <label for="benefit" class="font-weight-bold">Benefit</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="snack" value="snack" name="benefit[]" >
                    <label class="form-check-label font-weight-bold" for="snack">Snack</label>
                </div>
                <div class="form-check form-check-inline font-weight-bold">
                    <input class="form-check-input" type="checkbox" id="sertifikat" value="sertifikat" name="benefit[]">
                    <label class="form-check-label" for="sertifikat">Sertifikat</label>
                </div>
                <div class="form-check form-check-inline font-weight-bold">
                    <input class="form-check-input" type="checkbox" id="souvenir" value="souvenir" name="benefit[]">
                    <label class="form-check-label" for="souvenir">Souvenir</label>
                </div>
                
                <div>
                <ul class="nav justify-content-end">
                    <button class="btn btn-primary mr-2" name="submit" type="submit">Submit</button>
                    <button class="btn btn-danger mr-2" name="cancel" type="button">Cancel</button>
                </ul>
                </div>

                </fieldset>
    
 
            </div>
            </div>
    </div>
  </div>

  </form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>