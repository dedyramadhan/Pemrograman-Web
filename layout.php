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
$exp2 = "Seller smartphone accessories online(2018-2019)"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="960.css">
    <title>CV</title>

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
        <p> <?php echo $profile_text ?></p>
            
    
        <div>
            <hr size="1px" color="#D3D3D3"width="250px">
            <ol style="list-style-type: none;list-style-position: inside;">
                <img src="Asset/2x/baseline_phone_android_white_24dp.png" alt="contact">
                <li><?php echo $no_hp ?></li>
                <img src="Asset/2x/baseline_mail_white_24dp.png" alt="mail">        
                <li><?php echo $email ?></li>
                <img src="Asset/2x/baseline_house_white_24dp.png" alt="Address">
                <li><?php echo $alamat ?></li>
                <img src="Asset/2x/baseline_desktop_windows_white_24dp.png" alt="Website">
                <li><?php echo $website ?></li>
            </ol>
        </div>
    
        <br/>
        <hr size="1px" color="#D3D3D3"width="250px">
        <h3><?php echo $expertise ?></h3>
        <br/>
            <div>
                <ol style="list-style-type: none">
                    <li><?php echo $ex1 ?></li>
                    <li><?php echo $ex2 ?></li>
                    <li><?php echo $ex3 ?></li>
                
                </ol>
            </div>
        </div>

        <div class="grid_8 alpha">
            <h1><?php echo $nama ?></h1>

            <h2><?php echo $education?></h2>
            <hr size="1px" width="590px">
            <ul style="line-height: 50px;">
                <?php echo $sd ?> <br/>
                <?php echo $smp ?> <br/>
                <?php echo $sma ?> <br/>
                <?php echo $kuliah ?> <br/>
            </ul>

            <h2><?php echo $experience ?></h2>
            <hr size="1px" width="590px">
            <ul style="line-height: 50px;">
                <?php echo $exp1 ?> <br/>
                <?php echo $exp2 ?> <br/>
            </ul>      

        </div>
    </div>
</body>
</html>