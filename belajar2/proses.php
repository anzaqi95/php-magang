<?php 
include 'koneksi.php';
if (isset($_POST ['tambah'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$asal_kampus = $_POST['asal_kampus'];
	$prodi = $_POST['prodi'];
	$tahun_angkatan = $_POST['tahun_angkatan'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$status = $_POST['status'];
	mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, asal_kampus, prodi, tahun_angkatan, email, telepon, 
	alamat, tempat_lahir, tanggal_lahir, 'status' ) 
		VALUES('$nama','$nim', '$asal_kampus', '$prodi', '$tahun_angkatan', '$email', '$telepon', '$alamat', 
		'$tempat_lahir', '$tanggal_lahir', '$status')");
	header("location:index.php");
}

if (isset($_POST['edit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$asal_kampus = $_POST['asal_kampus'];
	$prodi = $_POST['prodi'];
	$tahun_angkatan = $_POST['tahun_angkatan'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$status = $_POST['status'];
	$id_mahasiswa=$_POST['id_mahasiswa'];
	mysqli_query($koneksi,"UPDATE mahasiswa set nama='$nama',nim='$nim', asal_kampus='$asal_kampus', prodi='$prodi', 
	tahun_angkatan='$tahun_angkatan', email='$email', telepon='$telepon', alamat='$alamat', tempat_lahir='$tempat_lahir', 
	tanggal_lahir='$tanggal_lahir', 'status'='$status' where id_mahasiswa=$id_mahasiswa");
	header("location:index.php");
}

if (isset($_GET['id'])) {
	$id_mahasiswa=$_GET['id'];
	mysqli_query($koneksi,"DELETE from mahasiswa where id_mahasiswa=$id_mahasiswa");
	header("location:index.php");
}
?>