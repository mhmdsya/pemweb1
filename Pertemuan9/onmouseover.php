<!DOCTYPE html>
<html>
<body>

<h1>Mengenal Event OnMouseOver Pada Javascript</h1>
<p>Arahkan cursor mouse ke arah kata dibawah ini.</p>

<h1 id="demo">Mouse over me</h1>

<script>
document.getElementById("demo").onmouseover = function() {mouseOver()};
document.getElementById("demo").onmouseout = function() {mouseOut()};

function mouseOver() {
  document.getElementById("demo").style.color = "red";
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
}
</script>

</body>
</html>	
