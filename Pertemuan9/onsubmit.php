<!DOCTYPE html>
<html>
<body>

<h1>Mengenal Event OnKeyPress Pada Javascript</h1>
<p>Ketik apapun di input box, nanti keluar pop up alert jika sudah submit.</p>

<form action="index.php" onsubmit="myFunction()">
  Enter name: <input type="text" name="fname">
  <input type="submit" value="Submit">
</form>

<script>
  function myFunction() {
    alert("The form was submitted");
  }
</script>

</body>
</html>