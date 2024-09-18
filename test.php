<?php include 'header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Faire un don</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-white">Accueil</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Donation</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Donation Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Votre générosité fait la différence</h1>
                <p class="mb-4">Chaque don, peu importe son montant, contribue à soutenir nos programmes éducatifs, nos initiatives communautaires et notre mission de promouvoir l'harmonie et la compréhension.</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 rounded d-flex align-items-center p-5">
                    <iframe src="https://donate.stripe.com/test_dR64gF7mmbn68RG5kk" 
                            width="100%" 
                            height="600px" 
                            style="border:none; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" 
                            allowtransparency="true">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donation Section End -->

<!-- Impact Section Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h1 class="mb-4">L'impact de votre don</h1>
                    <p class="mb-4">Votre générosité permet de soutenir nos nombreuses initiatives, notamment :</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check bg-primary text-white rounded-circle p-2 me-3"></i>
                                <span>Programmes éducatifs</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check bg-primary text-white rounded-circle p-2 me-3"></i>
                                <span>Aide aux familles</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check bg-primary text-white rounded-circle p-2 me-3"></i>
                                <span>Événements culturels</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check bg-primary text-white rounded-circle p-2 me-3"></i>
                                <span>Initiatives de dialogue</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/donation-impact.jpg" style="object-fit: cover;" alt="Impact de votre don">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Impact Section End -->

<?php include 'footer.php'; ?>