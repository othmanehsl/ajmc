<?php include 'header.php'; ?>

    <!-- Donation Page Header -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Faire un don</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Donation</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Donation Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Soutenez-nous</div>
                <h1 class="display-6 mb-5">Votre générosité fait la différence</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Faites un don en ligne</h4>
                        <p class="mb-4">Utilisez notre lien de paiement sécurisé Stripe pour faire un don rapidement et facilement.</p>
                        <a class="btn btn-outline-primary px-3" href="YOUR_STRIPE_PAYMENT_LINK" target="_blank">
                            Donner maintenant
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Scanner pour donner</h4>
                        <p class="mb-4">Scannez ce QR code avec votre smartphone pour accéder directement à notre page de don.</p>
                        <img src="path/to/your/qr-code.png" alt="QR Code pour donation" class="img-fluid mb-4" style="max-width: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Donate Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Pourquoi donner ?</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light text-center h-100 p-4 p-xl-5">
                        <i class="fa fa-graduation-cap fa-3x text-primary mb-4"></i>
                        <h4 class="mb-3">Soutenir l'éducation</h4>
                        <p class="mb-4">Vos dons permettent de financer des programmes éducatifs essentiels pour notre communauté.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light text-center h-100 p-4 p-xl-5">
                        <i class="fa fa-hands-helping fa-3x text-primary mb-4"></i>
                        <h4 class="mb-3">Renforcer la communauté</h4>
                        <p class="mb-4">Votre générosité aide à créer des liens plus forts au sein de notre communauté musulmane.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light text-center h-100 p-4 p-xl-5">
                        <i class="fa fa-mosque fa-3x text-primary mb-4"></i>
                        <h4 class="mb-3">Préserver notre patrimoine</h4>
                        <p class="mb-4">Vos dons contribuent à l'entretien et à l'amélioration de nos lieux de culte et centres communautaires.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>