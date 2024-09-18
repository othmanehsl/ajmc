<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AJMC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="AJMC - Association de la jeunesse musulmane à Troyes. Promouvoir la foi, l'éducation et l'harmonie communautaire." name="description">

    <link href="img/favicon.png" rel="icon">

    <!-- polices google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- feuilles de style pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- des bibliothèques -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- feuille de style personnalisée de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- fichier css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Début du Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Fin du Spinner -->

        <!-- Navbar -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>58 mail des Charmilles, 10000 Troyes</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>assoc.jmc@gmail.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <a class="text-white-50 ms-3" href="https://www.facebook.com/profile.php?id=100067006084846&locale=fr_FR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href="https://www.instagram.com/ajmc_mosquee_al_ihsan/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logo.png" class="logo-desktop" height="120px" alt="">
                <img src="img/logo_icon.png" class="logo-mobile" alt="">
            </a>            
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Accueil</a>
                    <a href="about.php" class="nav-item nav-link">Qui sommes-nous</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Institutions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cik.php">CIK</a></li>
                            <li><a class="dropdown-item" href="isct.php">ISCT</a></li>
                            <li><a class="dropdown-item" href="irsi.php">IRSI</a></li>
                        </ul>
                    </li>
                    <a href="contact.php" class="nav-item nav-link">Nous contactez</a>
                    <div class="donation-button-wrapper nav-item">
                        <a class="btn btn-outline-primary py-2 px-3 btn-donate" href="donation.php">
                          Faire un don
                          <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar fin -->