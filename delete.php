<?php

require_once("db.php");
$id = $_GET["nim"];
$sql = "DELETE FROM data WHERE nim=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: lihat.php");
}else {
    echo "Gagal";
}
mysqli_close($conn);
?>
