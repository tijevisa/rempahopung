<?php

function rp($angka){
    $angka = number_format($angka);
    $angka = str_replace(',', '.', $angka);
    $angka ="$angka";
    return $angka;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempah Opung - Belanja</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <div class="boxheader">
        <div class="nav_boxheader-kiri">
            <p>Rempah Opung</p>
        </div>
        <div class="nav_boxheader-tengah">
            <a href="home-no-login.php">Beranda</a>
            <a href="">Tentang Kami</a>
            <a href="belanja-no-login.php">Belanja</a>
            <a href="blogrempah-no-login.php">Rempah</a>
        </div>
        <div class="nav_boxheader-kanan">
            <form method="get" action="search-no-login.php">
                <input style="width: 210px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; font-size: 16px; background-color:#d9d9d9; background-image: url('img/logo search1.png'); background-size: 20px 20px; background-position: 8px 10px;  background-repeat: no-repeat; padding: 10px 1px 10px 30px;" type="text" placeholder="Cari rempahmu di sini" name="search">
                <a href="#" onClick='alert("login terlebih dahulu!")'>Cart</a>
                <a href="index.php">Login</a>
            </form>
        </div>
    </div>

    <div class="boxcontent">
        <h1 style="padding-bottom: 20px;">Toko Rempah Opung</h1>
        <div class="boxcontent-rempah1">
            <button type="submit" onclick="window.location.href='belanja-no-login.php'" style="width: 123px; height: 42px; margin-bottom: 20px;">Semua</button>
            <button type="submit" onclick="window.location.href='rempah-kering-no-login.php'" style="width: 250px; height: 42px; margin-bottom: 20px;">Rempah Kering</button>
            <button type="submit" onclick="window.location.href='rempah-basah-no-login.php'" style="width: 250px; height: 42px; margin-bottom: 20px;">Rempah Basah</button>
        </div>
        <h2 style="padding-bottom: 20px;">Rempah Kering</h2>
        <div class="boxcontent-rempah1-isi">
            <?php
            include "config.php";
            $sql = mysqli_query($conn, "SELECT * FROM rempah WHERE jenis_rempah='kering'");
            // $hasil = mysqli_fetch_array($sql);
            $i = 1;
            while($row=mysqli_fetch_assoc($sql))
            {
                $id[$i] = $row['id'];
                $nama_rempah[$i] = $row['nama_rempah'];
                $harga[$i] = rp($row['harga']);
                $image[$i] = $row['image'];
                $i++;
            }
            ?>
            <table style="padding-left: 20px; padding-right: 20px;">
                <?php for($i = 1; $i <=count($id); $i++) { ?>
                    <?php if($i%4 == 1) { ?>
                        <tr>
                        </tr>
                        <td>
                            <div class="card">
                                <img src="img/<?= $image[$i] ?>" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4 style="padding: 5px;"><b><?= $nama_rempah[$i] ?></b></h4> 
                                    <p style="padding: 5px;">Rp. <?= $harga[$i] ?></p> 
                                </div>
                                <div class="btn-card">
                                    <button onclick='alert("login terlebih dahulu!")' style="width: 35px; height:35px; ;font-size:24px; margin: 10px; padding: 3px;"><i class="fa fa-shopping-cart"></i></button>
                                    <button onclick='alert("login terlebih dahulu!")' style="background-color:#D9D9D9; border-radius: 5px; border-width: 1px; width:120px; font-size:24px; margin: 10px; padding: 3px;">beli</button>
                                </div>
                            </div>
                        </td>
                    <?php }else { ?>
                        <td>
                            <div class="card">
                                <img src="img/<?= $image[$i] ?>" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4 style="padding: 5px;"><b><?= $nama_rempah[$i] ?></b></h4> 
                                    <p style="padding: 5px;">Rp. <?= $harga[$i] ?></p> 
                                </div>
                                <div class="btn-card">
                                    <button onclick='alert("login terlebih dahulu!")' style="width: 35px; height:35px; ;font-size:24px; margin: 10px; padding: 3px;"><i class="fa fa-shopping-cart"></i></button>
                                    <button onclick='alert("login terlebih dahulu!")' style="background-color:#D9D9D9; border-radius: 5px; border-width: 1px; width:120px; font-size:24px; margin: 10px; padding: 3px;">beli</button>
                                </div>
                            </div>
                        </td>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="boxfooter">
        <h1 style="padding: 0.5em; font-size: 25px;">Hubungi Kami</h1>
        <div class="boxfooter_info">
            <div class="boxfooter_info-email">
                <img src="img/logo email.png" alt="email" width="30" height="30">
                <p style="padding: 10px;">andre.hendrike.alqarni@gmail.com</p>
            </div>
            <div class="boxfooter_info-telepon">
                <img src="img/logo telepon5.png" alt="telepon" width="30" height="30">
                <p style="padding: 10px;">081273026457</p>
            </div>
        </div>
    </div>
</body>
</html>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>