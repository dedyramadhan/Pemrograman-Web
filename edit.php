<?php

include_once("config.php");

if(isset($_POST['update'])){
    $sku = $_POST['sku'];
    $kategori = $_POST['kategori'];
    $result = mysqli_query($mysqli, "UPDATE barang SET kategori='$kategori' WHERE sku='$sku'");

    header("Location: index.php");
    echo "Kategori telah berhasil diubah. <a href='index.php'>Cek Barang</a>";
}
?>
<?php
    $sku= $_GET['sku'];

    $result = mysqli_query($mysqli, "SELECT*FROM barang WHERE sku='$sku'");

    while($data_barang = mysqli_fetch_array($result))
    {
        $kategori = $data_barang['kategori'];
    }
?>
<html>
<head>
    <title>Edit Kategori Barang</title>
</head>

<body>
    <a href="index.php">Home</a>

    <form name="update_kategori" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Kategori</td>
                <td><select class="custom-select" name="kategori" required="required">
                    <option value="">pilih salah satu</option>
                    <option value="MAKANAN">Makanan</option>
                    <option value="MINUMAN">Minuman</option>
                    <option value="ATK">ATK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="sku" value=<?php echo @$_GET['sku'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
