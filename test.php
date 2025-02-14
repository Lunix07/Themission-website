<?php
// Initialize session
session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MissionProcess - Formations</title>
    <meta name="description" content="MissionTrack est une application pour la gestion de la qualité d’entreprise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/loder.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">    
     <link rel="stylesheet" href="assets/css/formations.css">

    <link rel="stylesheet" href="assets/css/style.css">


<style>
  /* Custom arrow styling */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-image: none;
    font-size: 5rem;
    color: orange;
    height: 12rem;

  }
  .carousel-control-prev-icon::before {
    content: '‹';
  }
  .carousel-control-next-icon::before {
    content: '›';
  }

  /* Fullscreen section */
  .fullscreen-section {
    min-height: 100vh;
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  /* Image styling and hover effect */
  .carousel-image-container {
    width: 70%;
    margin: 0 auto;
    position: relative;
  }

  .carousel-image {
    height: auto;
    width: 100%;
    transition: transform 0.4s ease;
    
  }

  .carousel-image:hover {
    transform: scale(1.03);
    
  }

  .carousel-caption {
    position: relative;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
  }
  /* Modal styling */
  .modal-content {
    height: 90vh;
    border-radius: 10px;
  }
  .modal iframe {
    width: 100%;
    height: 100%;
    border: none;
  }

</style>
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


<section class="bg-light fullscreen-section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row">
          <div class="col-12 col-xl-11">
            <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">Ce qu'on vous offre?</h3>
            <h1 class="display-5 mb-3 mb-xl-4">Un accés aux meilleures formations certifiantes</h1>
            <p class="mb-3 mb-xl-4">Pour optimiser vos processus QSE et obtenir votre certification, notre cabinet réalise des accompagnements personnalisés en management de QSE visant à obtenir ou pérenniser votre certification.</p>
            <a href="/themission#contact" class="btn bsb-btn-2xl btn-primary rounded-pill"> Plus d'informations</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-image-container">
                <img src="certif/certif1.png" class="carousel-image" onclick="openPreview('certif/certif1.pdf', 'ISO 31000')">
                <div class="carousel-caption">
                  <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 31000')">En savoir plus sur la formation</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="carousel-image-container">
                <img src="certif/certif1.png" class="carousel-image" onclick="openPreview('certif/certif1.pdf', 'ISO 31000')">
                <div class="carousel-caption">
                  <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 31000')">En savoir plus sur la formation</a>
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PDF Preview Modal -->
<div id="previewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="modalTitle" class="modal-title"></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <iframe id="pdfViewer" src=""></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Footer Start -->
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
   <?php include 'footer.php'; ?>
      </div>
  </footer>
    <!-- Footer End -->

      <!-- JS here -->
          <!-- JS important pour footer et loader -->

                <script src="assets/js/main.js"></script>


   
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function openPreview(pdfPath, title) {
    document.getElementById('pdfViewer').src = pdfPath + "#toolbar=1&zoom=20";
    document.getElementById('modalTitle').innerText = title;
    $('#previewModal').modal('show');
  }

  $('#previewModal').on('hidden.bs.modal', function () {
    document.getElementById('pdfViewer').src = ''; // Clear iframe when modal closes
  });
</script> 
</body>
</html>

