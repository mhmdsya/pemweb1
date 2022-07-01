<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemrograman WEB-Pertemuan 14</title>
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
  
  <div class="container" style="padding: 30px;">
    <h2>CRUD Tabel Mahasiswa</h2>
    <form action="action.php?aksi=tambah" class="needs-validation" novalidate method="post">
      
      <div class="form-group">
        <label for="uname">NIM:</label>
        <input type="text" class="form-control" id="nim" placeholder="Enter NIM" name="nim" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="uname">Nama:</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      
      <div class="form-group">
        <label for="uname">Nama Fakultas:</label>
        <select name="kode_fakultas" id="fakultas">
          <option disabled selected> Pilih Fakultas </option>

          <?php
          $no = 1;
          foreach($db->tampil_fakultas() as $x){
            ?>
            <tr>
              <option value="<?=$x['kode_fakultas']?>"><?=$x['nama_fakultas']?></option>
              <td>
              </td>
            </tr>
            <?php 
          }
          ?>
        </select>
      </div>  
      
      <div class="form-group">
        <label for="uname">Nama Jurusan:</label>
        <select name="kode_jurusan" id="jurusan">
          <option disabled selected> Pilih Jurusan </option>
          
          <?php
          $no = 1;
          foreach($db->tampil_jurusan() as $x){
            ?>
            <tr>
              <option value="<?=$x['kode_jurusan']?>"><?=$x['nama_jurusan']?></option>
              <td>
              </td>
            </tr>
            <?php 
          }
          ?>
        </select>
      </div>  

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>

  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

  <script>
    $('#dropdownMenuButton + [aria-labelledby="dropdownMenuButton"] a').on('click', function (e) {
      e.preventDefault();
      var ele = this;
      console.log(ele.textContent);
    })
  </script>
</body>
</html>
