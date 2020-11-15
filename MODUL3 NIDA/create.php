<?php
include ('config.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    
    $kategori = implode(",", $_POST['kategori']);
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = implode(",", $_POST['benefit']);


    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $temp = $_FILES['gambar']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
  
if(!in_array($ext,$ekstensi) ) {
    header("location:event.php?alert=gagal_ekstensi");
}else{
    $xx = $rand.'_'.$filename;
    $xx = basename($xx);
    $path = "gambar/$xx";
    move_uploaded_file($temp,$path);

    $query = "INSERT INTO event_tabel VALUES(NULL,'$name','$deskripsi','$xx','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";
            
    mysqli_query($conn, $query);

    header("location:home.php?alert=berhasil");
    } 
  }
?>