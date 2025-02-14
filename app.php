<?php
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MissionProcess - Gestion de la qualité</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Include AOS CSS for animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <!-- Custom CSS -->
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
    <style>
    /* Custom styles for sections */
    .section {
        padding: 80px 20px;
        position: relative;
        overflow: hidden;
    }

    /* Backgrounds for sections */
    .header {
        background: linear-gradient(135deg, #99cbcc, #0940b8);
        color: #fff;
    }

    .features {
        background: #f9f9f9;
    }

    .advantages {
        background: #fff;
    }

    /* Section titles */
    .section-title {
        font-size: 2.5em;
        margin-bottom: 40px;
        font-weight: bold;
    }

    /* Cards styling */
    .card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        margin-bottom: 30px;

        /* Fixed height for card */
        height: 450px; /* Set a fixed height for all cards */
        display: flex; /* Enable flexbox for vertical alignment */
        flex-direction: column; /* Ensure vertical stacking */
        justify-content: space-between; /* Space content evenly within the card */
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 200px; /* Fixed height for the image */
        object-fit: cover; /* Ensures the image scales correctly */
    }

    .card-body {
        padding: 20px;
        flex-grow: 1; /* Allow the card body to grow and fill available space */
        display: flex; /* Use flexbox for layout within card body */
        flex-direction: column; /* Ensure vertical stacking */
    }

    /* Text animations */
    [data-aos] {
        opacity: 0;
        transition-property: opacity, transform;
    }

    /* Custom styles for header image */
    .header img {
        width: 300px;
        max-width: 100%;
        height: auto;
        margin-top: 20px;
    }
</style>

</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="Preloader Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include 'header.php'; ?>
    <!-- Header End -->

    <!-- Main content -->
    <main>
        <!-- Introduction Section -->
        <div class="section header">
            <div class="container"style="color:white;">
                <h2 class="section-title" data-aos="fade-down">MissionProcess - Gestion de la qualité d'entreprise</h2>
                <p data-aos="fade-up" data-aos-delay="200" >MISSION PROCESS a été conçu pour être simple à utiliser, offrant une interface claire qui permet une prise en main rapide par vos équipes. Vous aurez une visibilité complète sur vos opérations qualité, ce qui vous permettra de prendre des décisions éclairées et d’optimiser vos processus.</p>
                <img src="assets/img/app/app.png" alt="application" data-aos="zoom-in" data-aos-delay="400">
            </div>
        </div>

<!-- Functionalities Section -->
<div class="section features">
    <div class="container">
        <h2 class="section-title" data-aos="fade-down">Fonctionnalités clés</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <a href="module1.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/gestion.png" class="card-img-top" alt="Gestion documentaire">
                        <div class="card-body">
                            <h3 class="card-title">Gestion documentaire</h3>
                            <p class="card-text">Créez, organisez et contrôlez vos documents qualité, avec des fonctionnalités de versioning et de validation, assurant une traçabilité efficace.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <a href="module2.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/rh.jpg" class="card-img-top" alt="Gestion des ressources humaines">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des ressources humaines</h3>
                            <p class="card-text">Planifiez et suivez les compétences, les formations et les ressources humaines en lien avec vos besoins qualité, avec organigramme et fiches de fonction.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <a href="module3.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/pi.png" class="card-img-top" alt="Gestion des parties intéressées">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des parties intéressées</h3>
                            <p class="card-text">Identifiez et suivez les parties prenantes et leurs attentes dans le cadre de votre système qualité.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                <a href="module4.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/modif.jpg" class="card-img-top" alt="Gestion des modifications">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des modifications</h3>
                            <p class="card-text">Documentez et contrôlez les changements ayant un impact sur votre système de management qualité.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000">
                <a href="module5.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/conforme.webp" class="card-img-top" alt="Gestion des non-conformités">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des non-conformités</h3>
                            <p class="card-text">Suivez et traitez les non-conformités avec des mesures correctives et préventives adaptées.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1200">
                <a href="module6.php" class="card-link">
                    <div class="card">
                        <img src="assets/img/app/risk.jpg" class="card-img-top" alt="Gestion des risques">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des risques</h3>
                            <p class="card-text">Identifiez, évaluez et gérez les risques qualité à l’aide de plans d’action ciblés.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Centered Last Two Cards -->
        <div class="row justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1400">
                <a href="module7.php" class="card-link">
                    <div class="card mx-auto">
                        <img src="assets/img/app/indic.jpg" class="card-img-top" alt="Gestion des indicateurs">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des indicateurs</h3>
                            <p class="card-text">Analysez les performances de vos processus grâce au suivi des indicateurs, facilitant la prise de décisions basées sur des données précises.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="1600">
                <a href="module8.php" class="card-link">
                    <div class="card mx-auto">
                        <img src="assets/img/app/audit.webp" class="card-img-top" alt="Gestion des audits">
                        <div class="card-body">
                            <h3 class="card-title">Gestion des audits</h3>
                            <p class="card-text">Planifiez et suivez les audits internes et externes, et gérez les rapports et actions correctives.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



        <!-- Advantages Section -->
        <div class="section advantages">
            <div class="container">
                <h2 class="section-title" data-aos="fade-down">Les avantages de MissionProcess</h2>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="assets/img/app/productivity.png" class="card-img-top" alt="Augmentation de productivité">
                            <div class="card-body">
                                <h3 class="card-title">Augmentation de la productivité</h3>
                                <p class="card-text">Réduisez les tâches manuelles et gagnez du temps précieux.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <img src="assets/img/app/compliance.jpg" class="card-img-top" alt="Amélioration de la conformité">
                            <div class="card-body">
                                <h3 class="card-title">Amélioration de la conformité</h3>
                                <p class="card-text">Garantissez que tous vos processus respectent les normes de qualité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <img src="assets/img/app/reporting.jpg" class="card-img-top" alt="Rapports détaillés">
                            <div class="card-body">
                                <h3 class="card-title">Rapports détaillés</h3>
                                <p class="card-text">Accédez à des rapports personnalisés pour mieux gérer votre qualité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="section cta" style="background: linear-gradient(135deg, #fe9833, #fe9800); color: #fff;">
            <div class="container">
                <h2 class="section-title" data-aos="fade-down">Prêt à améliorer votre gestion de la qualité ?</h2>
                <p data-aos="fade-up" data-aos-delay="200">Contactez-nous dès aujourd'hui pour en savoir plus sur MissionProcess et comment il peut aider votre entreprise.</p>
                <a href="index.php#contact" class="btn btn-light btn-lg" data-aos="zoom-in" data-aos-delay="400">Contactez-nous</a>
            </div>
        </div>

    </main>

    <!-- Footer Start -->
    <footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
   <?php include 'footer.php'; ?>
      </div>
  </footer>
    <!-- Footer End -->

    <!-- Scroll Up Button -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

      <!-- JS here -->
      <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Include AOS JS for animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
   <!-- JS here -->
   <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/gijgo.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/hover-direction-snake.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/main.js"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

</body>
</html>
