<?php
    include ('config.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM event_tabel WHERE id = $id";
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
<div class="text-center mt-3">
    <h3 class="text-primary">Detail Events!</h3>
</div>

<div class="container mt-5 d-flex justify-content-center">
    <div class="col-6">
        <div class="card mb-3">
            <?php 
            $id = $_GET['id'];
            $data = mysqli_query($conn,"select * from event_tabel where id=$id");
            while($tampil = mysqli_fetch_array($data)){
            ?>
            <img src="gambar/<?php echo $tampil['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title"><?php echo $tampil['name']; ?></h5>
                    <p class="card-text font-weight-bold">Deskripsi</p>
                    <p class="card-text "> <?php echo $tampil['deskripsi']; ?></p>
                    
            <div class="row">
                <div class="col">
                    <p class="card-text font-weight-bold">Informasi Event</p>
                        <p class="card-text ">- <?php echo $tampil['tanggal']; ?></p>
                        <p class="card-text ">- <?php echo $tampil['tempat']; ?></p>
                        <p class="card-text">- <?php echo $tampil['mulai'] ?> - <?php echo $tampil['berakhir']; ?></p>
                    
                    <p class="card-text font-weight-bold">Kategori: <?php echo $tampil['kategori']; ?></p>
                    
                    <p class="card-text font-weight-bold">HTM Rp. <?php echo $tampil['harga']; ?></p></div>

                <div class="col">
                    <p class="card-text font-weight-bold">Benefit</p>
                        <ul>
                            <li><?php echo $tampil['benefit']; ?> </li>
                        </ul>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <p class="card-text d-flex justify-content-center">
            <?php 
            $id = $_GET['id'];
            $data = mysqli_query($conn,"select * from event_tabel where id='$id'");
            while($tampil = mysqli_fetch_assoc($data)){
            $benefit = explode(",", $tampil['benefit']);
            ?>
            
            <button type="button" class="btn btn-primary mr-sm-2" tabindex="0" data-toggle="modal" data-target="#modalform">Edit</button>
            <a href="delete.php?id=<?= $tampil['id']; ?>">
            <button type="button" class="btn btn-danger mr-sm-2">Delete</button>
            </a>
        </div>
        </div>
        
        <div class="modal fade" id="modalform">
            <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Edit Content Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>

                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-sm">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header bg-danger"></div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="name" class="form-control" id="name" name="name" value="<?php echo $tampil['name']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>                                                                    
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" value="deskripsi" action="" rows="4"><?php echo $tampil['deskripsi']; ?></textarea>                                                                   
                                        </div>

                                        <div class="form-group">
                                            <label for="gambar">Upload Gambar</label>
                                            <div class="custom-file" style="margin-top:1px;">
                                                <label class="custom-file-label" for="customFile"></label>
                                                <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" value="<?php echo $tampil['gambar']; ?>">
                                                </div>
                                        </div>
                                        
                                        <fieldset class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <div class="col">
                                                <div class="form-check">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <input <?php echo ($tampil['kategori'] == 'Online') ? 'checked' : '' ?>  class="form-check-input" type="radio" name="kategori[]" id="gridRadios1" value="Online" action="" >
                                                            <label class="form-check-label" for="online">Online</label>
                                                        </div>

                                                        <div class="col">
                                                            <input <?php echo ($tampil['kategori'] == 'Offline') ? 'checked' : '' ?> class="form-check-input" type="radio" name="kategori[]" id="gridRadios2" value="Offline" action="">
                                                            <label class="form-check-label" for="offline">Offline</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header bg-primary"></div>
                                    <div class="card-body">
                                        <div class="form-group ">
                                            <label for="tanggal">Tanggal</label>
                                            <input class="form-control" type="date" id="" name="tanggal" value="<?php echo $tampil['tanggal']; ?>">
                                        </div>

                                        <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="mulai" >Jam Mulai</label> 
                    <input type="time" class="form-control" id="mulai" name="mulai" value="<?= $tampil['mulai'] ?>">
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="berakhir" >Jam Berakhir</label> 
                    <input type="time" class="form-control" id="berakhir" name="berakhir" value="<?= $tampil['berakhir'] ?>">
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <label for="tempat" class="font-weight-bold">Tempat</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $tampil['tempat']; ?>">
                </div>
                <div class="form-group">
                    <label for="harga" class="font-weight-bold">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $tampil['harga']; ?>" >
                </div>

                                                
                <div>
                    <label for="benefit" class="font-weight-bold">Benefit</label>
                </div>

                <div class="form-check form-check-inline">
                    <input <?php if (in_array("snack",$benefit)) : ?> checked  <?php endif; ?> class="form-check-input" type="checkbox" id="snack" value="snack" name="benefit[]" >
                    <label class="form-check-label font-weight-bold" for="snack">Snack</label>
                </div>
                <div class="form-check form-check-inline font-weight-bold">
                    <input <?php if (in_array("sertifikat",$benefit)) : ?> checked  <?php endif; ?> class="form-check-input" type="checkbox" id="sertifikat" value="sertifikat" name="benefit[]">
                    <label class="form-check-label" for="sertifikat">Sertifikat</label>
                </div>
                <div class="form-check form-check-inline font-weight-bold">
                    <input <?php if (in_array("souvenir",$benefit)) : ?> checked  <?php endif; ?> class="form-check-input" type="checkbox" id="souvenir" value="souvenir" name="benefit[]">
                    <label class="form-check-label" for="souvenir">Souvenir</label>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal-footer">
    <a href="home.php" role="button" class="justify-content-end btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>                  
</div>
</div>
</div>
</div>
<?php 
}
?>
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