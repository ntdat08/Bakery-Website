<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "producttb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false) {
        die("Lỗi truy vấn: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: shopping_cart/index.php");
        exit(); 
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
$conn->close();
?>
<?php
$string =  '<!DOCTYPE html>'.
'<html lang="en">'.
''.
'<head>'.
'    <meta charset="UTF-8">'.
'    <meta http-equiv="X-UA-Compatible" content="IE=edge">'.
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'    <title>Dahuhi Bakery</title>'.
'    <!-- for icons  -->'.
'    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">'.
'    <!-- bootstrap  -->'.
'    <link rel="stylesheet" href="assets/css/bootstrap.min.css">'.
'    <!-- for swiper slider  -->'.
'    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">'.
''.
'    <!-- fancy box  -->'.
'    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">'.
'    <!-- custom css  -->'.
'    <link rel="stylesheet" href="style.css">'.
'</head>'.
''.
'<body class="body-fixed">'.
'    <!-- start of header  -->'.
'    <header class="site-header">'.
'        <div class="container">'.
'            <div class="row">'.
'                <div class="col-lg-2">'.
'                    <div class="header-logo">'.
'                        <a href="index.html">'.
'                            <img src="logo.png" width="160" height="36" alt="Logo">'.
'                        </a>'.
'                    </div>'.
'                </div>'.
'                <div class="col-lg-10">'.
'                    <div class="main-navigation">'.
'                        <button class="menu-toggle"><span></span><span></span></button>'.
'                        <nav class="header-menu">'.
'                            <ul class="menu food-nav-menu">'.
'                                <li><a href="#home">Home</a></li>'.
'                                <li><a href="#about">About</a></li>'.
'                                <li><a href="#menu">Menu</a></li>'.
'                                <li><a href="#gallery">Gallery</a></li>'.
'                                <li><a href="#blog">Blog</a></li>'.
'                                <li><a href="#contact">Contact</a></li>'.
'                            </ul>'.
'                        </nav>'.
'                        <div class="header-right">'.
'                            <form action="#" class="header-search-form for-des">'.
'                                <input type="search" class="form-input" placeholder="Search Here...">'.
'                                <button type="submit">'.
'                                    <i class="uil uil-search"></i>'.
'                                </button>'.
'                            </form>'.
'                            <a href="javascript:void(0)" class="header-btn header-cart">'.
'                                <i class="uil uil-shopping-bag"></i>'.
'                                <span class="cart-number">3</span>'.
'                            </a>'.
'                            <a href="javascript:void(0)" class="header-btn" id="login-btn">'.
'                                <i class="uil uil-user-md"></i>'.
'                            </a>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </div>'.
'        </div>'.
'    </header>'.
'    <!-- header ends  -->'.
'     <!-- form dang nhap -->'.
'<div class="login-form-container" id="login-form">'.
'    <form action="index.php" method="POST" class="login-form">'.
'          <h3>Login Now</h3>'.
'          <input type="text" name="username" placeholder="Enter Your Username" class="box" required>'.
'          <input type="password" name="password" placeholder="Enter Your Password" class="box" required>'.
'          <p>Forget Your Password <a href="#">Click Here</a></p>'.
'          <p>Don\'t Have An Account <a href="#" id="create-link">Create Now</a></p>'.
'          <input type="submit" value="Login Now" class="btn">'.
'       </form>'.
'</div>'.
'<!-- form đăng kí -->'.
'<div class="register-form-container" id="register-form">'.
'  <form action="#" class="register-form">'.
'      <h3>Register Now</h3>'.
'      <input type="text" placeholder="Enter Your Name" class="box" required>'.
'      <input type="email" placeholder="Enter Your Email" class="box" required>'.
'      <input type="password" placeholder="Create a Password" class="box" required>'.
'      <p>Already Have An Account? <a href="#" id="login-link">Login Here</a></p>'.
'      <input type="submit" value="Register Now" class="btn">'.
'  </form>'.
'</div>'.
''.
'    <div id="viewport">'.
'        <div id="js-scroll-content">'.
'            <section class="main-banner" id="home">'.
'                <div class="js-parallax-scene">'.
'                    <div class="banner-shape-1 w-100" data-depth="0.30">'.
'                        <img src="assets/images/berry.png" alt="">'.
'                    </div>'.
'                    <div class="banner-shape-2 w-100" data-depth="0.25">'.
'                        <img src="assets/images/leaf.png" alt="">'.
'                    </div>'.
'                </div>'.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-6">'.
'                                <div class="banner-text">'.
'                                    <h1 class="h1-title">'.
'                                        Welcome to our'.
'                                        <span>Dahuhi</span>'.
'                                        Bakery.'.
'                                    </h1>'.
'                                    <p>Welcome to Dahuhi Bakery – where we bring you freshly baked goods, handcrafted with the finest ingredients.'.
'                                     Enjoy the sweet and delicate flavors that only Dahu Bakery can offer!</p>'.
'                                    <div class="banner-btn mt-4">'.
'                                        <a href="#menu" class="sec-btn">Check our Menu</a>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                            <div class="col-lg-6">'.
'                                <div class="banner-img-wp">'.
'                                    <div class="banner-img" style="background-image: url(assets/images/macaron.webp);">'.
'                                    </div>'.
'                                </div>'.
'                                <div class="banner-img-text mt-4 m-auto">'.
'                                    <h5 class="h5-title">Macaron</h5>'.
'                                    <p>Our macarons are a symphony of delicate flavors and colors, crafted to perfection for a sweet indulgence that melts in your mouth.</p>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
''.
'            <section class="brands-sec">'.
'                <div class="container">'.
'                    <div class="row">'.
'                        <div class="col-lg-12">'.
'                            <div class="brand-title mb-5">'.
'                                <h5 class="h5-title">A Taste of Our Creations</h5>'.
'                            </div>'.
'                            <div class="brands-row">'.
'                                <div class="brands-box">'.
'                                    <img src="assets/images/brands/b1.png" alt="">'.
'                                </div>'.
'                                <div class="brands-box">'.
'                                    <img src="assets/images/brands/b2.png" alt="">'.
'                                </div>'.
'                                <div class="brands-box">'.
'                                    <img src="assets/images/brands/b3.png" alt="">'.
'                                </div>'.
'                                <div class="brands-box">'.
'                                    <img src="assets/images/brands/b4.png" alt="">'.
'                                </div>'.
'                                <div class="brands-box">'.
'                                    <img src="assets/images/brands/b5.png" alt="">'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="about-sec section" id="about">'.
'                <div class="container">'.
'                    <div class="row">'.
'                        <div class="col-lg-12">'.
'                            <div class="sec-title text-center mb-5">'.
'                                <p class="sec-sub-title mb-3">About Us</p>'.
'                                <h2 class="h2-title">Discover our <span>bakery story</span></h2>'.
'                                <div class="sec-title-shape mb-4">'.
'                                    <img src="assets/images/title-shape.svg" alt="">'.
'                                </div>'.
'                                <p>At Dahuhi Bakery, we believe that every cake tells a story. '.
'                                Founded with a passion for baking, we create delightful treats that bring joy to every celebration.'.
'                                Our journey began with a simple dream: to craft high-quality pastries using only the finest ingredients.'.
'                                From our handcrafted cakes to our vibrant cupcakes, each creation is made with love and attention to detail. '.
'                                Join us in celebrating life\'s sweetest moments with our delectable desserts!</p>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                    <div class="row">'.
'                        <div class="col-lg-8 m-auto">'.
'                            <div class="about-video">'.
'                                <div class="about-video-img" style="background-image: url(assets/images/about.png);">'.
'                                </div>'.
'                                <div class="play-btn-wp">'.
'                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">'.
'                                        <i class="uil uil-play"></i>'.
''.
'                                    </a>'.
'                                    <span>Watch The Recipe</span>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section style="background-image: url(assets/images/menu-bg.png);"'.
'                class="our-menu section bg-light repeat-img" id="menu">'.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12">'.
'                                <div class="sec-title text-center mb-5">'.
'                                    <p class="sec-sub-title mb-3">our menu</p>'.
'                                    <h2 class="h2-title">wake up early, <span>enjoy fresh & delicious treats</span></h2>'.
'                                    <div class="sec-title-shape mb-4">'.
'                                        <img src="assets/images/title-shape.svg" alt="">'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                        <div class="menu-tab-wp">'.
'                            <div class="row">'.
'                                <div class="col-lg-12 m-auto">'.
'                                    <div class="menu-tab text-center">'.
'                                        <ul class="filters">'.
'                                            <div class="filter-active"></div>'.
'                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">'.
'                                                <img src="assets/images/menu-1.png" alt="">'.
'                                                All'.
'                                            </li>'.
'                                            <li class="filter" data-filter=".breakfast">'.
'                                                <img src="assets/images/menu-2.png" alt="">'.
'                                                Breakfast'.
'                                            </li>'.
'                                            <li class="filter" data-filter=".lunch">'.
'                                                <img src="assets/images/menu-3.png" alt="">'.
'                                                Lunch'.
'                                            </li>'.
'                                            <li class="filter" data-filter=".dinner">'.
'                                                <img src="assets/images/menu-4.png" alt="">'.
'                                                Dinner'.
'                                            </li>'.
'                                        </ul>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                        <div class="menu-list-row">'.
'                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/1.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            5'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Whole Wheat Muffin</h3>'.
'                                            <p>130 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Muffin</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>2</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 499</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
''.
'                                <!-- 2 -->'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/2.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            4.3'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Banana Oatmeal Cookie</h3>'.
'                                            <p>110 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Cookie</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>1</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 359</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <!-- 3 -->'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/3.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            4'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Spinach & Feta Puff Pastry</h3>'.
'                                            <p>150 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Puff Pastry</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>2</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 149</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
''.
'                                <!-- 4 -->'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/4.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            4.5'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Vegetable Quiche</h3>'.
'                                            <p>180 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Quiche</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>2</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 379</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
''.
'                                <!-- 5 -->'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/5.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            5'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Fruit Tart</h3>'.
'                                            <p>200 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Tart</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>2</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 99</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <!-- 6 -->'.
'                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">'.
'                                    <div class="dish-box text-center">'.
'                                        <div class="dist-img">'.
'                                            <img src="assets/images/dish/6.png" alt="">'.
'                                        </div>'.
'                                        <div class="dish-rating">'.
'                                            5'.
'                                            <i class="uil uil-star"></i>'.
'                                        </div>'.
'                                        <div class="dish-title">'.
'                                            <h3 class="h3-title">Chocolate Soufflé</h3>'.
'                                            <p>170 calories</p>'.
'                                        </div>'.
'                                        <div class="dish-info">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <p>Type</p>'.
'                                                    <b>Soufflé</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <p>Persons</p>'.
'                                                    <b>2</b>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="dist-bottom-row">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <b>Rs. 159</b>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <button class="dish-add-btn">'.
'                                                        <i class="uil uil-plus"></i>'.
'                                                    </button>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="two-col-sec section">'.
'                <div class="container">'.
'                    <div class="row align-items-center">'.
'                        <div class="col-lg-5">'.
'                            <div class="sec-img mt-5">'.
'                                <img src="assets/images/bacon.jpg" alt="">'.
'                            </div>'.
'                        </div>'.
'                        <div class="col-lg-7">'.
'                            <div class="sec-text">'.
'                                <h2 class="xxl-title">Chicken Bacon Sandwich</h2>'.
'                                <p>The Chicken Bacon Sandwich is a delicious and enticing dish. Tender grilled chicken breast, golden and juicy,'.
'                                 is topped with crispy bacon, creating a perfect blend of savory flavors. Accompanied by fresh greens and a light mayonnaise sauce,'.
'                                 this sandwich is not only filling but also ideal for a quick meal.</p>'.
'                                <p>Enjoy the Chicken Bacon Sandwich on a summer afternoon with a refreshing drink for a'.
'                                     wonderful culinary experience!'.
'                                </p>'.
''.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="two-col-sec section pt-0">'.
'                <div class="container">'.
'                    <div class="row align-items-center">'.
'                        <div class="col-lg-6 order-lg-1 order-2">'.
'                            <div class="sec-text">'.
'                                <h2 class="xxl-title">Chocolate Lava Cake</h2>'.
'                                <p>Indulge in the rich and decadent Chocolate Lava Cake, a delightful dessert that will satisfy any sweet tooth. '.
'                                    With its soft, gooey center that flows like molten chocolate, this cake is a true chocolate lover\'s dream. '.
'                                    Baked to perfection, '.
'                                    it features a delicate outer layer that contrasts beautifully with the warm, molten filling.</p>'.
'                                <p>Served warm with a scoop of vanilla ice cream on the side, the Chocolate Lava Cake offers a '.
'                                delightful balance of flavors and textures. Each bite is a heavenly experience, making it the'.
'                                 perfect ending to any meal!'.
'                                </p>'.
'                            </div>'.
'                        </div>'.
'                        <div class="col-lg-6 order-lg-2 order-1">'.
'                            <div class="sec-img">'.
'                                <img src="assets/images/lava.jpg" alt="">'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="book-table section bg-light">'.
'                <div class="book-table-shape">'.
'                    <img src="assets/images/table-leaves-shape.png" alt="">'.
'                </div>'.
''.
'                <div class="book-table-shape book-table-shape2">'.
'                    <img src="assets/images/table-leaves-shape.png" alt="">'.
'                </div>'.
''.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12">'.
'                                <div class="sec-title text-center mb-5">'.
'                                    <p class="sec-sub-title mb-3">Book Table</p>'.
'                                    <h2 class="h2-title">Opening Table</h2>'.
'                                    <div class="sec-title-shape mb-4">'.
'                                        <img src="assets/images/title-shape.svg" alt="">'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
''.
'                        <div class="book-table-info">'.
'                            <div class="row align-items-center">'.
'                                <div class="col-lg-4">'.
'                                    <div class="table-title text-center">'.
'                                        <h3>Monday to Thursday</h3>'.
'                                        <p>9:00 am - 22:00 pm</p>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4">'.
'                                    <div class="call-now text-center">'.
'                                        <i class="uil uil-phone"></i>'.
'                                        <a href="tel:+91-8866998866">+84 - 09456781977</a>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4">'.
'                                    <div class="table-title text-center">'.
'                                        <h3>Friday to Sunday</h3>'.
'                                        <p>11:00 am to 20:00 pm</p>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
''.
'                        <div class="row" id="gallery">'.
'                            <div class="col-lg-10 m-auto">'.
'                                <div class="book-table-img-slider" id="icon">'.
'                                    <div class="swiper-wrapper">'.
'                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt1.jpg)"></a>'.
'                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt2.jpg)"></a>'.
'                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt3.jpg)"></a>'.
'                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt4.jpg)"></a>'.
'                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt1.jpg)"></a>'.
'                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt2.jpg)"></a>'.
'                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt3.jpg)"></a>'.
'                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"'.
'                                            class="book-table-img back-img swiper-slide"'.
'                                            style="background-image: url(assets/images/bt4.jpg)"></a>'.
'                                    </div>'.
''.
'                                    <div class="swiper-button-wp">'.
'                                        <div class="swiper-button-prev swiper-button">'.
'                                            <i class="uil uil-angle-left"></i>'.
'                                        </div>'.
'                                        <div class="swiper-button-next swiper-button">'.
'                                            <i class="uil uil-angle-right"></i>'.
'                                        </div>'.
'                                    </div>'.
'                                    <div class="swiper-pagination"></div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
''.
''.
'                    </div>'.
'                </div>'.
''.
'            </section>'.
''.
'            <section class="our-team section">'.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12">'.
'                                <div class="sec-title text-center mb-5">'.
'                                    <p class="sec-sub-title mb-3">Our Team</p>'.
'                                    <h2 class="h2-title">Meet our Chefs</h2>'.
'                                    <div class="sec-title-shape mb-4">'.
'                                        <img src="assets/images/title-shape.svg" alt="">'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                        <div class="row team-slider">'.
'                            <div class="swiper-wrapper">'.
'                                <div class="col-lg-4 swiper-slide">'.
'                                    <div class="team-box text-center">'.
'                                        <div style="background-image: url(assets/images/chef/c1.jpg);"'.
'                                            class="team-img back-img">'.
''.
'                                        </div>'.
'                                        <h3 class="h3-title">Nilay Hirpara</h3>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4 swiper-slide">'.
'                                    <div class="team-box text-center">'.
'                                        <div style="background-image: url(assets/images/chef/c2.jpg);"'.
'                                            class="team-img back-img">'.
''.
'                                        </div>'.
'                                        <h3 class="h3-title">Ravi Kumawat</h3>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4 swiper-slide">'.
'                                    <div class="team-box text-center">'.
'                                        <div style="background-image: url(assets/images/chef/c3.jpg);"'.
'                                            class="team-img back-img">'.
''.
'                                        </div>'.
'                                        <h3 class="h3-title">Navnit Kumar</h3>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4 swiper-slide">'.
'                                    <div class="team-box text-center">'.
'                                        <div style="background-image: url(assets/images/chef/c4.jpg);"'.
'                                            class="team-img back-img">'.
''.
'                                        </div>'.
'                                        <h3 class="h3-title">Pranav Badgal</h3>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4 swiper-slide">'.
'                                    <div class="team-box text-center">'.
'                                        <div style="background-image: url(assets/images/chef/c5.jpg);"'.
'                                            class="team-img back-img">'.
''.
'                                        </div>'.
'                                        <h3 class="h3-title">Priyotosh Dey</h3>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                            <div class="swiper-button-wp">'.
'                                <div class="swiper-button-prev swiper-button">'.
'                                    <i class="uil uil-angle-left"></i>'.
'                                </div>'.
'                                <div class="swiper-button-next swiper-button">'.
'                                    <i class="uil uil-angle-right"></i>'.
'                                </div>'.
'                            </div>'.
'                            <div class="swiper-pagination"></div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="testimonials section bg-light">'.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12">'.
'                                <div class="sec-title text-center mb-5">'.
'                                    <p class="sec-sub-title mb-3">What they say</p>'.
'                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>'.
'                                    <div class="sec-title-shape mb-4">'.
'                                        <img src="assets/images/title-shape.svg" alt="">'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                        <div class="row">'.
'                            <div class="col-lg-5">'.
'                                <div class="testimonials-img">'.
'                                    <img src="assets/images/testimonial-img.png" alt="">'.
'                                </div>'.
'                            </div>'.
'                            <div class="col-lg-7">'.
'                                <div class="row">'.
'                                    <div class="col-sm-6">'.
'                                        <div class="testimonials-box">'.
'                                            <div class="testimonial-box-top">'.
'                                                <div class="testimonials-box-img back-img"'.
'                                                    style="background-image: url(assets/images/testimonials/t1.jpg);">'.
'                                                </div>'.
'                                                <div class="star-rating-wp">'.
'                                                    <div class="star-rating">'.
'                                                        <span class="star-rating__fill" style="width:85%"></span>'.
'                                                    </div>'.
'                                                </div>'.
''.
'                                            </div>'.
'                                            <div class="testimonials-box-text">'.
'                                                <h3 class="h3-title">'.
'                                                    Nilay Hirpara'.
'                                                </h3>'.
'                                                <p>The cakes from Dahuhi Bakery are simply divine! Each bite melts in your mouth and leaves you wanting more.</p>'.
'                                            </div>'.
'                                        </div>'.
'                                    </div>'.
'                                    <div class="col-sm-6">'.
'                                        <div class="testimonials-box">'.
'                                            <div class="testimonial-box-top">'.
'                                                <div class="testimonials-box-img back-img"'.
'                                                    style="background-image: url(assets/images/testimonials/t2.jpg);">'.
'                                                </div>'.
'                                                <div class="star-rating-wp">'.
'                                                    <div class="star-rating">'.
'                                                        <span class="star-rating__fill" style="width:80%"></span>'.
'                                                    </div>'.
'                                                </div>'.
''.
'                                            </div>'.
'                                            <div class="testimonials-box-text">'.
'                                                <h3 class="h3-title">'.
'                                                    Ravi Kumawat'.
'                                                </h3>'.
'                                                <p>I love the variety of flavors available! Their cupcakes are a hit at every party I throw!</p>'.
'                                            </div>'.
'                                        </div>'.
'                                    </div>'.
'                                    <div class="col-sm-6">'.
'                                        <div class="testimonials-box">'.
'                                            <div class="testimonial-box-top">'.
'                                                <div class="testimonials-box-img back-img"'.
'                                                    style="background-image: url(assets/images/testimonials/t3.jpg);">'.
'                                                </div>'.
'                                                <div class="star-rating-wp">'.
'                                                    <div class="star-rating">'.
'                                                        <span class="star-rating__fill" style="width:89%"></span>'.
'                                                    </div>'.
'                                                </div>'.
''.
'                                            </div>'.
'                                            <div class="testimonials-box-text">'.
'                                                <h3 class="h3-title">'.
'                                                    Navnit Kumar'.
'                                                </h3>'.
'                                                <p>The pastries are always fresh and delicious. I can’t resist grabbing a few whenever I pass by!</p>'.
'                                            </div>'.
'                                        </div>'.
'                                    </div>'.
'                                    <div class="col-sm-6">'.
'                                        <div class="testimonials-box">'.
'                                            <div class="testimonial-box-top">'.
'                                                <div class="testimonials-box-img back-img"'.
'                                                    style="background-image: url(assets/images/testimonials/t4.jpg);">'.
'                                                </div>'.
'                                                <div class="star-rating-wp">'.
'                                                    <div class="star-rating">'.
'                                                        <span class="star-rating__fill" style="width:100%"></span>'.
'                                                    </div>'.
'                                                </div>'.
''.
'                                            </div>'.
'                                            <div class="testimonials-box-text">'.
'                                                <h3 class="h3-title">'.
'                                                    Somyadeep Bhowmik'.
'                                                </h3>'.
'                                                <p>Dahuhi Bakery has the best vegan options in town. Finally, a place where I can enjoy treats without compromising!</p>'.
'                                            </div>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'            </section>'.
''.
'            <section class="faq-sec section-repeat-img" style="background-image: url(assets/images/faq-bg.png);">'.
'                <div class="sec-wp">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12">'.
'                                <div class="sec-title text-center mb-5">'.
'                                    <p class="sec-sub-title mb-3">faqs</p>'.
'                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>'.
'                                    <div class="sec-title-shape mb-4">'.
'                                        <img src="assets/images/title-shape.svg" alt="">'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
''.
'                        <div class="faq-row">'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">What are the operating hours?</h4>'.
'                                <p>Our bakery is open from 7:00 AM to 7:00 PM every day, ensuring fresh treats all day long.</p>'.
'                            </div>'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">How can I request a refund for my order?</h4>'.
'                                <p>If you\'re not satisfied with your order, please contact us within 24 hours, '.
'                                    and we\'ll be happy to assist you with a refund or exchange.</p>'.
'                            </div>'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">How long will it take for my baked goods to be delivered?</h4>'.
'                                <p>Delivery times vary by location, but you can typically expect your order to arrive within 30 to 60 minutes.</p>'.
'                            </div>'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">Do you offer both vegetarian and non-vegetarian baked goods?</h4>'.
'                                <p>Yes, we offer a variety of both vegetarian and non-vegetarian options, including eggless cakes and pastries.</p>'.
'                            </div>'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">What is the delivery fee for baked goods?</h4>'.
'                                <p>Our delivery fee is $3 for local deliveries. For orders over $50, delivery is free!</p>'.
'                            </div>'.
'                            <div class="faq-box">'.
'                                <h4 class="h4-title">Who is eligible for membership rewards?</h4>'.
'                                <p>Anyone who creates an account on our website is eligible to join our membership rewards program,'.
'                                     offering exclusive discounts and early access to new products. </p>'.
'                            </div>'.
'                        </div>'.
''.
'                    </div>'.
'                </div>'.
''.
'            </section>'.
''.
''.
'            <div class="bg-pattern bg-light repeat-img"'.
'                style="background-image: url(assets/images/blog-pattern-bg.png);">'.
'                <section class="blog-sec section" id="blog">'.
'                    <div class="sec-wp">'.
'                        <div class="container">'.
'                            <div class="row">'.
'                                <div class="col-lg-12">'.
'                                    <div class="sec-title text-center mb-5">'.
'                                        <p class="sec-sub-title mb-3">Our blog</p>'.
'                                        <h2 class="h2-title">Latest Publications</span></h2>'.
'                                        <div class="sec-title-shape mb-4">'.
'                                            <img src="assets/images/title-shape.svg" alt="">'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                            <div class="row">'.
'                                <div class="col-lg-4">'.
'                                    <div class="blog-box">'.
'                                        <div class="blog-img back-img"'.
'                                            style="background-image: url(assets/images/blog/blog1.jpg);"></div>'.
'                                        <div class="blog-text">'.
'                                            <p class="blog-date">September.15.2024</p>'.
'                                            <a href="#" class="h4-title">How to Bake the Perfect Chocolate Cake.</a>'.
'                                            <p>This blog can provide a step-by-step guide on how to make a moist chocolate cake.'.
'                                             You can share tips on selecting ingredients, baking times, and decorating the cake to make it more appealing.</p>'.
'                                            <a href="#" class="sec-btn">Read More</a>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4">'.
'                                    <div class="blog-box">'.
'                                        <div class="blog-img back-img"'.
'                                            style="background-image: url(assets/images/blog/blog2.jpg);"></div>'.
'                                        <div class="blog-text">'.
'                                            <p class="blog-date">October.1.2024</p>'.
'                                            <a href="#" class="h4-title">The Magic of Cupcakes: A Flavor for Every Occasion.</a>'.
'                                            <p>This blog can explore the variety of cupcakes, from traditional flavors like vanilla and chocolate to unique flavors like lemon or red velvet.'.
'                                             It could also include tips on how to beautifully decorate cupcakes.</p>'.
'                                            <a href="#" class="sec-btn">Read More</a>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-4">'.
'                                    <div class="blog-box">'.
'                                        <div class="blog-img back-img"'.
'                                            style="background-image: url(assets/images/blog/blog3.jpg);"></div>'.
'                                        <div class="blog-text">'.
'                                            <p class="blog-date">November.4.2024</p>'.
'                                            <a href="#" class="h4-title">Chicken burger with double nuggets</a>'.
'                                            <p>This blog can introduce vegan desserts, such as chocolate mousse cake or coconut sponge cake,'.
'                                             along with recipes and the health benefits of a plant-based diet.</p>'.
'                                            <a href="#" class="sec-btn">Read More</a>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </section>'.
''.
'                <section class="newsletter-sec section pt-0">'.
'                    <div class="sec-wp">'.
'                        <div class="container">'.
'                            <div class="row">'.
'                                <div class="col-lg-8 m-auto">'.
'                                    <div class="newsletter-box text-center back-img white-text"'.
'                                        style="background-image: url(assets/images/news.jpg);">'.
'                                        <div class="bg-overlay dark-overlay"></div>'.
'                                        <div class="sec-wp">'.
'                                            <div class="newsletter-box-text">'.
'                                                <h2 class="h2-title">Subscribe our newsletter</h2>'.
'                                                <p>Join our community to receive exclusive offers, new product updates, '.
'                                                    and delicious baking tips directly to your inbox!</p>'.
'                                            </div>'.
'                                            <form action="#" class="newsletter-form">'.
'                                                <input type="email" class="form-input"'.
'                                                    placeholder="Enter your Email Here" required>'.
'                                                <button type="submit" class="sec-btn primary-btn">Submit</button>'.
'                                            </form>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </section>'.
'            </div>'.
''.
'            <!-- footer starts  -->'.
'            <footer class="site-footer" id="contact">'.
'                <div class="top-footer section">'.
'                    <div class="sec-wp">'.
'                        <div class="container">'.
'                            <div class="row">'.
'                                <div class="col-lg-4">'.
'                                    <div class="footer-info">'.
'                                        <div class="footer-logo">'.
'                                            <a href="index.html">'.
'                                                <img src="logo.png" alt="">'.
'                                            </a>'.
'                                        </div>'.
'                                        <p>Follow us on social media to stay updated with our latest creations and offers!'.
'                                        </p>'.
'                                        <div class="social-icon">'.
'                                            <ul>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-facebook-f"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-instagram"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-github-alt"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                                <li>'.
'                                                    <a href="#">'.
'                                                        <i class="uil uil-youtube"></i>'.
'                                                    </a>'.
'                                                </li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                                <div class="col-lg-8">'.
'                                    <div class="footer-flex-box">'.
'                                        <div class="footer-table-info">'.
'                                            <h3 class="h3-title">open hours</h3>'.
'                                            <ul>'.
'                                                <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>'.
'                                                <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="footer-menu food-nav-menu">'.
'                                            <h3 class="h3-title">Links</h3>'.
'                                            <ul class="column-2">'.
'                                                <li>'.
'                                                    <a href="#home" class="footer-active-menu">Home</a>'.
'                                                </li>'.
'                                                <li><a href="#about">About</a></li>'.
'                                                <li><a href="#menu">Menu</a></li>'.
'                                                <li><a href="#gallery">Gallery</a></li>'.
'                                                <li><a href="#blog">Blog</a></li>'.
'                                                <li><a href="#contact">Contact</a></li>'.
'                                            </ul>'.
'                                        </div>'.
'                                        <div class="footer-menu">'.
'                                            <h3 class="h3-title">Company</h3>'.
'                                            <ul>'.
'                                                <li><a href="#">Terms & Conditions</a></li>'.
'                                                <li><a href="#">Privacy Policy</a></li>'.
'                                                <li><a href="#">Cookie Policy</a></li>'.
'                                            </ul>'.
'                                        </div>'.
'                                    </div>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                    </div>'.
'                </div>'.
'                <div class="bottom-footer">'.
'                    <div class="container">'.
'                        <div class="row">'.
'                            <div class="col-lg-12 text-center">'.
'                                <div class="copyright-text">'.
'                                    <p>All Content &copy; 2024 <span class="name">Dahuhi Bakery.</span>All Rights Reserved.'.
'                                    </p>'.
'                                </div>'.
'                            </div>'.
'                        </div>'.
'                        <button class="scrolltop"><i class="uil uil-angle-up"></i></button>'.
'                    </div>'.
'                </div>'.
'            </footer>'.
''.
''.
''.
'        </div>'.
'    </div>'.
''.
''.
''.
''.
''.
'    <!-- jquery  -->'.
'    <script src="assets/js/jquery-3.5.1.min.js"></script>'.
'    <!-- bootstrap -->'.
'    <script src="assets/js/bootstrap.min.js"></script>'.
'    <script src="assets/js/popper.min.js"></script>'.
''.
'    <!-- fontawesome  -->'.
'    <script src="assets/js/font-awesome.min.js"></script>'.
''.
'    <!-- swiper slider  -->'.
'    <script src="assets/js/swiper-bundle.min.js"></script>'.
''.
'    <!-- mixitup -- filter  -->'.
'    <script src="assets/js/jquery.mixitup.min.js"></script>'.
''.
'    <!-- fancy box  -->'.
'    <script src="assets/js/jquery.fancybox.min.js"></script>'.
''.
'    <!-- parallax  -->'.
'    <script src="assets/js/parallax.min.js"></script>'.
''.
'    <!-- gsap  -->'.
'    <script src="assets/js/gsap.min.js"></script>'.
''.
'    <!-- scroll trigger  -->'.
'    <script src="assets/js/ScrollTrigger.min.js"></script>'.
'    <!-- scroll to plugin  -->'.
'    <script src="assets/js/ScrollToPlugin.min.js"></script>'.
'    <!-- rellax  -->'.
'    <!-- <script src="assets/js/rellax.min.js"></script> -->'.
'    <!-- <script src="assets/js/rellax-custom.js"></script> -->'.
'    <!-- smooth scroll  -->'.
'    <script src="assets/js/smooth-scroll.js"></script>'.
'    <!-- custom js  -->'.
'    <script src="main.js"></script>'.
'        '.
'</body>'.
''.
'</html>';

 echo $string; 
?>