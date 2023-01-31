<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_GET['nim'];
	
if(mysqli_query($mysqli, "DELETE FROM tab_penduduk WHERE nik= $id ")){
	echo "<script language=javascript>
			alert('Hapus Berhasil');
			window.location='penduduk.php';
			</script>";
} else {
	echo "<script language=javascript>
			alert('Hapus Gagal');
			window.location='penduduk.php';
			</script>";
}