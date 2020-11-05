<?php
    if (isset($_POST['kata_kunci'])) {
        $kata_kunci=trim($_POST['kata_kunci']);

        $kolom="";
        if ($_POST['kolom']=="sku")
        {
            $kolom="SKU";
        }else if ($_POST['kolom']=="nama_barang"){
            $kolom="nama barang";
        }else {
            $kolom="jurusan";
        }

        $sql="SELECT*FROM barang WHERE $kolom LIKE '%".$kata_kunci."%' ORDER BY sku ASC";

    }else {
        $sql=" SELECT*FROM barang ORDER BY sku ASC";
    }

    header("Location: index.php");
?>

<html>
<head>
    <title>Pencarian</title>
</head>

<body>

    <form action="search.php" method="post">
    <div>
        <label for="sel1">Pilih pencarian berdasarkan</label>
        <?php
        $sku="";
        $nama_barang="";
        $kategori="";
        if (isset($_POST['kolom'])) {

            if ($_POST['kolom']=="sku")
            {
                $sku="selected";
            }else if ($_POST['kolom']=="nama_barang"){
                $nama_barang="selected";
            }else {
                $kategori="selected";
            }
        }
        ?>
            <select name="kolom" required>
                <option value="" >Silahkan pilih kolom dulu</option>
                <option value="sku" <?php echo $sku; ?> >SKU</option>
                <option value="nama_barang" <?php echo $nama_barang; ?> >Nama Barang</option>
                <option value="kategori" <?php echo $kategori; ?> >Kategori</option>
            </select>
    </div>
    <div>
        <input type="Submit" value="Pilih">
    </div>

    <div>
        <label for="sel1">Kata Kunci</label>
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" required/>
    </div>
    <div>
        <input type="submit" value="Cari">
    </div>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php

    $result=mysqli_query($mysqli,$sql);
    while($data_barang = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$data_barang['name']."</td>";
        echo "<td>".$data_barang['mobile']."</td>";
        echo "<td>".$data_barang['email']."</td>";
    
    }
    ?>
    </table>
    </form>
</body>
</html>