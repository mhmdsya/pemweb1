<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
	<h1>Mengenal Event OnClick Pada Javascript</h1>
  <p>Klik tombol di bawah nanti muncul sebuah kalimat.</p>

	<!-- memberikan event pada element tombol -->
	<button onclick="tampilkan_nama()">KLIK TOMBOL INI</button>

	<!-- id hasil -->
	<div id="hasil"></div>

	<script>		
		// membuat function tampilkan_nama
		function tampilkan_nama(){
			document.getElementById("hasil").innerHTML = "<h3>Nama Saya Adalah Mahmud Syaiful Aminudin</h3>";
		}
		
	</script>
</body>
</html>