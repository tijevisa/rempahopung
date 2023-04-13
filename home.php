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
    <title>Rempah Opung - Beranda</title>
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
        <div class="boxcontent_konten0">
            <div class="boxcontent_konten0-teks">
                <h1 style="font-weight: 700; font-size: 25px;">Aplikasi Rempah Terlengkap dan Terpercaya di Indonesia</h1>
                <p style="padding-bottom: 8em;">Temukan rempah-rempah asli Indonesia pilihanmu!</p>
                <button type="submit" onclick="window.location.href='belanja.php'" style="font-weight: 700; font-size: 20px; width: 160px; height: 40px;">Beli Sekarang!</button>
            </div>
            <img src="img/rempah.jpg" alt="rempah" width="475px" height="292px">
        </div>
        <div class="boxcontent_konten1">
            <div class="boxcontent_konten1-terpopuler">
                <h1 style="font-weight: 700; font-size: 20px; padding-bottom: 1em;">Rempah Terpopuler</h1>
                <div class="slideshow-container">
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <div class="mySlides fade">
                        <div class="boxcontent_konten1-slide">
                            <div class="card">
                                <img src="img/cabai_keriting.jpg" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4><b>Cabai Keriting</b></h4> 
                                    <p>Rp. 80.000 /Kg</p> 
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/cabai_rawit_merah.jpg" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4><b>Cabai Rawit Merah</b></h4> 
                                    <p>Rp. 80.000 /Kg</p> 
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/bawang_putih.jpg" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4><b>Bawang Putih</b></h4> 
                                    <p>Rp. 80.000 /Kg</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="boxcontent_konten1-slide">
                            <div class="card">
                                <img src="img/bawang_merah.jpg" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4><b>Bawang Merah</b></h4> 
                                    <p>Rp. 80.000 /Kg</p> 
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/cabai_hijau.jpg" style="width: 200px; height: 150px; border-radius: 5px 5px 0 0;">
                                <div class="container">
                                    <h4><b>Cabai Hijau</b></h4> 
                                    <p>Rp. 80.000 /Kg</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>
        </div>
        <div class="boxcontent_konten2">
            <h1 style="font-weight: 700; font-size: 20px; padding-bottom: 1em;">Kategori</h1>
            <div class="boxcontent_konten2-button">
                <button type="submit" onclick="window.location.href='belanja.php'" style="width: 123px; height: 42px;">Semua</button>
                <button type="submit" onclick="window.location.href='rempah-kering.php'" style="width: 250px; height: 42px;">Rempah Kering</button>
                <button type="submit" onclick="window.location.href='rempah-basah.php'" style="width: 250px; height: 42px;">Rempah Basah</button>
                <div>
                    <input type="text" placeholder="Cari rempahmu di sini" name="search" style="width: 250px; height: 42px;">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="boxcontent_konten3">
            <div class="boxcontent_konten3-promo">
                <h1>Cabai, Jahe, Lengkuas</h1>
                <h1>Diskon 50%</h1>
                <p>Terms and Conditions</p>
            </div>
        </div>
        <div class="boxcontent_konten4">
            <h1>Mengapa di Toko Rempah Opung?</h1>
            <div class="boxcontent_konten4-isi">
                <div class="boxcontent_konten4-1">
                    <div class="lingkaran"></div>
                    <h2>Terjamin Aman</h2>
                    <p>deskripsi, penjelasan tentang terjamin aman</p>
                </div>
                <div class="boxcontent_konten4-2">
                    <div class="lingkaran"></div>
                    <h2>Rempah Berkualitas</h2>
                    <p>deskripsi, penjelasan tentang rempah berkualitas</p>
                </div>
                <div class="boxcontent_konten4-3">
                    <div class="lingkaran"></div>
                    <h2>Harga Terjangkau</h2>
                    <p>deskripsi, penjelasan tentang harga terjangkau</p>
                </div>
            </div>
        </div>
        <div class="boxcontent_konten5">
            <h1>Testimoni Pembeli</h1>
            <div class="boxcontent_konten5-isi">
                <div class="boxcontent_konten5-1">
                    <div class="lingkaran"></div>
                    <h2>Abdul, 22th</h2>
                    <p>deskripsi, penjelasan tentang pembeli atau pelanggan yang menggunakan website ini</p>
                </div>
                <div class="boxcontent_konten5-2">
                    <div class="lingkaran"></div>
                    <h2>Abdul, 22th</h2>
                    <p>deskripsi, penjelasan tentang pembeli atau pelanggan yang menggunakan website ini</p>
                </div>
                <div class="boxcontent_konten5-3">
                    <div class="lingkaran"></div>
                    <h2>Abdul, 22th</h2>
                    <p>deskripsi, penjelasan tentang pembeli atau pelanggan yang menggunakan website ini</p>
                </div>
            </div>
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