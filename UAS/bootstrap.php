<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemrograman WEB-Pertemuan 14</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <label for="uname">tanggal_lahir:</label>
        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Enter tanggal_lahir" name="tanggal_lahir" required>
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
        <input id="forJurusan" type="hidden" data-json="  " />
          <script>
            var data = {};
            <?php
              echo " data = '";
              foreach ($db->tampil_jurusan() as $x) {
                echo ",{\"kode_jurusan\":" . $x['kode_jurusan'] . ",";
                echo "\"kode_fakultas\":\"" . $x['kode_fakultas'] . "\",";
                echo "\"nama_jurusan\":\"" . $x['nama_jurusan'] . "\"}";
              }
              echo "';";
              ?>
                data = '[' + data.substring(1, data.length) + ']';
                document.getElementById('forJurusan').setAttribute('data-json', data);
                console.log(document.getElementById('forJurusan').getAttribute('data-json'));
                $('#fakultas').on('change', function() {
                  var data = $('#forJurusan').data('json');
                  console.log(data);
                  var kodeFakultas = data;
                  var idFakul = $('#jurusan');
                  idFakul.html('');
                  for (let i = 0; i < data.length; i++) {
                    let obj = data[i];
                    if ($(this).val() == obj.kode_fakultas) {
                      idFakul.append(' <option value="' + obj.kode_jurusan + '">' + obj.nama_jurusan + '</option>');
                    }
                    console.log(obj.id);
                  }
                })
          </script>
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
