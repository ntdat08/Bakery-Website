<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahuhi Bakery</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.php"> 
                            <img src="logo.png" width="160" height="36" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            <form action="#" class="header-search-form for-des">
                                <input type="search" class="form-input" placeholder="Search Here...">
                                <button type="submit">
                                    <i class="uil uil-search"></i>
                                </button>
                            </form>
                            <a href="javascript:void(0)" class="header-btn header-cart">
                                <i class="uil uil-shopping-bag"></i>
                                <span class="cart-number">3</span>
                            </a>
                            <a href="javascript:void(0)" class="header-btn" id="login-btn">
                                <i class="uil uil-user-md"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <!-- form dang nhap -->
    <div class="login-form-container" id="login-form">
        <form action="login.php" method="POST" class="login-form">
            <h3>Login Now</h3>
            <input type="email" name="email" placeholder="Enter Your Email" class="box" required>
            <input type="password" name="password" placeholder="Enter Your Password" class="box" required>
            <p>Forget Your Password <a href="#">Click Here</a></p>
            <p>Don't Have An Account <a href="#" id="create-link">Create Now</a></p>
            <input type="submit" value="Login Now" class="btn">
        </form>
    </div>

    <!-- form đăng kí -->
    <div class="register-form-container" id="register-form">
        <form action="register.php" method="POST" class="register-form">
            <h3>Register Now</h3>
            <input type="text" name="name" placeholder="Enter Your Name" class="box" required>
            <input type="email" name="email" placeholder="Enter Your Email" class="box" required>
            <input type="password" name="password" placeholder="Create a Password" class="box" required>
            <p>Already Have An Account? <a href="#" id="login-link">Login Here</a></p>
            <input type="submit" value="Register Now" class="btn">
        </form>
    </div>

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to our
                                        <span>Dahuhi</span>
                                        Bakery.
                                    </h1>
                                    <p>Welcome to Dahuhi Bakery – where we bring you freshly baked goods, handcrafted with the finest ingredients.
                                        Enjoy the sweet and delicate flavors that only Dahu Bakery can offer!</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Check our Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(assets/images/macaron.webp);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">Macaron</h5>
                                    <p>Our macarons are a symphony of delicate flavors and colors, crafted to perfection for a sweet indulgence that melts in your mouth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">A Taste of Our Creations</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="assets/images/brands/b1.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b2.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b3.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b4.png" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="assets/images/brands/b5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
                                <h2 class="h2-title">Discover our <span>bakery story</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <p>At Dahuhi Bakery, we believe that every cake tells a story. 
                                Founded with a passion for baking, we create delightful treats that bring joy to every celebration.
                                Our journey began with a simple dream: to craft high-quality pastries using only the finest ingredients.
                                From our handcrafted cakes to our vibrant cupcakes, each creation is made with love and attention to detail. 
                                Join us in celebrating life's sweetest moments with our delectable desserts!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(assets/images/about.png);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>
                                    </a>
                                    <span>Watch The Recipe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <script src="app.js"></script>
<?php
$menuItems = [
    [
        'title' => 'Whole Wheat Muffin',
        'calories' => 130,
        'type' => 'Muffin',
        'persons' => 2,
        'price' => 499,
        'rating' => 5,
        'image' => 'assets/images/dish/1.png',
        'category' => 'breakfast'
    ],
    [
        'title' => 'Banana Oatmeal Cookie',
        'calories' => 110,
        'type' => 'Cookie',
        'persons' => 1,
        'price' => 359,
        'rating' => 4.3,
        'image' => 'assets/images/dish/2.png',
        'category' => 'breakfast'
    ],
    [
        'title' => 'Spinach & Feta Puff Pastry',
        'calories' => 150,
        'type' => 'Puff Pastry',
        'persons' => 2,
        'price' => 149,
        'rating' => 4,
        'image' => 'assets/images/dish/3.png',
        'category' => 'lunch'
    ],
    [
        'title' => 'Vegetable Quiche',
        'calories' => 180,
        'type' => 'Quiche',
        'persons' => 2,
        'price' => 379,
        'rating' => 4.5,
        'image' => 'assets/images/dish/4.png',
        'category' => 'lunch'
    ],
    [
        'title' => 'Fruit Tart',
        'calories' => 200,
        'type' => 'Tart',
        'persons' => 2,
        'price' => 99,
        'rating' => 5,
        'image' => 'assets/images/dish/5.png',
        'category' => 'dinner'
    ],
    [
        'title' => 'Chocolate Soufflé',
        'calories' => 170,
        'type' => 'Soufflé',
        'persons' => 2,
        'price' => 159,
        'rating' => 5,
        'image' => 'assets/images/dish/6.png',
        'category' => 'dinner'
    ]
];
?>

