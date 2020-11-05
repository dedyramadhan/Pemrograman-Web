<?php

include_once("config.php");

$sku = $_GET['sku'];

$result = mysqli_query($mysqli, "DELETE FROM barang WHERE sku=$sku");
echo "Barang telah berhasil dihapus. <a href='index.php'>Cek Barang</a>";

header("Location: index.php");
?>