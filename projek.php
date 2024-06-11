<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>josie collection</title>
    <link rel="stylesheet" href="projek.css?v=<?php echo time(); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,500;0,600;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<header>
    <a href="#" class="logo"><img src="Black Beige Bold Luxury Professional Typography Monogram Logo.png"></a>

    <ul class="navmenu">
        <li><a href="#">home</a></li>
        <li><a href="tempat membeli/tempatmembeli.php">shop</a></li>
        <li><a href="#product">products</a></li>
        <li><a href="profil.php"><button>profil</button></a></li>
        <li><a href="caramembeli.php"><button>cara membeli</button></a></li>
    </ul>

        <a href="login1.php"><button>logout</button></a>
    </div>
</header>

<section class="main-home">
    <div class="main-text">
        <h5>josie collection</h5>
        <h1>website terbaik <br>untuk memesan baju sablon <br>dan memesan baju <br>untuk suatu kelompok </h1>
        <p>harga murah kualitas berharga</p>

        <a href="tempat membeli/tempatmembeli.php" class="main-btn">beli sekarang <i class='bx bx-right-arrow-circle'></i></a>
    </div>

    <div class="down-arrow">
        <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
    </div>
</section>

<section class="trending-product" id="trending">
    <div class="center-text">
        <h2>our trending <span>products</span></h2>
    </div>

    <div class="products" id="product">
        <div class="row">
        <?php
            session_start();
            include 'koneksi.php';

            $query = "SELECT * FROM baju";
            $result = mysqli_query($mysqli, $query);
            // Mengecek apakah ada error ketika menjalankan query
            if(!$result){
                die ("Query Error: ".mysqli_errno($mysqli)." - ".mysqli_error($mysqli));
            }

            while($data = mysqli_fetch_assoc($result)) {
        ?>
            <div class="cover-produk" style="display: flex; flex-direction: row;">
                <div class="produk">
                    <div class="product-text">
                        <img src="adminpenambah/<?php echo $data['image']; ?>" alt="<?php echo $data['image']; ?>" />
                        <h5><?php echo $data['name']; ?><br><?php echo $data['description']; ?></h5>
                    </div>
                    <div class="hearth-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price">
                        <h4>harga</h4>
                        <p>Rp.<?php echo number_format($data['price'], 0, ',', '.'); ?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Cara Memesan</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i> Pinterest</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
