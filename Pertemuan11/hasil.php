<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemrograman WEB-Pertemuan 11</title>
  <style>
    * {
      font-family: 'Roboto Mono', monospace;
    }
    body {
      background-color: #541690;
    }
    .container {
      padding: 200px;
    }
    h1, h2, a {
      text-align: center;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
      $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
      $hari_ini = new DateTime('today');

      if($tanggal_lahir > $hari_ini){
        $thn = "0";
        $bln = "0";
        $tgl = "0";
      }
      
      $thn = $hari_ini->diff($tanggal_lahir)->y;
      $bln = $hari_ini->diff($tanggal_lahir)->m;
      $tgl = $hari_ini->diff($tanggal_lahir)->d;
      
      echo '<a href="http://localhost/pemweb1/Pertemuan11/index.html" target="_blank">Back To Menu</a>';
      echo "<h1> Usia anda saat ini adalah </h1>";
      echo "<h2> $thn tahun $bln bulan $tgl hari</h2>";
    ?>
  </div>
</body>
</html>