<?php
	// Initialize session
	session_start();

	
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Mission </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
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
    <!-- Preloader Start-->
    <?php include 'header.php'; ?>

<main>
    <!--? slider Area Start-->
    <div class="slider-area  slider-height position-relative" data-background="assets/img/hero/h1_hero.png">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <span>En choisissant de faire appel à</span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s">The Mission</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">vous faites appel à un consultant expérimenté, vous vous donnez la possibilité
d’aller vers la croissance et le développement</p>
                        <!-- Hero Btn -->
                        <a href="services.php" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Nos Services</a>
                    </div>
                    <div class="hero-img">
                        <img src="assets/img/identity.jpg" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- Video icon -->
     <!--   <div class="video-icon" >
            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
        </div> -->
    </div>
    <!-- slider Area End-->
    
    <!--! About Area Start 01 -->
    <section class="about-area fix">
        <!--Right Contents  -->
        <div class="about-img">
            
        </div>
        <!-- left Contents -->
        <div class="about-details">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50">
                    <h2>Notre<br>Philosophie</h2>
                </div>
                <div class="about-more">
                    
                    <p class="pera-bottom">Notre offre est construite sur la base d’un véritable partenariat avec vous, pour renforcer votre
organisation ainsi que vos compétences en matière de système de management normalisé ,nous
répondons à vos obligations et vos besoins et nous nous adaptons à vos exigences , à votre
environnement en valorisant vos atouts et en prenant en compte vos contraintes .</p>
                   
                </div>
            </div>
        </div> 
    </section>
    <!-- About Area End-->
    <!--! About Area Start 02-->
    <div class="about-area2">
        <!-- left Contents -->
        <div class="about-details2">
            <div class="right-caption2">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50">
                    <h2>Pourquoi faire <br>appel à nous ?</h2>
                </div> 
                <!-- collapse-wrapper -->
                <div class="collapse-wrapper">
                    <div class="accordion" id="accordionExample">
                        <!-- single-one -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Un regard extérieur et objectif</a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    En tant que consultant externe , 
                                    nous avons un regard neuf, nous pouvons repérer plus
                                    rapidement les véritables problèmes qui vous freinent .                                  
                                </div>
                            </div>
                        </div>

                        <!-- single-two -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Un gain d’argent</a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Embaucher un collaborateur et le former est un réel coût pour vous. Avec THE MISSION , vous n’avez pas
de frais de fonctionnement ni de frais généraux afférents à l’exécution du travail vous ne payez que lorsque vous en avez
besoin.
                                </div>
                            </div>
                        </div>
                        <!-- single-three -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Un diagnostic efficace</a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Une grande partie de notre valeur réside dans notre expertise d’auditeur. Nous menons un
diagnostic pour : comprendre ce qui se passe, éclaircir la situation, poser les bonnes questions, démêler votre problématique.
                                </div>
                            </div>
                        </div>
                        <!-- single-four -->
                        <div class="card">
                            <div class="card-header" id="headingfouree">
                                <h2 class="mb-0">
                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">Une connaissance approfondie des moyens de financement </a>
                                </h2>
                            </div>
                            <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                <div class="card-body">
                                    L’un des nos avantages, c’est l’expérience et l’expertise