<section style="background-image: url(assets/images/menu-bg.png);" class="our-menu section bg-light repeat-img" id="menu">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Our Menu</p>
                        <h2 class="h2-title">Wake up early, <span>enjoy fresh & delicious treats</span></h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-tab-wp">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="menu-tab text-center">
                            <ul class="filters">
                                <div class="filter-active"></div>
                                <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                    <img src="assets/images/menu-1.png" alt="">
                                    All
                                </li>
                                <li class="filter" data-filter=".breakfast">
                                    <img src="assets/images/menu-2.png" alt="">
                                    Breakfast
                                </li>
                                <li class="filter" data-filter=".lunch">
                                    <img src="assets/images/menu-3.png" alt="">
                                    Lunch
                                </li>
                                <li class="filter" data-filter=".dinner">
                                    <img src="assets/images/menu-4.png" alt="">
                                    Dinner
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-list-row">
                <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                    <?php foreach ($menuItems as $item): ?>
                        <div class="col-lg-4 col-sm-6 dish-box-wp <?= $item['category'] ?>" data-cat="<?= $item['category'] ?>">
                            <div class="dish-box text-center">
                                <div class="dist-img">
                                    <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
                                </div>
                                <div class="dish-rating">
                                    <?= $item['rating'] ?>
                                    <i class="uil uil-star"></i>
                                </div>
                                <div class="dish-title">
                                    <h3 class="h3-title"><?= $item['title'] ?></h3>
                                    <p><?= $item['calories'] ?> calories</p>
                                </div>
                                <div class="dish-info">
                                    <ul>
                                        <li>
                                            <p>Type</p>
                                            <b><?= $item['type'] ?></b>
                                        </li>
                                        <li>
                                            <p>Persons</p>
                                            <b><?= $item['persons'] ?></b>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dist-bottom-row">
                                    <ul>
                                        <li>
                                            <b>Rs. <?= $item['price'] ?></b>
                                        </li>
                                        <li>
                                            <button class="dish-add-btn">
                                                <i class="uil uil-plus"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="two-col-sec section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="sec-img mt-5">
                    <img src="assets/images/bacon.jpg" alt="Chicken Bacon Sandwich">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sec-text">
                    <h2 class="xxl-title">Chicken Bacon Sandwich</h2>
                    <p>The Chicken Bacon Sandwich is a delicious and enticing dish. Tender grilled chicken breast, golden and juicy,
                        is topped with crispy bacon, creating a perfect blend of savory flavors. Accompanied by fresh greens and a light mayonnaise sauce,
                        this sandwich is not only filling but also ideal for a quick meal.</p>
                    <p>Enjoy the Chicken Bacon Sandwich on a summer afternoon with a refreshing drink for a wonderful culinary experience!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$cakeTitle = "Chocolate Lava Cake";
$cakeDescription = [
    "Indulge in the rich and decadent Chocolate Lava Cake, a delightful dessert that will satisfy any sweet tooth. 
    With its soft, gooey center that flows like molten chocolate, this cake is a true chocolate lover's dream. 
    Baked to perfection, it features a delicate outer layer that contrasts beautifully with the warm, molten filling.",
    "Served warm with a scoop of vanilla ice cream on the side, the Chocolate Lava Cake offers a 
    delightful balance of flavors and textures. Each bite is a heavenly experience, making it the
    perfect ending to any meal!"
];

$openingHours = [
    "Monday to Thursday" => "9:00 am - 22:00 pm",
    "Friday to Sunday" => "11:00 am to 20:00 pm"
];

$teamMembers = [
    ["name" => "Nilay Hirpara", "img" => "assets/images/chef/c1.jpg"],
    ["name" => "Ravi Kumawat", "img" => "assets/images/chef/c2.jpg"],
    ["name" => "Navnit Kumar", "img" => "assets/images/chef/c3.jpg"],
    ["name" => "Pranav Badgal", "img" => "assets/images/chef/c4.jpg"],
    ["name" => "Priyotosh Dey", "img" => "assets/images/chef/c5.jpg"]
];
?>

