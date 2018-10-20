<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "jurnal7";

$conn = mysqli_connect($servername, $username, $password,$db);

if (! $conn) {

	die("Konek ke database gagal" . mysqli_connect_error());

}

?>