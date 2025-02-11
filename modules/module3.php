<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheMission -Modules</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f7f9fa;
            color: #333;
            line-height: 1.6;
        }

        .intro-section {
            padding: 90px 20px;
            background: #99cbcc;
            color: white;
            text-align: center;
        }
        .intro-section h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .intro-section p {
            font-size: 1.2rem;
            max-width: 900px;
            margin: 0 auto;
            color: white;
            font-weight: bold;
        }

        .cards-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 0 20px;
            margin-top: -60px;
        }
        .card {
            background: #0940b8;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            text-align: center;
            width: 280px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .card-icon {
            font-size: 3rem;
            color: #0940b8;
            margin-bottom: 15px;
        }
        .card h3 {
            font-size: 1.4rem;
            color: orange;
            margin-bottom: 10px;
        }
        .card p {
            color: orange;
            font-size: 1rem;
        }
        .card.active {
            transform: scale(1.1);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .content-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            padding: 50px 20px;
            background: #ffffff;
            border-top: 4px solid #99cbcc;
            max-width: 1200px;
            margin: 0 auto;
            transition: all 0.5s ease-in-out;
        }

        .content-section {
            flex: 1;
            min-width: 280px;
            max-width: 45%;
            padding: 20px;
            background: #f1f4f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }
        .content-section.active {
            display: block;
            margin-top: 90px;
            margin-bottom: 100px;
        }
        .content-section h2 {
            color: #0940b8;
            font-size: 1.6rem;
            margin-bottom: 10px;
        }
        .content-section p {
            color: #333;
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .content-section {
                max-width: 100%;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
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

    <?php include 'header.php'; ?>

    <section class="intro-section">
        <h1>Module N°3: Gestion des Parties Prenantes</h1>
        <p>La gestion des parties prenantes est cruciale pour établir et maintenir des relations harmonieuses avec toutes les entités qui influencent ou sont influencées par votre organisme. MISSION PROCESS vous propose des outils performants pour gérer efficacement ces relations, tout en répondant proactivement à leurs attentes.Avec MISSION PROCESS, transformez la gestion des parties prenantes en un atout stratégique, en garantissant une communication fluide, un suivi rigoureux et une capacité d’adaptation aux besoins évolutifs de votre environnement.</p>
    </section>

    <section class="cards-section">
    <div class="card" onclick="showContent('content1', this)">
        <div class="card-icon">📖</div>
        <h3>Identification et Analyse des Parties Prenantes</h3>
        <p>Comprenez l'importance des parties prenantes et leur impact sur votre système de management.</p>
    </div>
    <div class="card" onclick="showContent('content2', this)">
        <div class="card-icon">🌟</div>
        <h3>Actions Proactives et Suivi Efficace</h3>
        <p>Mettez en place des actions préventives et optimisez le suivi de vos démarches.</p>
    </div>
    <div class="card" onclick="showContent('content3', this)">
        <div class="card-icon">✨</div>
        <h3>Intégration dans le Système de Management</h3>
        <p>Adoptez une approche intégrée pour améliorer vos performances en qualité, sécurité et environnement.</p>
    </div>
</section>

    <section class="content-container">
        <!-- Content for Introduction -->
        <div id="content1" class="content-section">
            <h2>Cartographie des parties prenantes</h2>
            <p>Identifiez et enregistrez les personnes et organisations susceptibles d’impacter vos opérations ou d'être affectées par vos décisions, vous permettant ainsi d’avoir une vision claire de leur influence</p>
        </div>
        <div id="content1" class="content-section">
            <h2>Évaluation des attente</h2>
            <p>Analysez les besoins et attentes de chaque partie prenante pour prioriser vos actions et garantir un alignement optimal avec leurs exigences.</p>
        </div>

        <!-- Content for Key Concepts -->
        <div id="content2" class="content-section">
            <h2>Mise en œuvre ciblée des actions </h2>
            <p>Adoptez une approche proactive en prenant des mesures appropriées pour répondre rapidement et efficacement aux demandes des parties prenantes.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Suivi des initiatives</h2>
            <p>Assurez un suivi constant des actions mises en place pour garantir leur efficacité, tout en ajustant vos stratégies selon les retours reçus.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Évaluation des formations</h2>
            <p>Mesurez l’efficacité des formations grâce à des outils d’évaluation à chaud et à froid, pour ajuster continuellement les programmes et répondre aux évolutions des compétences requises.</p>
        </div>
        <!-- Content for Advanced Topics -->
        <div id="content3" class="content-section ">
            <h2>Intégration des retours</h2>
            <p>Assurez-vous que les besoins et retours des parties prenantes sont pris en compte lors de vos revues de direction, garantissant ainsi des décisions éclairées et stratégiques.</p>
        </div>
        <div id="content3" class="content-section ">
            <h2>Adaptabilité et flexibilité</h2>
            <p>Grâce à une gestion systématique des attentes, votre organisme est en mesure de s’adapter aux changements et aux nouveaux défis du marché tout en renforçant ses relations avec les parties prenantes.</p>
        </div>
    </section>

    <footer>
        <div class="footer-wrapper section-bg2 pl-100" data-background="assets/img/gallery/footer-bg.png">
            <?php include 'footer.php'; ?>
        </div>
    </footer>

                <script src="assets/js/main.js"></script>

    <script>
        function showContent(contentId, cardElement) {
            const contents = document.querySelectorAll('.content-section');
            contents.forEach(content => content.classList.remove('active'));
            const matchingContents = document.querySelectorAll(`#${contentId}`);
            matchingContents.forEach(content => content.classList.add('active'));
            
            // Remove active class from all cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => card.classList.remove('active'));
            
            // Add active class to the clicked card
            cardElement.classList.add('active');
        }
    </script>
</body>
</html>
