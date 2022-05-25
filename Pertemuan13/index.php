<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemrograman WEB-Pertemuan 13</title>
  <style>
    * {
      font-family: 'Roboto Mono', monospace;
    }

    body {
      background: #205375;
    }

    .container {
      width: 500px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      background: #112B3C;
      border-radius: 24px;
      text-align: center;
    }

    h2 {
      color: white;
    }
    
    .input input[type = "number"] {
      border: 0;
      background: #2E0249;
      border: 3px solid #F806CC;
      display: block;
      margin: 20px auto;
      text-align: center;
      border-radius: 24px;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: white;
      transition: 0.25s;
    }
    
    .input input[type = "number"]:focus {
      width: 280px;
      border-color: #F806CC;
    }
    
    .input input[type = "submit"] {
      border: 0;
      background: #A91079;
      border: 5px solid #15133C;
      display: block;
      margin: 20px auto;
      text-align: center;
      border-radius: 24px;
      padding: 14px 40px;
      outline: none;
      color: white;
      transition: 0.25s;
      cursor: pointer;
    }

    .input input[type = "submit"]:active {
      background: #15133C;

    }
    
    .hasil {
      border: 0;
      background: #2E0249;
      border: 3px solid #F806CC;
      display: block;
      margin: 20px auto;
      text-align: center;
      border-radius: 24px;
      padding: 14px 40px;
      outline: none;
      color: white;
      transition: 0.25s;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="index.php" class="input" method="POST">
      <h2>Hitung Volume Kubus</h2>
      <input type="number" id="sisi" name="sisi" placeholder="Masukkan sisi kubus">
      <input type="submit" id="submit" value="Hitung Volume">
    </form>

    <div class="hasil">
      <?php
        if (isset($_POST["sisi"])) {
          $sisi = $_POST["sisi"];
          if ($sisi == null) {
            echo "Sisi Kubus Kosong. Harap diisi !!!";
          }
          else {
            $volume = $sisi*$sisi*$sisi;
            echo "Sisi Kubus = $sisi CM </br>";
            echo "Volume Kubus = $volume CM3";
          }
        }
        else {
          echo "Harap diisi sisi kubusnya!!!";
        };
        exit();
      ?>
    </div>
  </div>
</body>
</html>