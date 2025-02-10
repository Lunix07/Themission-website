<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/services/service-5/assets/css/service-5.css"> 

<style>
  /* Custom arrow styling */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-image: none;
    font-size: 5rem;
    color: orange;
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

  /* Card styling for vertical orientation */
  .card {
    height: 350px;
    width: 60%;
    margin: 0 auto;
    cursor: pointer; /* Make cards clickable */
  }
  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
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
  .card img {
    height: 295px;
    width: 400px;
    margin-left: -25px;
    margin-top: -40px;
    margin-right: 0px;
}
.close {
  position:relative;
    margin-left: 45vw;
    background-color: #fe9833;
}
</style>

<section class="bg-light fullscreen-section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-12 col-lg-5">
        <div class="row">
          <div class="col-12 col-xl-11">
            <h3 class="fs-6 text-secondary mb-3 mb-xl-4 text-uppercase">What We Do?</h3>
            <h2 class="display-5 mb-3 mb-xl-4">We are giving you perfect solutions with our proficient services.</h2>
            <p class="mb-3 mb-xl-4">Our comprehensive suite of services is designed to meet your every need and help you thrive in today's dynamic business landscape.</p>
            <a href="#!" class="btn bsb-btn-2xl btn-primary rounded-pill">More Details</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <!-- Card 1 -->
                <div class="col-12">
                  <div class="card border-0 border-bottom border-primary shadow-sm" onclick="openPreview('certif/certif1.pdf', 'ISO 9001')">
                    <div class="card-body text-center p-4 p-xxl-5">
                    <img src="certif/certif1.png" class="card-img-top">
                      <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 9001')"> En savoir plus sur la formation</a>
                    </div>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12">
                  <div class="card border-0 border-bottom border-primary shadow-sm" onclick="openPreview('certif/certif1.pdf', 'ISO 9001')">
                    <div class="card-body text-center p-4 p-xxl-5">
                    <img src="certif/certif1.png" class="card-img-top">
                      <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 9001')"> En savoir plus sur la formation</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <!-- Card 3 -->
                <div class="col-12">
                  <div class="card border-0 border-bottom border-primary shadow-sm" onclick="openPreview('certif/certif1.pdf', 'ISO 9001')">
                    <div class="card-body text-center p-4 p-xxl-5">
                    <img src="certif/certif1.png" class="card-img-top">
                      <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 9001')"> En savoir plus sur la formation</a>
                    </div>
                  </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12">
                  <div class="card border-0 border-bottom border-primary shadow-sm" onclick="openPreview('certif/certif1.pdf', 'ISO 9001')">
                    <div class="card-body text-center p-4 p-xxl-5">
                    <img src="certif/certif1.png" class="card-img-top">
                      <a href="#!" class="fw-bold text-decoration-none link-primary" onclick="event.stopPropagation(); openPreview('certif/certif1.pdf', 'ISO 9001')"> En savoir plus sur la formation</a>
                    </div>
                  </div>
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
