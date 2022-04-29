<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    echo "<h2>Event JavaScript</h2>";
    echo "<p>Event adalah sesuatu yang terjadi ketika pengguna berinteraksi dengan halaman web, seperti ketika dia mengklik tautan atau tombol, memasukkan teks ke dalam kotak input atau textarea, membuat pilihan dalam select box, menekan tombol pada keyboard, memindahkan pointer mouse, memasukkan formulir, dll. Dalam beberapa kasus, Browser itu sendiri dapat men-trigger event, seperti memuat halaman dan membongkar event. Ketika suatu event terjadi, kalian dapat menggunakan JavaScript event handler (atau bahkan event listener) untuk mendeteksi event tersebut dan melakukan tugas atau serangkaian tugas tertentu. Secara universal, nama-nama untuk event handler selalu dimulai dengan kata “on“, jadi event handler untuk event klik disebut onclick, sama halnya event handler untuk event load disebut onload, event handler untuk event blur disebut onblur, dan seterusnya.</p>";
    echo "<h3>1. Onclick Event</h3>";
    echo "<p>Click Event terjadi ketika pengguna mengklik elemen di halaman web. Seringkali, ini adalah elemen form dan tautan. Kalian dapat menangani click event dengan onclick event handler.</p>";
    echo "<h1>2. OnKeyDown Event</h1>";
    echo "<p>Event keydown terjadi ketika pengguna menekan tombol pada keyboard.</p>";
    echo "<h1>3. OnKeyPress Event</h1>";
    echo "<p>Event keypress terjadi ketika pengguna menekan tombol pada keyboard yang memiliki nilai karakter yang terkait dengannya. Misalnya, tombol seperti Ctrl, Shift, Alt, Esc, tombol panah, dll. Tidak akan menghasilkan event keypress, tetapi akan menghasilkan event keydown dan keyup.</p>";
    echo "<h1>4. OnMouseOver Event</h1>";
    echo "<p>Mouseover event terjadi ketika pengguna menggerakkan mouse pointer ke suatu elemen.</p>";
    echo "<h1>5. OnSubmit Event</h1>";
    echo "<p>Submit event hanya terjadi ketika pengguna mengirimkan formulir di halaman web.</p>";
  ?>
</body>
</html>