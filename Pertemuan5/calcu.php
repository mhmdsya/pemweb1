<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form class="calcu">
            <table class="body">
                <header>
                    <h2>CALCULATOR</h2>
                </header>
                <tr>
                    <td>Angka 1</td><td>:</td><td><input type="number" name="angka1"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input class="tombol" type="button" onclick="tambah()" value="  +  ">
                        <input class="tombol" type="button" onclick="kurang()" value="  -  ">
                        <input class="tombol" type="button" onclick="kali()" value="  *  ">
                        <input class="tombol" type="button" onclick="bagi()" value="  /  ">
                    </td>
                </tr>
                <tr>
                    <td>Angka 2</td><td>:</td><td><input type="number" name="angka2"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input class="tombol" type="button" onclick="tambah2()" value="  +  ">
                        <input class="tombol" type="button" onclick="kurang2()" value="  -  ">
                        <input class="tombol" type="button" onclick="kali2()" value="  *  ">
                        <input class="tombol" type="button" onclick="bagi2()" value="  /  ">
                    </td>
                </tr>
                <tr>
                    <td>Angka 3</td><td>:</td><td><input type="number" name="angka3"></td>
                </tr>
                <tr>
                    <td>Hasil</td><td>:</td><td><input type="number" name="hasil"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>