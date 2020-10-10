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
          
          <li class="nav-item active">
            <a class="nav-link" href="booking.php">Booking</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
          <div class="col-sm mt-5">
            <form action="myBooking.php" method="GET">
                <div class="form-group">
                    <label for="exampleInputnama">Name</label>
                    <input type="text" class="form-control" id="exampleInputnama" name="nama" >
                </div>
                
                <div class="form-group">
                    <label for="date">Check-in</label>
                    <input class="form-control" type="date" name="date" id="">        
                </div>

                <div class="form-group">
                    <label for="inputdurasi">Duration</label>
                    <input type="number" id="inputdurasi" class="form-control" aria-describedby="durasihelp" name="durasi">
                    <small id="durasihelp" class="form-text text-muted">
                     Day(s)
                    </small>
                </div>

                <div class="form-group">
                    <label for="validationDefault04">Room Type</label>
                    <?php if (empty($_GET['tipe'])) {?>
                      <div>
                        <select class="custom-select" id="validationDefault04" name="tipe" value="tipe" required>
                          <option selected disabled value="Standard">Standard</option>
                          <option value="Superior">Superior</option>
                          <option value="Luxury">Luxury</option>
                        </select>
                      </div>
                    <?php }else{ ?>
                      <div> 
                        <input class="form-control" type="text" name="tipe" id="" value="<?php echo $_GET['tipe'];?> " readonly>
                    </div>
                    <?php } ?>                    
                </div>

                <div class="form-group">
                    <label for="inputServis">Add Service(s)</label>
                    <small id="durasihelp" class="form-text text-muted">
                        $ 20/Service
                    </small>
                </div>

                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox1" value="Room Service" name="servis[]" >
                    <label class="form-check-label" for="roomservice">
                      Room Service
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox2" value="Breakfast"  name="servis[]">
                    <label class="form-check-label" for="breakfast">
                      Breakfast
                    </label>
                </div>
                    
                <div class="form-group mt-3">
                    <label for="exampleInputno">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputno" name="no" value="">
                </div>

                <button class="btn btn-primary btn-block" type=>Book</button>
               
            </form>
        
        </div>
          <div class="col-sm mt-5"> 
            <?php if (empty($_GET['tipe'])) {?>
              <div class="d-flex justify-content-center align-item-center">
                  <img src="standard.jpg" class="img-fluid" alt="Responsive image">
              </div>
            
            <?php }else{ ?>
              <div> 
                <img src="<?php echo $_GET ['tipe'] ?>.jpg" width="500px" alt=""> 
              </div>
            <?php } ?> 
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