<section class="two-col-sec section pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="sec-text">
                    <h2 class="xxl-title"><?php echo $cakeTitle; ?></h2>
                    <?php foreach ($cakeDescription as $paragraph): ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="sec-img">
                    <img src="assets/images/lava.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-table section bg-light">
    <div class="book-table-shape">
        <img src="assets/images/table-leaves-shape.png" alt="">
    </div>

    <div class="book-table-shape book-table-shape2">
        <img src="assets/images/table-leaves-shape.png" alt="">
    </div>

    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Book Table</p>
                        <h2 class="h2-title">Opening Table</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="book-table-info">
                <div class="row align-items-center">
                    <?php foreach ($openingHours as $day => $time): ?>
                        <div class="col-lg-4">
                            <div class="table-title text-center">
                                <h3><?php echo $day; ?></h3>
                                <p><?php echo $time; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-4">
                        <div class="call-now text-center">
                            <i class="uil uil-phone"></i>
                            <a href="tel:+84-09456781977">+84 - 09456781977</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="gallery">
                <div class="col-lg-10 m-auto">
                    <div class="book-table-img-slider" id="icon">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <a href="assets/images/bt<?php echo $i; ?>.jpg" data-fancybox="table-slider"
                                   class="book-table-img back-img swiper-slide"
                                   style="background-image: url(assets/images/bt<?php echo $i; ?>.jpg)"></a>
                            <?php endfor; ?>
                        </div>

                        <div class="swiper-button-wp">
                            <div class="swiper-button-prev swiper-button">
                                <i class="uil uil-angle-left"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="uil uil-angle-right"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="our-team section">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Our Team</p>
                        <h2 class="h2-title">Meet our Chefs</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($teamMembers as $member): ?>
                        <div class="col-lg-4 swiper-slide">
                            <div class="team-box text-center">
                                <div style="background-image: url(<?php echo $member['img']; ?>);"
                                     class="team-img back-img"></div>
                                <h3 class="h3-title"><?php echo $member['name']; ?></h3>
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="uil uil-instagram"></i></a></li>
                                        <li><a href="#"><i class="uil uil-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-wp">
                    <div class="swiper-button-prev swiper-button">
                        <i class="uil uil-angle-left"></i>
                    </div>
                    <div class="swiper-button-next swiper-button">
                        <i class="uil uil-angle-right"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<section class="two-col-sec section pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="sec-text">
                    <h2 class="xxl-title">Chocolate Lava Cake</h2>
                    <p>Indulge in the rich and decadent Chocolate Lava Cake, a delightful dessert that will satisfy any sweet tooth. 
                        With its soft, gooey center that flows like molten chocolate, this cake is a true chocolate lover's dream. 
                        Baked to perfection, 
                        it features a delicate outer layer that contrasts beautifully with the warm, molten filling.</p>
                    <p>Served warm with a scoop of vanilla ice cream on the side, the Chocolate Lava Cake offers a 
                    delightful balance of flavors and textures. Each bite is a heavenly experience, making it the
                    perfect ending to any meal!</p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="sec-img">
                    <img src="assets/images/lava.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-table section bg-light">
    <div class="book-table-shape">
        <img src="assets/images/table-leaves-shape.png" alt="">
    </div>

    <div class="book-table-shape book-table-shape2">
        <img src="assets/images/table-leaves-shape.png" alt="">
    </div>

    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Book Table</p>
                        <h2 class="h2-title">Opening Table</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="book-table-info">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="table-title text-center">
                            <h3>Monday to Thursday</h3>
                            <p>9:00 am - 22:00 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="call-now text-center">
                            <i class="uil uil-phone"></i>
                            <a href="tel:+91-8866998866">+84 - 09456781977</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-title text-center">
                            <h3>Friday to Sunday</h3>
                            <p>11:00 am to 20:00 pm</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="gallery">
                <div class="col-lg-10 m-auto">
                    <div class="book-table-img-slider" id="icon">
                        <div class="swiper-wrapper">
                            <?php 
                            $images = [
                                "assets/images/bt1.jpg",
                                "assets/images/bt2.jpg",
                                "assets/images/bt3.jpg",
                                "assets/images/bt4.jpg",
                                "assets/images/bt1.jpg",
                                "assets/images/bt2.jpg",
                                "assets/images/bt3.jpg",
                                "assets/images/bt4.jpg"
                            ];
                            foreach ($images as $image) {
                                echo '<a href="' . $image . '" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(' . $image . ')"></a>';
                            }
                            ?>
                        </div>

                        <div class="swiper-button-wp">
                            <div class="swiper-button-prev swiper-button">
                                <i class="uil uil-angle-left"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="uil uil-angle-right"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team section">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Our Team</p>
                        <h2 class="h2-title">Meet our Chefs</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/images/title-shape.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                <div class="swiper-wrapper">
                    <?php 
                    $chefs = [
                        ["name" => "Nilay Hirpara", "image" => "assets/images/chef/c1.jpg"],
                        ["name" => "Ravi Kumawat", "image" => "assets/images/chef/c2.jpg"],
                        ["name" => "Navnit Kumar", "image" => "assets/images/chef/c3.jpg"],
                        ["name" => "Pranav Badgal", "image" => "assets/images/chef/c4.jpg"],
                        ["name" => "Priyotosh Dey", "image" => "assets/images/chef/c5.jpg"]
                    ];
                    foreach ($chefs as $chef) {
                        echo '<div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center">
                                    <div style="background-image: url(' . $chef['image'] . ');" class="team-img back-img"></div>
                                    <h3 class="h3-title">' . $chef['name'] . '</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="uil uil-instagram"></i></a></li>
                                            <li><a href="#"><i class="uil uil-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
                <div class="swiper-button-wp">
                    <div class="swiper-button-prev swiper-button">
                        <i class="uil uil-angle-left"></i>
                    </div>
                    <div class="swiper-button-next swiper-button">
                        <i class="uil uil-angle-right"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter-sec section pt-0">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="newsletter-box text-center back-img white-text"
                        style="background-image: url(assets/images/news.jpg);">
                        <div class="bg-overlay dark-overlay"></div>
                        <div class="sec-wp">
                            <div class="newsletter-box-text">
                                <h2 class="h2-title">Subscribe our newsletter</h2>
                                <p>Join our community to receive exclusive offers, new product updates, 
                                    and delicious baking tips directly to your inbox!</p>
                            </div>
                            <form action="#" class="newsletter-form">
                                <input type="email" class="form-input"
                                    placeholder="Enter your Email Here" required>
                                <button type="submit" class="sec-btn primary-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer starts -->
<footer class="site-footer" id="contact">
    <div class="top-footer section">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-info">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="logo.png" alt="">
                                </a>
                            </div>
                            <p>Follow us on social media to stay updated with our latest creations and offers!</p>
                            <div class="social-icon">
                                <ul>
                                    <?php 
                                    $social_links = [
                                        ["icon" => "uil-facebook-f", "link" => "#"],
                                        ["icon" => "uil-instagram", "link" => "#"],
                                        ["icon" => "uil-github-alt", "link" => "#"],
                                        ["icon" => "uil-youtube", "link" => "#"]
                                    ];
                                    foreach ($social_links as $social) {
                                        echo '<li><a href="' . $social['link'] . '"><i class="' . $social['icon'] . '"></i></a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-flex-box">
                            <div class="footer-table-info">
                                <h3 class="h3-title">Open Hours</h3>
                                <ul>
                                    <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>
                                    <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>
                                </ul>
                            </div>
                            <div class="footer-menu food-nav-menu">
                                <h3 class="h3-title">Links</h3>
                                <ul class="column-2">
                                    <?php 
                                    $links = [
                                        ["title" => "Home", "href" => "#home", "active" => true],
                                        ["title" => "About", "href" => "#about"],
                                        ["title" => "Menu", "href" => "#menu"],
                                        ["title" => "Gallery", "href" => "#gallery"],
                                        ["title" => "Blog", "href" => "#blog"],
                                        ["title" => "Contact", "href" => "#contact"]
                                    ];
                                    foreach ($links as $link) {
                                        $active_class = isset($link['active']) ? 'footer-active-menu' : '';
                                        echo '<li><a href="' . $link['href'] . '" class="' . $active_class . '">' . $link['title'] . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <h3 class="h3-title">Company</h3>
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>All Content &copy; 2024 <span class="name">Dahuhi Bakery.</span> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
        </div>
    </div>
</footer>

<!-- jquery  -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!-- fontawesome  -->
<script src="assets/js/font-awesome.min.js"></script>

<!-- swiper slider  -->
<script src="assets/js/swiper-bundle.min.js"></script>

<!-- mixitup -- filter  -->
<script src="assets/js/jquery.mixitup.min.js"></script>

<!-- fancy box  -->
<script src="assets/js/jquery.fancybox.min.js"></script>

<!-- parallax  -->
<script src="assets/js/parallax.min.js"></script>

<!-- gsap  -->
<script src="assets/js/gsap.min.js"></script>

<!-- scroll trigger  -->
<script src="assets/js/ScrollTrigger.min.js"></script>
<!-- scroll to plugin  -->
<script src="assets/js/ScrollToPlugin.min.js"></script>
<!-- rellax  -->
<!-- <script src="assets/js/rellax.min.js"></script> -->
<!-- <script src="assets/js/rellax-custom.js"></script> -->
<!-- smooth scroll  -->
<script src="assets/js/smooth-scroll.js"></script>
<!-- custom js  -->
<script src="main.js"></script>
        
</body>
</html>
