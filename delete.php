<?php

include_once("conn.php");

$id = $_GET['id'];

$deleteResult = mysqli_query($connect, "DELETE FROM education WHERE id=".$id);
echo "Riwayat Pendidikan telah berhasil dihapus.<a href='index.php'>Cek Hasil</a>";

header("Location: index.php");

/**/
?>