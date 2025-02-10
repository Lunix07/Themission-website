<?php
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheMission - Accueil</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">

  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">
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
<!-- Preloader Start -->
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

<body >

<?php include 'header.php'; ?>


  <main class="main">

   <!-- Hero Section -->
<section id="hero" class="hero section">
  <div id="hero-carousel" data-bs-interval="50000" class="container-fullwidth carousel carousel-fade" data-bs-ride="carousel">
    
    <!-- Slide 1 -->
    <div class="carousel-item active slide-green">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Accompagnement sur mesure pour votre certification ISO</h2>
        <p class="animate__animated animate__fadeInUp"><span>Notre cabinet vous propose un accompagnement sur mesure en management de la qualité, conçu pour garantir l'obtention et la pérennisation de votre certification.</span></p>
        <a href="accomp.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item slide-blue">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Formations Certifiantes et Qualifiantes pour Votre Établissement</h2>
        <p class="animate__animated animate__fadeInUp">Vous aspirez à optimiser les compétences de vos équipes ? THE MISSION est votre partenaire pour réaliser des projets ambitieux, développer des compétences ciblées et intégrer de nouvelles pratiques ou méthodes.</p>
        <a href="formations.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item slide-orange">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Expertise en Audits et Certifications</h2>
        <p class="animate__animated animate__fadeInUp">THE MISSION s'appuie sur l'expertise de ses auditeurs certifiés à l'échelle internationale pour vous accompagner dans la réalisation de tout type d'audit. Nous mettons en œuvre des processus rigoureux et adaptés à vos besoins, garantissant ainsi une évaluation précise et efficace de votre système de management.</p>
        <a href="audit.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
      </div>
    </div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3"></use>
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0"></use>
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9"></use>
    </g>
  </svg>

</section><!-- /Hero Section -->

<section id="about" class="section">
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption text-background">
                        <!-- Section Title -->
                        <h2 class="closer-title" data-aos="fade-up" data-aos-delay="100">Qui sommes nous?</h2>
                        <!-- End Section Title -->
                        <p data-aos="fade-up" data-aos-delay="200">
                            THE MISSION est un cabinet multidisciplinaire qui s'appuie sur une expertise solide dans la finance, la gestion des ressources humaines, la mise en place de systèmes de management normalisés, l'audit et le pilotage de projets. Nous vous accompagnons dans l'organisation de votre structure et dans l'obtention de certifications selon les référentiels de votre choix. Notre approche repose sur un partenariat authentique avec vous, visant à renforcer votre organisation et à développer vos compétences. Nous répondons à vos besoins et attentes tout en nous adaptant à votre environnement, valorisant vos atouts et tenant compte de vos contraintes.
                        </p>
                    </div>
                    <div class="hero-img" data-aos="fade-up" data-aos-delay="300">
                        <img src="assets/img/identity.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<!-- themission Section -->
<section id="the mission" class=" section pricing">

<!-- Section Title -->
<div class="container section-title blue" data-aos="fade-up">
  <h2>The Mission</h2>
</div><!-- End Section Title -->

<div class="container" data-aos="zoom-in" data-aos-delay="100">

  <div class="row g-4">

    <div class="col-lg-4">
      <div class="pricing-item">
        <h3>Notre engagement</h3>
        <div class="icon">
          <i class="bi bi-person-badge"></i>
        </div>
        <p> Notre engagement consiste à vous garantir un soutien tangible dans la réussite de vos projets, tout en favorisant le transfert continu de compétences à travers notre expertise spécialisée<p>
        <ul>
          <li><i class="bi bi-check"></i> <span>Fournir des compétences et des expériences </span></li>
          <li><i class="bi bi-check"></i> <span>Offrir une perspective objective, </span></li>
          <li><i class="bi bi-check"></i> <span>Établir un partenariat solide avec vous</span></li>
          
        </ul>
      </div>
    </div><!-- End Pricing Item -->

    <div class="col-lg-4">
      <div class="pricing-item featured">
        <h3>Notre mission</h3>
        <div class="icon">
          <i class="bi bi-compass"></i>
        </div>

        <p>Notre mission chez THE MISSION est de vous accompagner dans l'organisation de votre structure, l'optimisation de vos ressources, la maîtrise de vos risques, la satisfaction de vos parties prenantes, l'atteinte de vos objectifs stratégiques, tout en adoptant une approche systémique orientée vers la performance.<p>
      </div>
    </div><!-- End Pricing Item -->

    <div class="col-lg-4">
      <div class="pricing-item">
        <h3>Notre vision</h3>
        <div class="icon">
          <i class="bi bi-globe"></i>
        </div>
        <p>Chez THE MISSION est de devenir la référence incontournable dans l’accompagnement des entreprises, leur permettant d'atteindre une reconnaissance internationale, de s'ouvrir à de nouveaux marchés et de se différencier face à la concurrence.<p>
      </div>
    </div><!-- End Pricing Item -->

  </div>

</div>

