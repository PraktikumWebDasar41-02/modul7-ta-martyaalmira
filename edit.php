<?php
require_once('db.php');
$id = $_GET['nim'];
$sql = mysqli_query($conn, "SELECT * FROM data WHERE nim = '$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['upload'])){
 $nim = $_POST["nim"];
 $nama = $_POST["nama"];
 $tgl_lahir	= $_POST["tgl_lahir"]
 $jenis_kelamin	= $_POST["jenis_kelamin"];
 $prodi	= $_POST["prodi"];
 $fakultas = $_POST["fakultas"];
 $asal = $_POST["asal"];
 $motto_hidup = $_POST["motto_hidup"];

 $sql = "UPDATE data SET nama = '$nama', nim = '$nim', jenis_kelamin = '$jenis_kelamin', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', motto_hidup = '$motto_hidup' WHERE nim='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: lihat.php');
 }else {
 echo "Data gagal terupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
</head>

<body>

		<h1>EDIT DATA</h1>
		<form method="POST">
			Nama : <input type="text" name="nama"  minlength="1" maxlength="30"  value="<?php echo $row["nama"];?>"><br><br>
			
			NIM : <input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ><br><br>

			Jenis Kelamin :	<input type="radio" name="jk" value="Perempuan" required>Perempuan 

					 		<input type="radio" name="jk" value="Laki - Laki" required>Laki - Laki

					 		<br><br>

			Program Studi :

					<select name="prodi">	
						<option>Manajemen Informatika</option>
						<option>Teknik Industri</option>
						<option>Fashion Design</option>
						<option>Akuntansi</option>
						<option>MBTI</option>	
						<option>Ilmu Komunikasi</option>
						<option>Adminitrasi Bisnis</option>
					</select><br><br>

			Fakultas :

					<select name="fakultas">

						<option>Industri Kreatif</option>
						<option>Rekayasa Industri</option>
						<option>Teknik Elektro</option>
						<option>Komunikasi Bisnis</option>
						<option>Ilmu Terapan</option>
						<option>Informatika</option>
						<option>Ekonomi Bisnis</option>

					</select><br><br>

			Asal : <input type="text" name="asal" value="<?php echo $row["asal"];?>"><br><br>

			Motto Hidup : <input type="textarea" name="motto_hidup" value="<?php echo $row["motto_hidup"];?>"><br><br>

			<input type="submit" name="upload" id="upload" value="Kirim"></td>

	</form>

</body>
</html>