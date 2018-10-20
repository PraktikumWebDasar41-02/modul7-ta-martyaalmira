<?php 
require_once("db.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$motto_hidup = $_POST['motto_hidup'];
	$sql = "INSERT INTO data VALUES ('$nama','$nim', '$tgl_lahir','$jenis_kelamin', '$prodi', '$fakultas','$asal', '$motto_hidup')";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	echo "Sukses.";
	echo "Silahkan klik <a href='lihat.php'>lihat Data </a>";
}else {
	echo "Gagal: ". $sql . "<br>" . mysqli_error($conn);
}	
?> 