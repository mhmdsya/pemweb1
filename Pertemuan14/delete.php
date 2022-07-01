<?php 
  include 'koneksi_delete.php';
  $id_mahasiswa= $_GET['nim'];
  $query = "DELETE from mahasiswa where nim ='$id_mahasiswa'";
  mysqli_query($koneksi, $query);
  echo "<script>alert('Data yang anda Hapus Sukses');window.location='tabel.php'</script>";

?>