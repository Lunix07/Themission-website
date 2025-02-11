<?php
    session_start();

    // Array of clients
    $clients = [
        ['name' => 'Client One', 'image' => 'client1.jpg', 'link' => 'client1-article.php'],
        ['name' => 'Client Two', 'image' => 'client2.jpg', 'link' => 'client2-article.php'],
        ['name' => 'Client Three', 'image' => 'client3.jpg', 'link' => 'client3-article.php'],
        ['name' => 'Client Four', 'image' => 'client4.jpg', 'link' => 'client4-article.php']
    ];
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Mission | Our Clients</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/arrows.css">


    <style>
        
        /* Add transition to client card */
        .client-card {
            transition: opacity 0.5s ease, transform 0.5s ease;
            max-width: 300px; /* Set a max-width to the client card */
            margin: 0 auto; /* Center the client card */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .client-card img {
            width: 250px; /* Fixed width */
            height: 250px; /* Fixed height */
            object-fit: cover; /* Ensures image keeps its aspect ratio */
            border-radius: 50%; /* Makes the image circular */
            margin-bottom: 20px;
        }

        .client-info {
            text-align: center;
        }

        /* Add some padding to the client section */
        .client-section {
            padding: 60px 0;
        }
    </style>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> 
    <!-- Preloader End -->

    <!-- Header -->
    <?php include 'header.php'; ?>

<main>
    <!-- Slider Area Start -->
    <div class="slider-area slider-area2 slider-height2 position-relative" data-background="assets/img/hero/hero2.png">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Nos Clients</h1>
                        <!-- breadcrumb Start-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Clients</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="hero-img">
                        <img src="assets/img/header/clients.jpg" alt="Clients Hero Image" data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Single Client Section -->
    <section class="client-section">
        <div class="container d-flex justify-content-center align-items-center position-relative">
            <div id="client-container" class="client-card shadow text-center">
                <!-- Initial Client Data (Client 1) -->
                <a href="https://www.facebook.com/TheMissionTN/posts/pfbid02TdZCVs4p5XyqZ83ifoKGwvz7vmA5puUiHKMzBMiR6A8oqwoc7ThFCqNXvynUPry4l" class="client-link">
                    <img src="assets/img/clients/client1.jpg" alt="Client One" class="img-fluid rounded mb-3">
                    <div class="client-info p-3">
                        <h3 class="client-name">INAT</h3>
                        <p class="client-description">Clicker pour savoir plus</p>
                    </div>
                </a>
            </div>

            <!-- Navigation Arrows -->
            <div class="client-navigation d-flex justify-content-between align-items-center">
                <a href="#" class="arrow-left"><i class="fas fa-arrow-left"></i></a>
                <a href="#" class="arrow-right"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <!-- End Single Client Section -->
</main>

<!-- Footer -->
<footer>
    <div class="footer-wrapper section-bg2 pl-100" data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        <?php include 'footer.php'; ?>
        <!-- Footer End-->
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.barfiller.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/clients.js"></script>




</body>
</html>
