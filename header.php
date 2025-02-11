<header>
    <style>
        /* Sticky Header */
.header-sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000; /* Ensures it stays on top of all content */
    background-color: #fff; /* Ensure a background color for visibility */
    transition: all 0.3s ease;
    height: 65px;

}



/* Ensure there’s no overlap when header becomes sticky */
.main-header {
    padding: 20px 0;
}

    </style>
        <link rel="stylesheet" href="assets/css/style.css">

        <div class="header-area header_area">
            <div class="main-header">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <div class="header-left d-flex f-right align-items-center">
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php">Accueil</a></li>
                                                <li><a href="index.php#about">Qui sommes-nous</a>
                                                </li>
                                                <li><a href="formations.php#formations">Nos formations</a>

                                                <li><a href="index.php#clients">Nos clients</a></li>
                                                <li><a href="app.php">Notre application</a></li>
                                                <li><a href="index.php#contact">Contact</a></li>


                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>