<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "wad_modul3_nida";
    $dbpass = "";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        echo "<script>
                alert('koneksi gagal');
            </script>";
    }
?>