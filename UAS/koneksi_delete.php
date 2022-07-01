<?php 

  $host = "localhost";
  $uname = "root";
  $pass = "";
  $dbname = "genap";
  $koneksi = mysqli_connect($host,$uname,$pass,$dbname);

  if(!$koneksi){
    die ("Koneksi database gagal: ".mysqli_connect_errno().
    " - ".mysqli_connect_error());
  }

?>