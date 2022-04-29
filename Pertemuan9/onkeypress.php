<!DOCTYPE html>
<html>
<body>

<h1>Mengenal Event OnKeyPress Pada Javascript</h1>
<p>Ketik apapun di input box, nanti keluar hasilnya menjadi pop up alert.</p>

<input type="text" onkeypress="myFunction(event)">

<script>
function myFunction(e) {
  var keynum;
  if(window.event) { // IE                  
    keynum = e.keyCode;
  } else if(e.which){ // Netscape/Firefox/Opera                 
    keynum = e.which;
  }

  alert("Anda menekan tombol : " + String.fromCharCode(keynum));
}
</script>

</body>
</html>
