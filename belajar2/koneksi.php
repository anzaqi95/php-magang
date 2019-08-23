<?php 
// isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","", "sistem_magang");
 
if(mysqli_connect_errno()){
	echo "koneksi data gagal : " . mysqli_connect_error();
}
?>