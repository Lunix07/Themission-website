<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheMission -Modules</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
 /* Import Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Background & Overall Layout */
body {
    background: #f4f7f9;
    color: #333;
    line-height: 1.6;
}

/* Header Section */
.intro-section {
    padding: 90px 20px;
    background: linear-gradient(135deg, #74b9b0, #4a8f92);
    color: white;
    text-align: center;
}
.intro-section h1 {
    font-size: 2.8rem;
    margin-bottom: 15px;
    font-weight: 600;
}
.intro-section p {
    font-size: 1.2rem;
    max-width: 900px;
    margin: 0 auto;
    font-weight: 400;
}

/* Cards Section */
.cards-section {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0 20px;
    margin-top: -50px;
}

.card {
    background: #0056b3; /* Deep blue for modern look */
    border-radius: 14px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    padding: 40px 30px;
    text-align: center;
    width: 320px;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
    color: white;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.card-icon {
    font-size: 3rem;
    color: #ff9800; /* Modern orange */
    margin-bottom: 15px;
}

.card h3 {
    font-size: 1.5rem;
    color: white;
    margin-bottom: 10px;
    font-weight: 600;
}

.card p {
    color: #ffcc80; /* Softer orange */
    font-size: 1rem;
    font-weight: 400;
}

.card.active {
    transform: scale(1.1);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Content Section */
.content-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    padding: 60px 20px;
    background: #ffffff;
    border-top: 4px solid #4a8f92;
    max-width: 1200px;
    margin: 0 auto;
    transition: all 0.5s ease-in-out;
}

.content-section {
    flex: 1;
    min-width: 300px;
    max-width: 45%;
    padding: 25px;
    background: #eef3f7;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    display: none;
}

.content-section.active {
    display: block;
    margin-top: 70px;
    margin-bottom: 80px;
}

.content-section h2 {
    color: #0056b3;
    font-size: 1.6rem;
    margin-bottom: 12px;
    font-weight: 600;
}

.content-section p {
    color: #333;
    font-size: 1rem;
    line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
    .cards-section {
        flex-direction: column;
        align-items: center;
    }
    
    .content-section {
        max-width: 100%;
    }
}

/* Fade-in Animation */
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
        <h1 >Module N°2: Gestion optimisée des Ressources Humaines</h1>
        <p >La performance de votre organisme dépend directement de la gestion efficace de vos équipes. MISSION PROCESS propose des solutions adaptées pour organiser, suivre et optimiser les compétences, les formations et l'implication de vos collaborateurs.</p>
    </section>

    <section class="cards-section">
    <div class="card" onclick="showContent('content1', this)">
        <div class="card-icon">👥</div>
        <h3>Organisation des Ressources Humaines</h3>
        <p>Optimisez la structuration et la répartition des ressources pour une gestion efficace.</p>
    </div>
    <div class="card" onclick="showContent('content2', this)">
        <div class="card-icon">📚</div>
        <h3>Gestion des Formations</h3>
        <p>Renforcez les compétences de vos équipes grâce à des programmes adaptés.</p>
    </div>
    <div class="card" onclick="showContent('content3', this)">
        <div class="card-icon">📈</div>
        <h3>Suivi et Amélioration Continue des Ressources Humaines</h3>
        <p>Évaluez les performances et mettez en place des plans d'amélioration durables.</p>
    </div>
</section>


    <section class="content-container">
        <!-- Content for Introduction -->
        <div id="content1" class="content-section">
            <h2>Organigramme dynamique et fiches de fonction</h2>
            <p>Visualisez la structure de votre organisme en temps réel, avec des fiches de fonction détaillant les responsabilités et les compétences requises pour chaque poste. Cela permet de suivre l’évolution de votre personnel et d’adapter la répartition des responsabilités.</p>
        </div>
        <div id="content1" class="content-section">
            <h2>Matrice de compétences </h2>
            <p>Identifiez rapidement les compétences disponibles et celles manquantes dans votre organisme. La matrice de compétences permet d’optimiser l’affectation des talents et de repérer les besoins en formation ou en recrutement.</p>
        </div>

        <!-- Content for Key Concepts -->
        <div id="content2" class="content-section">
            <h2>Suivi en temps réel des formations </h2>
            <p>Depuis la demande jusqu’à l’évaluation post-formation, MISSION PROCESS permet de piloter la planification, l'exécution et le suivi des formations en fonction des besoins individuels et organisationnels.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Coordination avec les organismes formateurs</h2>
            <p>Optimisez la gestion des partenariats avec des organismes externes pour garantir que les programmes répondent aux attentes et aux objectifs de votre équipe.</p>
        </div>
        <div id="content2" class="content-section">
            <h2>Évaluation des formations</h2>
            <p>Mesurez l’efficacité des formations grâce à des outils d’évaluation à chaud et à froid, pour ajuster continuellement les programmes et répondre aux évolutions des compétences requises.</p>
        </div>
        <!-- Content for Advanced Topics -->
        <div id="content3" class="content-section ">
            <h2>Satisfaction du personnel</h2>
            <p>Menez des enquêtes et des consultations régulières pour mesurer la satisfaction de vos équipes, identifier les points d’amélioration et renforcer l’engagement des collaborateurs.</p>
        </div>
        <div id="content3" class="content-section ">
            <h2>Alertes et rappels automatisés</h2>
            <p>Gérez les habilitations, formations et évaluations grâce à des notifications automatiques, garantissant un suivi rigoureux et une réduction des risques d’oubli.</p>
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