</section><!-- /Pricing Section -->





    <!-- Features 2 Section -->
    <section id="features-2" class="features section features-2">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pourquoi faire appel à nous ?</h2>
        <p>En choisissant THE MISSION, vous bénéficiez de l'expertise d'un consultant expérimenté, vous vous ouvrez à des opportunités de croissance et de développement. Voici dix bonnes raisons de faire appel à nos services :</p>
      </div><!-- End Section Title -->
      <div class="container">
    <div class="row gy-4">
        <!-- Left Column (6 points) -->
        <div class="col-lg-6">
            <!-- Point 1: Un regard extérieur et objectif -->
            <div class="features-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-eye flex-shrink-0"></i>
                <div>
                    <h4>Un regard extérieur et objectif</h4>
                    <p>En tant que consultant externe, nous apportons une perspective nouvelle et objective. Nous sommes en mesure d'identifier rapidement les véritables problèmes qui freinent votre organisation.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 2: Un gain financier -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-cash-coin flex-shrink-0"></i>
                <div>
                    <h4>Un gain financier</h4>
                    <p>Recruter et former un nouvel employé représente un coût considérable. Avec THE MISSION, vous ne payez que pour les services dont vous avez réellement besoin.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 3: Une connaissance approfondie des financements -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-bar-chart flex-shrink-0"></i>
                <div>
                    <h4>Une connaissance approfondie des financements</h4>
                    <p>Grâce à notre expertise dans le secteur financier, nous vous assistons dans la recherche de financements pour vos projets, maximisant vos chances de réussite.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 4: Un diagnostic précis et efficace -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clipboard-data flex-shrink-0"></i>
                <div>
                    <h4>Un diagnostic précis et efficace</h4>
                    <p>Notre expérience d’auditeur nous permet de réaliser un diagnostic approfondi pour comprendre les enjeux, clarifier la situation et poser les bonnes questions pour résoudre vos problématiques.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 5: Accès à l'expertise de professionnels -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="600">
                <i class="bi bi-person-workspace flex-shrink-0"></i>
                <div>
                    <h4>Accès à l'expertise de professionnels</h4>
                    <p>Nous mettons à votre disposition une large gamme de ressources et des connaissances approfondies, particulièrement utiles lorsque vous êtes confronté à des défis que vous ou votre équipe ne maîtrisez pas encore.</p>
                </div>
            </div><!-- End Features Item -->

            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="600">

            </div>
 
        </div>

        <!-- Right Column (4 points) -->
        <div class="col-lg-6">
            <!-- Point 7: Optimisation de votre temps -->
            <div class="features-item d-flex mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                    <h4>Optimisation de votre temps</h4>
                    <p>Confiez-nous les missions qui demandent trop de temps afin que vos collaborateurs puissent se concentrer sur leurs fonctions essentielles, sans surcharge de travail.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 8: Formation de vos employés -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-people flex-shrink-0"></i>
                <div>
                    <h4>Formation de vos employés</h4>
                    <p>Dans un monde compétitif, la formation continue est essentielle. Engager un consultant sur site pour former vos employés renforce leur efficacité et vous donne un avantage concurrentiel.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 9: Mise à jour constante des connaissances -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-lightbulb flex-shrink-0"></i>
                <div>
                    <h4>Mise à jour constante des connaissances</h4>
                    <p>Nous sommes toujours informés des dernières tendances et innovations, et nous sommes parfaitement positionnés pour vous aider à rester compétitif sur le marché.</p>
                </div>
            </div><!-- End Features Item -->

            <!-- Point 10: Satisfaction garantie -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-check-circle flex-shrink-0"></i>
                <div>
                    <h4>Satisfaction garantie</h4>
                    <p>En tant que véritable partenaire, votre succès est aussi le nôtre. Nous nous engageons à faire de chaque mission un succès, vous assurant ainsi un partenariat bénéfique qui apporte une réelle valeur ajoutée.</p>
                </div>
            </div><!-- End Features Item -->
            <!-- Point 6: Gestion des problèmes internes sensibles -->
            <div class="features-item d-flex mt-5" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-shield-lock flex-shrink-0"></i>
                <div>
                    <h4>Gestion des problèmes internes sensibles</h4>
                    <p>Faire appel à nos services vous permet de prendre des décisions critiques de manière objective et indépendante, apportant la clarté nécessaire dans des situations délicates.</p>
                </div>
            </div><!-- End Features Item -->
        </div>
    </div>
</div>




    <!-- app Section -->
    <section id="call-to-action" class="call-to-action  dark-background">

      <img src="assets/img/app/logo.png" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>MISSION PROCESS : Votre Solution de Gestion de la Qualité</h3>
              <p>La gestion manuelle de la documentation et la traçabilité rigoureuse requises par les normes ISO représentent souvent les défis majeurs pour les organismes. MISSION PROCESS, notre logiciel de gestion de la qualité, a été conçu pour surmonter ces obstacles en facilitant le suivi et l’amélioration continue de vos processus. Il centralise la gestion des documents, des non-conformités, des actions correctives et des audits, tout en étant simple à manipuler et à intégrer dans votre organisation.</p>
              <a class="cta-btn" href="app.php">En savoir plus </a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /app Section -->


    

  <!-- Clients Section -->
  <section id="clients" class="clients section ">
