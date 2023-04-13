<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rempah Opung - Login</title>
    <link rel="stylesheet" href="style.css">
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
            <form class="boxheader-form" method="get" action="search-no-login.php">
                <input style="width: 210px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; font-size: 16px; background-color:#d9d9d9; background-image: url('img/logo search1.png'); background-size: 20px 20px; background-position: 8px 10px;  background-repeat: no-repeat; padding: 10px 1px 10px 30px;" type="text" placeholder="Cari rempahmu di sini" name="search">
                <a href="#" onClick='alert("login terlebih dahulu!")'>Cart</a>
                <a href="index.php">Login</a>
            </form>
        </div>
    </div>

    <div class="boxcontent">
        <form class="boxcontent-form" action="login.php" method="post">
            <h1 style="padding: 1em;">Login</h1>
            <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <label>User Name</label>
            <input style="margin: 0.5em; height: 20px; width: 250px; padding: 5px;" type="text" name="user_name" placeholder="User Name">
            <label>Password</label>
            <input style="margin: 0.5em; height: 20px; width: 250px; padding: 5px;" type="password" name="password" placeholder="Password">
            <button type="submit" style="margin: 0.5em; padding: 1px; height: 30px; width: 200px;">Login</button>
            <a href="regis.php" style="padding-bottom: 10px;">Registrasi</a>
        </form>
    </div>
    
    <div class="boxfooter">
        <h1 style="padding: 0.5em;">Hubungi Kami</h1>
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