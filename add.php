<html>
<head>
    <title>Tambah Riwayat Pendidikan</title>
</head>

<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>SD</td>
                <td><input type="text" name="sd"></td>
            </tr>
            <tr>
                <td>SMP</td>
                <td><input type="text" name="smp"></td>
            </tr>
            <tr>
                <td>SMA</td>
                <td><input type="text" name="sma"></td>
            </tr>
            <tr>
                <td>KULIAH</td>
                <td><input type="text" name="kuliah"></td>
            </tr>
            <tr>
                <td></td>
                <td><button onclick="add()">Simpan</button></td>
            </tr>
        </table>
        <p id="pesan"></p>
    </form>

    <?php
    error_reporting(0);
    
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];
        $kuliah = $_POST['kuliah'];
        $result['pesan']="";

        include_once("conn.php");

        if($sd==""){
            $result['pesan'] = "Kolom SD harus diisi"; 
        }elseif($smp==""){
            $result['pesan'] = "Kolom SMP harus diisi"; 
        }elseif($sma==""){
            $result['pesan'] = "Kolom SMA harus diisi"; 
        }elseif($kuliah==""){
            $result['pesan'] = "Kolom KULIAH harus diisi"; 
        }else{
            $addResult = mysqli_query($connect, "INSERT INTO education(sd, smp, sma, kuliah) VALUES('$sd','$smp','$sma','$kuliah')");
        }

        if($addResult){
            $result['pesan'] = "Riwayat Pendidikan telah berhasil ditambahkan. <a href='index.php'>Cek Hasil</a>";
        }else{
            $result['pesan'] = "Riwayat Pendidikan gagal ditambahkan"; 
        }
    echo json_encode($result);
    ?>

    <script type="text/javascript">

    function add(){
        var sd = $("[name='sd']").val():
        var smp = $("[name='smp']").val():
        var sma = $("[name='sma']").val():
        var kuliah = $("[name='kuliah']").val():
    }
            $.ajax({
                type: "POST",
                data: "sd="+sd+"&smp="+smp+"&sma="+sma+"&kuliah="+kuliah,
                url : 'add.php',
                success : function(result){
                    var pecahData=JSON.parse(result);
                    $.(#pesan).html(pecahData.pesan);
                }
            });
    </script>

    </body>
    </html>