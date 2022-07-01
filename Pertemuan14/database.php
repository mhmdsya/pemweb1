<?php 

	class database{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "tgs_pert_14";
		var $conn="";

		function __construct(){
			$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			if (mysqli_connect_errno()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
			}
		}

		function tampil_data(){
			$data = mysqli_query($this->conn,"SELECT * FROM mahasiswa 
			left join fakultas on fakultas.kode_fakultas = mahasiswa.kode_fakultas
			left join jurusan on jurusan.kode_jurusan = mahasiswa.kode_jurusan");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function tampil_fakultas(){
			$data = mysqli_query($this->conn,"SELECT * FROM fakultas");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		
		function tampil_jurusan(){
			$data = mysqli_query($this->conn,"SELECT * FROM jurusan");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function tampil_jurusan2($fakultas){
			$data = mysqli_query($this->conn,"SELECT * FROM jurusan WHERE kode_fakultas ='$fakultas'");
			$hasil = [];
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nim,$nama,$fakultas,$jurusan){
			mysqli_query($this->conn,"insert into mahasiswa values('$nim','$nama','$fakultas','$jurusan')");
		}	

		function edit(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$fakultas = $_POST['kode_fakultas'];
			$jurusan = $_POST['kode_jurusan'];
			mysqli_query($this->conn,"UPDATE mahasiswa set nama ='$nama',
			kode_fakultas ='$fakultas',kode_jurusan ='$jurusan' WHERE nim = '$nim' ");
		}

		function dataDetail(){
			$nim = $_GET['nim'];
			return mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'"));		
		}	
	} 

?>