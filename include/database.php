<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ahp_bsm";

// Membuat Koneksi
$conn = mysqli_connect($servername,$username,$password,$database);

// mengecek Koneksi

if(!$conn){
	die("Gagal Koneksi ke database". mysqli_connect_error());
}

?>