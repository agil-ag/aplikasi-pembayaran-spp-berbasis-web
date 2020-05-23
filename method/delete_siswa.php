<?php 
ob_start();
session_start();
include '../koneksi.php';
$data=$_GET['kode'];
//echo $nis=$_SESSION['nis'];
// if($nis =='-'){
// 	echo "<script>alert('tidak dapat hapus superadmin');</script>";
// 	echo "<script>location='../tampil_admin.php';</script>";
// }else{
	$query=$koneksi->query("DELETE FROM siswa WHERE nisn=$data");
	echo "<script>alert('Hapus Data Siswa Berhasil');</script>";
	echo "<script>location='../tampil_siswa.php';</script>";
//}
?>