étendue sur le secteur financier ,nous vous assisterons dans la recherche du financement de vos projet.
                                </div>
                            </div>
                        </div>
                    </div>
					<br>
					<a href="about.php" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Voir plus</a>
                </div>
            </div>
        </div>
        <!--Right Contents  -->
        <div class="about-img2">
            
        </div>
    </div>
    <!-- About Area End-->
    <!--? Testimonial Area Start -->
    <!--
        <section class="testimonial-area testimonial-padding fix" data-background="assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-9">
                    <div class="about-caption">
                        <div class="h1-testimonial-active dot-style">
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                </div>
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                </div>
                               
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Robart Brown</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--? Testimonial Area End -->
    <!-- Home Blog Start -->
   
    <!-- Home Blog End -->
    <!--? Office environment  Start-->
    <!--? Team Ara Start -->
   
    <!--? Want To work -->
    <!--<section class="wantToWork-area section-bg2"  data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Besoin d'un service de conseil ?</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="#" class="btn w-btn wantToWork-btn mr-20">Contactez-nous !</a>
                        <a href="#" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i> (89) 673 378-309</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Want To work End -->
     <section class="home-blog section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10" id="FSMN">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>FORMATIONS</h2>
                        <span >SYSTÈME MANAGEMENT NORMALISE 
                        </span>
                    </div> 
                </div>
            </div>
            <div class="blog-active">
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f1.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN01.php" >FSMN01</a></h5>
                        <p style="color: #FF9933">INITIATION AU MANAGEMENT DE LA QUALITE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f2.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN02.php">FSMN02</a></h5>
                        <p style="color: #FF9933">EXIGENCE DE LA NORME ISO 9001v2015.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f3.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN03.php">FSMN03</a></h5>
                        <p style="color: #FF9933">INDICATEURS ET TABLEAUX DE BORD.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f4.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN04.php">FSMN04</a></h5>
                        <p style="color: #FF9933">MANAGEMENT PAR APPROCHE PROCESSUS.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f5.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN05.php">FSMN05</a></h5>
                        <p style="color: #FF9933">PRATIQUE DE L’AUDIT INTERNE QUALITE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f6.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN06.php">FSMN06</a></h5>
                        <p style="color: #FF9933">EXIGENCE DE LA NORME ISO 45001v2018.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f7.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN07.php">FSMN07</a></h5>
                        <p style="color: #FF9933">EXIGENCE DE LA NORME ISO 14001v2015.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f8.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN08.php">FSMN08</a></h5>
                        <p style="color: #FF9933">CONCEVOIR ET METTRE EN ŒUVRE UN SYSTEME DE MANAGEMENT INTEGRE QUALITE –SECURITE- ENVIRONNEMENT.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f9.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN09.php">FSMN09</a></h5>
                        <p style="color: #FF9933">SATISFACTION CLIENT ET AMELIORATION CONTINUE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/f10.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FSMN10.php">FSMN10</a></h5>
                        <p style="color: #FF9933">RESPONSABLE QUALITE : ROLES ET STRATEGIES POUR UNE MEILLEURE EFFICACITE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                

            </div>
        </div>
   
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-10 col-md-10" id="GRH">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>GESTION FINANCIERE – COMPTABILITE -GRH</span>
                    </div> 
                </div>
            </div>
            <div class="blog-active">
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c1.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG01.php">FGCG01</a></h5>
                        <p style="color: #FF9933">LES FONDAMENTAUX DE L’ANALYSE FINANCIERE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c2.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG02.php">FGCG02</a></h5>
                        <p style="color: #FF9933">ANALYSE FINANCIERE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c3.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG03.php">FGCG03</a></h5>
                        <p style="color: #FF9933">LES OUTILS D’ANALYSE FINANCIERE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c4.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG04.php">FGCG04</a></h5>
                        <p style="color: #FF9933">ÉLABORER UN MANUEL DES PROCEDURES COMPTABLES.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c5.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG05.php">FGCG05</a></h5>
                        <p style="color: #FF9933">MANAGER EFFICACEMENT UNE DIRECTION, UN SERVICE, UNE EQUIPE DE TRAVAIL.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c6.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG06.php">FGCG06</a></h5>
                        <p style="color: #FF9933">MANAGEMENT ET TRAVAIL EN EQUIPE.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c7.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG07.php">FGCG07</a></h5>
                        <p style="color: #FF9933">ANIMATION D’UNE EQUIPE DE TRAVAIL.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c8.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG08.php">FGCG08</a></h5>
                        <p style="color: #FF9933">LES REGLES D’OR DU MANAGEMENT OPERATIONNEL.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c9.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG09.php">FGCG09</a></h5>
                        <p style="color: #FF9933">L’ESSENTIEL EN GESTION DES RESSOURCES HUMAINES.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/formation/c10.jpg" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="FGCG10.php">FGCG10</a></h5>
                        <p style="color: #FF9933">OUTILS ET TECHNIQUES DE MANAGEMENT DES RESSOURCES HUMAINES.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
</main>
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        <?php include 'footer.php'; ?>

          <!-- Footer End-->
      </div>
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>