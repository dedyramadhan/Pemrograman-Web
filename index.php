<?php 
$profile = "PROFILE";
$profile_text = "A programmer who is quite good at games and android. Trying to study the website.";
$no_hp = "1234 1234 4567";
$email = "blablabla@gmail.com";
$alamat = "Jl.Angker";
$website = "www.blablabla.com";

$expertise = "EXPERTISE";
$ex1= "Adobe Premiere";
$ex2= "Microsoft Office";
$ex3= "Unity";

$nama = "Dedy Ramadhan";

$education= "EDUCATION";
$sd= "SDN JEPARA 1 SURABAYA (2006-2012)";
$smp= "SMPN 37 SURABAYA (2012-2015)";
$sma= "SMA GIKI 3 SURABAYA (2015-2018)";
$kuliah= "UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR";

$experience= "EXPERIENCE";
$exp1 = "Freelancer on Fiverr (2016-2018)";
$exp2 = "Seller smartphone accessories online(2018-2019)";

include "conn.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style5.css">
        <link rel="stylesheet" href="960.css">
        <title>CV with Database</title>

    </head>
    <body>
        <div class="container_12">
            <div class="grid_4">
                <header>
                    <br/>
                    <img src="Asset/foto_diri.PNG" alt="Dedy Ramadhan" height="150px" width="150px">
                    <br/>
                </header>
        
            <h3><?php echo $profile ?></h3>
            <?php
                $getdata = mysqli_query($conect, "SELECT * FROM profile order by profile_text desc");
                while($a=mysqli_fetch_array($getdata)){
            ?>
            <p> <?php echo $a['profile_text'] ?></p>
            <?php
            }
            ?>
        
            <div>
            <?php
            $getdata = mysqli_query($conect, "SELECT * FROM contact order by email desc");
            while($a=mysqli_fetch_array($getdata)){
            ?>
                <hr size="1px" color="#D3D3D3"width="250px">
                <ol style="list-style-type: none;list-style-position: inside;">
                    <img src="Asset/2x/baseline_phone_android_white_24dp.png" alt="contact">
                    <li><?php echo $a['nomor'] ?></li>
                    <img src="Asset/2x/baseline_mail_white_24dp.png" alt="mail">        
                    <li><?php echo $a['email'] ?></li>
                    <img src="Asset/2x/baseline_house_white_24dp.png" alt="Address">
                    <li><?php echo $a['alamat'] ?></li>
                    <img src="Asset/2x/baseline_desktop_windows_white_24dp.png" alt="Website">
                    <li><?php echo $a['website'] ?></li>
                </ol>
            <?php
            }
            ?>
            </div>
        
            <br/>
            <hr size="1px" color="#D3D3D3"width="250px">
            <h3><?php echo $expertise ?></h3>
            <br/>
                <div>
                <?php
                $getdata = mysqli_query($conect, "SELECT * FROM expertise order by ex1 desc");
                while($a=mysqli_fetch_array($getdata)){
                ?>
                    <ol style="list-style-type: none">
                        <li><?php echo $a['ex1'] ?></li>
                        <li><?php echo $a['ex2'] ?></li>
                        <li><?php echo $a['ex3'] ?></li>
                    
                    </ol>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="grid_8 alpha">
                <h1><?php echo $nama ?></h1>

                <h2><?php echo $education?></h2>
                <hr size="1px" width="590px">
                <ul style="line-height: 50px;">
                <?php
                $getdata = mysqli_query($conect, "SELECT * FROM education order by sd desc");
                while($a=mysqli_fetch_array($getdata)){
                ?>
                    <?php echo $a['sd'] ?> <br/>
                    <?php echo $a['smo'] ?> <br/>
                    <?php echo $a['sma'] ?> <br/>
                    <?php echo $a['kuliah'] ?> <br/>
                <?php
                }
                ?>
                </ul>

                <h2><?php echo $experience ?></h2>
                <hr size="1px" width="590px">
                <ul style="line-height: 50px;">
                <?php
                $getdata = mysqli_query($conect, "SELECT * FROM experience order by exp1 desc");
                while($a=mysqli_fetch_array($getdata)){
                ?>
                    <?php echo $a['exp1'] ?> <br/>
                    <?php echo $a['exp2'] ?> <br/>

                <?php
                }
                ?>
                </ul>      

            </div>
        </div>
    </body>
</html>