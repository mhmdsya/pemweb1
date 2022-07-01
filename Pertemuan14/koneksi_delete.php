<?php 

  $host = "localhost";
  $uname = "root";
  $pass = "";
  $dbname = "tgs_pert_14";
  $koneksi = mysqli_connect($host,$uname,$pass,$dbname);

  if(!$koneksi){
    die ("Koneksi database gagal: ".mysqli_connect_errno().
    " - ".mysqli_connect_error());
  }

?>