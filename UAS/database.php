<?php 

	class database{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "genap";
		var $conn="";

		function __construct(){
			$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			if (mysqli_connect_errno()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
			}
		}

		function tampil_data(){
			$data = mysqli_query($this->conn,"SELECT * FROM genap_mahasiswa 
			left join genap_fakultas on genap_fakultas.kode_fakultas = genap_mahasiswa.kode_fakultas
			left join genap_jurusan on genap_jurusan.kode_jurusan = genap_mahasiswa.kode_jurusan");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function tampil_fakultas(){
			$data = mysqli_query($this->conn,"SELECT * FROM genap_fakultas");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		
		function tampil_jurusan(){
			$data = mysqli_query($this->conn,"SELECT * FROM genap_jurusan");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		// function tanggal_lahir(){
		// 	$data = mysqli_query($this->conn, "SELECT * FROM tanggal_lahir");
		// 	$hasil = [];
		// 	while ($d = mysqli_fetch_array($data)){
		// 		$hasil[] = $d;
		// 	}
		// 	return $hasil;
		// }

		function tampil_jurusan2($fakultas){
			$fakultas = $_POST['genap_fakultas'];
			$data = mysqli_query($this->conn, "SELECT * FROM genap_jurusan WHERE kode_fakultas ='$fakultas'");
			$hasil = [];
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nim, $nama, $tanggal_lahir, $fakultas, $jurusan){
			mysqli_query($this->conn, "insert into genap_mahasiswa values('$nim','$nama','$tanggal_lahir','$fakultas','$jurusan')");
		}

		function edit(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$fakultas = $_POST['kode_fakultas'];
			$jurusan = $_POST['kode_jurusan'];
			mysqli_query($this->conn,"UPDATE genap_mahasiswa set nama ='$nama',tanggal_lahir ='$tanggal_lahir',
			kode_fakultas ='$fakultas',kode_jurusan ='$jurusan' WHERE nim = '$nim' ");
		}

		function dataDetail(){
			$nim = $_GET['nim'];
			return mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT * FROM genap_mahasiswa WHERE nim = '$nim'"));		
		}	
	} 

?>