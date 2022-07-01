<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD Tabel Mahasiswa</title>
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
    <h2>Form Edit Data Mahasiswa</h2>
    <form action="action.php?aksi=edit" class="needs-validation" novalidate method="post">
      <div class="form-group">
        <input value="<?php echo $db->dataDetail()['nim']; ?>" type="hidden" class="form-control" id="nim" placeholder="Enter NIM" name="nim" required >
      </div>

      <div class="form-group">
        <label for="uname">Nama:</label>
        <input value="<?php echo $db->dataDetail()['nama']; ?>" type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="uname">Tanggal Lahir:</label>
        <input value="<?php echo $db->dataDetail()['tanggal_lahir']; ?>" type="date" class="form-control" id="tanggal_lahirtanggal_lahir" placeholder="Enter Tanggal Lahir" name="tanggal_lahir" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      
      <div class="form-group">
        <label for="uname">Kode Fakultas:</label>
        <select name="kode_fakultas" id="fakultas">
          <option disabled selected> Pilih Fakultas </option>
          
          <?php
          $no = 1;
          foreach($db->tampil_fakultas() as $x){
            $selected=""; if($db->dataDetail()['kode_fakultas'] == $x['kode_fakultas']){$selected='selected="selected"';}
            ?>
            <tr>
              <option <?php echo $selected; ?> value="<?=$x['kode_fakultas']?>"><?=$x['nama_fakultas']?></option> 
              <td>
              </td>
            </tr>
            <?php 
          }
          ?>
        </select>
      </div>  

      <div class="form-group">
      <label for="uname">Kode Jurusan:</label>
        <select name="kode_jurusan" id="jurusan">
          <option disabled selected> Pilih Jurusan </option>
          <?php
          $no = 1;
          foreach($db->tampil_jurusan() as $x){
                $selected2 = ""; if($db->dataDetail()['kode_jurusan'] == $x['kode_jurusan']){$selected2='selected="selected"';}
          ?>
          <tr>
            <option <?php echo $selected2; ?> value="<?=$x['kode_jurusan']?>"><?=$x['nama_jurusan']?></option> 
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
    $('#dropdownMenuButton + [aria-labelledby="dropdownMenuButton"] a').on('click', function (e) {
      e.preventDefault();
      var ele = this;
      console.log(ele.textContent);
    })
  </script>
</body>
</html>