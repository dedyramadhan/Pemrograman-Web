<html>
<head>
    <title>Tambah Barang</title>
</head>

<body>
    <a href="Index.php">Kembali ke Beranda</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>SKU</td>
                <td><input type="text" name="sku"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
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
                <td>Jumlah Stok</td>
                <td><input type="text" name="jumlah_stok"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="harga_satuan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $sku = $_POST['sku'];
        $nama_barang = $_POST['nama_barang'];
        $kategori = $_POST['kategori'];
        $jumlah_stok = $_POST['jumlah_stok'];
        $harga_satuan = $_POST['harga_satuan'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO barang(sku, nama_barang, kategori, jumlah_stok, harga_satuan) VALUES('$sku','$nama_barang','$kategori','$jumlah_stok','$harga_satuan')");

        echo "Barang telah berhasil ditambahkan. <a href='index.php'>Cek Barang</a>";
    }
    ?>
    </body>
    </html>