<!DOCTYPE html>
<?php
include_once("config.php");
error_reporting(0);
$result = mysqli_query($mysqli, "SELECT*FROM barang ORDER BY sku DESC");
$search_result=mysqli_query($mysqli,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Barokah Minimarket</title>
    </head>

    <body>
    <a href="add.php">Tambah Barang</a><br/>
    

        <table width='80%' border=1>

        <tr>
            <th>SKU</th> <th>Nama Barang</th> <th>Kategori</th> <th>Jumlah Stok</th> <th>Harga Satuan</th> <th>Manajemen Kategori</th>
        </tr>
        <?php

    
        while($data_barang = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$data_barang['sku']."</td>";
            echo "<td>".$data_barang['nama_barang']."</td>";
            echo "<td>".$data_barang['kategori']."</td>";
            echo "<td>".$data_barang['jumlah_stok']."</td>";
            echo "<td>".$data_barang['harga_satuan']."</td>";
            echo "<td><a href='edit.php?sku=$data_barang[sku]'>Ubah Kategori</a> | <a href='delete.php?sku=$data_barang[sku]'>Hapus Kategori</a></td></tr>";
        }
        ?>
        </table>
<!--Form Pencarian-->
<form action="" method="POST" >
                <input type="text" name="kata_kunci" placeholder="Pencarian" autocomplete="off">
                <button type="submit" name="cari">Cari</button>
            </form>
<?php
//pencarian
if(isset($_POST["cari"])){
  $barokah = cari($_POST["kata_kunci"]);
}

function cari($kata_kunci){
  $query = "SELECT * FROM barokah
               WHERE 
          sku LIKE '%$kata_kunci%' OR
          kategori LIKE '%$kata_kunci%'OR
          nama_barang LIKE '%$kata_kunci%'
          ";
  return query($query);
}

?>
   
<!-- Form Range-->
<form action="" method="POST" id="range">
                <p>Dari Harga : <input type="text" name="harga1">
                    Sampai Harga : <input type="text" name="harga2">
                <button type="submit" name="rangeharga">Cari</button>
                </p>
            </form>
<?php
//Range harga
if(isset($_POST["rangeharga"])){
  $barokah = rangeharga($_POST["harga1"], $_POST["harga2"]);
}
function rangeharga($harga1,$harga2){
  $query = "SELECT * FROM barang
               WHERE harga_satuan
               BETWEEN $harga1 AND $harga2
          ";
  return query($query);
}
?>
    
    </body>
</html>