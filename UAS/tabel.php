<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Berhasil di Input</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php 
    include 'database.php';
    $db = new database();
  ?>

  <div class="container" style="padding:30px;">
    <h2>Data Berhasil Diinput</h2>
    <p>Klik Kembali Untuk Menginput Ulang:</p>
    <a href="bootstrap.php">Kembali</a>            
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>tanggal_lahir</th>
          <th>Nama Fakultas</th>
          <th>Nama Jurusan</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
      </thead>

      <tbody>
        <?php
          $no = 1;
          foreach($db->tampil_data() as $x){
          ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $x['nim']; ?></td>
              <td><?php echo $x['nama']; ?></td>
              <td><?php echo date('d F Y ',strtotime($x['tanggal_lahir'])); ?></td>
              <td><?php echo $x['nama_fakultas']; ?></td>
              <td><?php echo $x['nama_jurusan']; ?></td>
              <td>
                <a href="edit.php?nim=<?php echo $x['nim']; ?>">Edit</a>
              </td>
              <td>
                <a href="delete.php?nim=<?php echo $x['nim']; ?>">Hapus</a>
              </td>
            </tr>
          <?php
          $no++;
          }
        ?>
      </tbody>
    </table>  
  </div>
</body>
</html>