<?php 
	include 'database.php';
	$db = new database();
	$aksi = $_GET['aksi'];
	
	if($aksi == "tambah"){
		$db->input($_POST['nim'],$_POST['nama'],$_POST['kode_fakultas'],$_POST['kode_jurusan']);
		header("location:tabel.php");
	}
	
	elseif($aksi == "edit"){
		$db->edit($_POST['nim'],$_POST['nama'],$_POST['kode_fakultas'],$_POST['kode_jurusan']);
		header("location:tabel.php");
	}
?>