<div class="container section-title" data-aos="fade-up">
  <h2>Nous ont fait confiance</h2>
</div><!-- End Section Title -->

<div class="container">
<div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="container" data-aos="fade-up">
    

            <div class="row gy-4 sliding-container"> <!-- New container for sliding -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client1.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client2.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client3.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client4.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client5.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client6.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client7.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client8.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client9.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client10.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client11.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client12.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client13.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client14.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client15.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client16.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client17.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client18.jpg" class="img-fluid" alt="">
                </div><!-- End Client Item -->
                <!-- Add more clients here if needed -->
            
        </div>
    </div>
    </div>
    </div>
</section><!-- /Clients Section -->
 mail fih engagement vision w adresss wPourquoi faire appel à nous /page nos clients tetbadel / footer tetbadel / revoyer nos services / qu en pensent nos clients 


<!-- avis Section -->

<section id="avis" class="team section demo" >
 <!-- Section Title -->
 <div class="container section-title" data-aos="fade-up">
  <h2>Qu'en pensent nos clients?</h2>
</div><!-- End Section Title -->
    <div class="container"  >
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial" data-aos="fade" data-aos-delay="100">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                        Bonjour chère Mme Faten,
Je tiens à vous exprimer toute ma gratitude pour le temps et l'énergie que vous 
avez déployés pour notre formation et vous remercier du fond du cœur pour votre 
dévouement et votre générosité.
                       </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="assets/img/clients/client5.jpg" alt=""></div>
                            <h3 class="title">Pr.Imen TLICH</h3>
                        </div>
                    </div>
                    <div class="testimonial" data-aos="fade" data-aos-delay="200">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                        Merci beaucoup à Madame Faten Maalej pour son accompagnement tout au long de 
la mise en place du Système de Management d’un organisme  d’Education/formation 
au sein à la Faculté de Médecine de Tunis..
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="assets/img/clients/client2.jpg" alt=""></div>
                            <h3 class="title">FMT</h3>
                        </div>
                    </div>
                    <div class="testimonial" data-aos="fade" data-aos-delay="300">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                        Chère Faten bonsoir,Merci pour vos félicitations. Mais si nous avons si bien réussi, c’est parce que nous avons bénéficié d’une bonne qualité de formation dispensée par une formatrice exceptionnelle.         </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="assets/img/clients/client12.jpg" alt=""></div>
                            <h3 class="title">Pr.Samia KAROUI ZOUAOUI</h3>
                        </div>
                    </div>
                    <div class="testimonial" data-aos="fade" data-aos-delay="300">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                        Chère Faten bonsoir,
Merci pour vos félicitations. Mais si nous avons si bien réussi, c’est parce que nous 
avons bénéficié d’une bonne qualité de formation dispensée par une formatrice 
exceptionnelle.Merci pour vos félicitations. Mais si nous avons si bien réussi, c’est parce que nous 
avons bénéficié d’une bonne qualité de formation dispensée par une formatrice 
exceptionnelle.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="assets/img/clients/client1.jpg" alt=""></div>
                            <h3 class="title">Pr.Samia KAROUI ZOUAOUI</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section><!-- /avis Section -->



    
   
    <!-- Contact Section -->
    <section id="contact" class="contact section" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adresse</h3>
                <p>Tunis, Tunisia</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Appelez nous</h3>
                <p>+216 55 270 867</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email </h3>
                <p>faten.maalej@themission.tn</p>
              </div>
            </div><!-- End Info Item -->

          </div>





          <div class="col-lg-8">
  <form action="contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
    <div class="form-field-pair">
      <div class="form-group">
        <input type="text" name="name" class="form" id="name" required>
        <label for="name" class="form-label">Nom</label>
      </div>
      <div class="form-group">
        <input type="email" class="form" name="email" id="email" required>
        <label for="email" class="form-label">Email</label>
      </div>
    </div>

    <div class="form-field-pair">
      <div class="form-group">
        <input type="text" class="form" name="subject" id="subject" required>
        <label for="subject" class="form-label">Sujet</label>
      </div>
      <div class="form-group">
        <input type="text" name="phone" class="form" id="phone" required>
        <label for="phone" class="form-label">Téléphone</label>
      </div>
    </div>

    <!-- Wrap the message field in a form-field-pair div -->
      <div class="form-group">
        <textarea class="form message" name="message" id="message" rows="5" required></textarea>
        <label for="message" class="form-label">Message</label>
      </div>

    <div class="text-center">
      <button type="submit" class="btn-submit">Envoyer</button>
    </div>

    <div class="loading">Chargement...</div>
    <div class="sent-message">Votre message a été envoyé. Merci!</div>
  </form>
</div>

  </main>

  <!-- Footer -->
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->
    </div>
</footer>
   <!-- Scroll Up Button -->
   <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
<!-- JS here -->
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/slick.min.js"></script>


<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>

<script src="assets/js/main.js"></script>
 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/index.js"></script>


</body>

</html>