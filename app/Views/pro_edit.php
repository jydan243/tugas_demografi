<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nik'];
$nama = $_POST['no_kk'];
$prodi = $_POST['nama'];
$kelas = $_POST['kelurahan'];
$semester = $_POST['penduduk asli'];
$email = $_POST['option'];

if(mysqli_query($mysqli, "INSERT INTO tab_penduduk (nik, no_kk, nama, kelurahan, penduduk asli, option) VALUES('$nik', '$no_kk', '$nama', '$kelurahan', '$penduduk asli', '$option')")){   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='penduduk.php';
			</script>";
} else {
	echo mysqli_error($mysqli);
}