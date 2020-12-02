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
        <script src="jquery_hosted_libraries.js"></script>
        <link rel="stylesheet" href="style6.css">
        <link rel="stylesheet" href="960.css">
        <title>CV with Database</title>

    </head>
    <body>

        <script>

        $(document).ready(function(){
            $('h2').css('color');

            //event
            $('h1').click(function(){ 
                $('ol').css('color','red');
                $('ul').css('color','blue');
            });

            $('.grid_4').mouseenter(function(){ 
                $(this).css('color','black');
            }); 

            
            $('.grid_4').mouseleave(function(){ 
                $(this).css('color','lightgray');
            });

            $('.grid_8').mouseleave(function(){ 
                $(this).css('color','#333333');
            });

        });


        </script>
        <div class="container_12">
            <div class="grid_4">
                <header>
                    <br/>
                    <img src="Asset/foto_diri.PNG" alt="Dedy Ramadhan" height="150px" width="150px">
                    <br/>
                </header>
        
                <h3><?php echo $profile ?></h3>
                <?php
                    $getdata = mysqli_query($connect, "SELECT * FROM profile order by profile_text desc");
                    while($a=mysqli_fetch_array($getdata)){
                ?>
                <p> <?php echo $a['profile_text'] ?></p>
                <?php
                }
                ?>
        
                <div>
                <?php
                $getdata = mysqli_query($connect, "SELECT * FROM contact order by email desc");
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
                    $getdata = mysqli_query($connect, "SELECT * FROM expertise order by ex1 desc");
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

            <div class="grid_8">
                <h1><?php echo $nama ?></h1>

                <h2><?php echo $education?></h2>
                <hr size="1px" width="590px">
                <ul style="line-height: 50px;">
                <?php
                $getdata = mysqli_query($connect, "SELECT * FROM education order by sd desc");
            
                while($pendidikan=mysqli_fetch_array($getdata)){
                ?>
                    <?php $pendidikan['id'] ?> <br/>
                    <?php echo $pendidikan['sd'] ?> <br/>
                    <?php echo $pendidikan['smp'] ?> <br/>
                    <?php echo $pendidikan['sma'] ?> <br/>
                    <?php echo $pendidikan['kuliah'] ?> <br/>
                <td><a href='delete.php?id=<?php echo $pendidikan['id'];?>'>Delete Education List</a></td></tr>
                <?php
                }
                ?>
                <br/>
                <a href="add.php">Add Education</a><br/>
                </ul>

                <script>
                    function hapustData(id){
                    var validasi = confirm("Apakah anda yakin akan menghapus data ini?");
                    if(validasi){
                        $.ajax({
                            type: "GET",
                            data: "id="+id,
                            url : 'delete.php',
                            success: 'index.php';
                        })
                    }
                    }
                </script>
                <h2><?php echo $experience ?></h2>
                <hr size="1px" width="590px">
                <ul style="line-height: 50px;">
                <?php
                $getdata = mysqli_query($connect, "SELECT * FROM experience order by exp1 desc");
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