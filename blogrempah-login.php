<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempah Opung - Rempah</title>
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
        <div class="boxcontent-blog">
            <h1 style="text-align: center;">Rempah</h1><br>
            <h2>Pengertian</h2><br>
            <p>Rempah-rempah adalah bagian tumbuhan yang beraroma atau berasa kuat yang digunakan dalam jumlah kecil di makanan sebagai pengawet atau perisa dalam masakan. Rempah-rempah biasanya dibedakan dengan tanaman lain yang digunakan untuk tujuan yang mirip, seperti tanaman obat, sayuran beraroma, dan buah kering.</p><br>
            <img src="img/rempah.jpg" style="height: 292px; width: 475px; border-radius: 10px;"><br>
            <h2>Kegunaan</h2><br>
            <p>Fungsi utama rempah-rempah yakni sebagai perasa makanan. Rempah-rempah juga digunakan sebagai bahan baku parfum kosmetik dan dupa. Sejak awal ditemukan, rempah-rempah juga menjadi salah satu hal penting dalam pengobatan medis. Sifatnya yang mahal, langka, dan eksoktik seringkali dikaitkan sebagai simbol kekayaan dan kelas sosial.</p><br>
            <h2>Sejarah</h2><br>
            <p>Fungsi utama rempah-rempah yakni sebagai perasa makanan. Rempah-rempah juga digunakan sebagai bahan baku parfum kosmetik dan dupa. Sejak awal ditemukan, rempah-rempah juga menjadi salah satu hal penting dalam pengobatan medis. Sifatnya yang mahal, langka, dan eksoktik seringkali dikaitkan sebagai simbol kekayaan dan kelas sosial.</p><br>
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