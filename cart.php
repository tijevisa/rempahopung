<?php
session_start();
include "config.php";

function rp($angka){
    $angka = number_format($angka);
    $angka = str_replace(',', '.', $angka);
    $angka ="$angka";
    return $angka;
}

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    if(isset($_GET['del'])) {
        $item_id = $_GET['item_id'];
        unset($_SESSION['cart'][$item_id]);
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempah Opung - Cart</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <div class="boxheader">
        <div class="nav_boxheader-kiri">
            <p>Rempah Opung</p>
            <p>hallo, user <?php echo $_SESSION['nama']; ?></p>
        </div>
        <div class="nav_boxheader-tengah">
            <a href="home.php">Beranda</a>
            <a href="">Tentang Kami</a>
            <a href="belanja.php">Belanja</a>
            <a href="blogrempah-login.php">Rempah</a>
        </div>
        <div class="nav_boxheader-kanan">
            <form method="get" action="search-login.php">
                <input style="width: 210px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; font-size: 16px; background-color:#d9d9d9; background-image: url('img/logo search1.png'); background-size: 20px 20px; background-position: 8px 10px;  background-repeat: no-repeat; padding: 10px 1px 10px 30px;" type="text" placeholder="Cari rempahmu di sini" name="search">
                <a href="cart.php">Cart</a>
                <a href="logout.php">Logout</a>
            </form>
        </div>
    </div>

    <div class="boxcontent">
        <img style="width: 80px; height: 80px;" src="img/logo cart.png" alt="">
        <h1 style="padding: 10px;">Cart</h1>
        <div class="boxcontent-cart">           

            <? 
                if(!empty($_SESSION['cart'])) {
                    foreach($_SESSION['cart'] as $item_id => $item_data) {
            ?>               
            <div class="boxcontent-cart-isi">
                <table
                    <tr>
                        <th width="231px">Rempah</th><th width="231px">Jumlah Rempah (Kg)</th><th width="231px">Total Harga</th><th width="231px">Aksi</th>
                    </tr>
                    <tr>
                        <td align="center">
                            
                            <img src="img/<?= $item_data['name'] ?>.jpg" style="width: 200px; height: 150px; padding-top:3px; border-radius: 5px 5px 0 0;">
                            <div class="container">
                                <h4 style="padding: 5px;"><b><?= $item_data['name'] ?></b></h4> 
                                <p style="padding: 5px;">Rp. <?= $item_data['price'] ?></p> 
                        </td>
                        <td align="center">
                            <div class="tombol">
                            <?= $item_data['quantity'] ?>
                            </div>
                        </td>
                        <td align="center">
                            <div class="tombol">
                            <?= $item_data['quantity'] * $item_data['price'] ?>
                            </div>
                        </td>
                        <td align="center" style="border-left: 1px solid;">
                            <a href='?del=true&item_id=<?= $item_data['id'] ?>' onclick="alert('TERPESAN!')" style="cursor:pointer; margin: 10px 0 10px 0; background:#d9d9d9; border-width: 1px;height: 40px;width: 170px;top: 123px;border-radius: 20px;" >Pesan</a>
                            <a href='?del=true&item_id=<?= $item_data['id'] ?>' style="cursor:pointer; margin: 10px 0 10px 0; background:#d9d9d9; border-width: 1px;height: 40px;width: 170px;top: 123px;border-radius: 20px;" >Hapus</a>
                        </td>
                    </tr>
                </table>                
            </div>
            <? 
              }
            } else {
              echo "<p>Your cart is empty.</p>";
            }
            ?>
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

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>