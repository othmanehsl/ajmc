<?php include 'header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Contactez-nous</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-white">Accueil</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Info Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-2">Notre bureau</h5>
                        <p class="mb-0">58 mail des Charmilles, 10000 Troyes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-2">Contactez-nous</h5>
                        <p class="mb-0">+33 6 95 54 28 32</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-2">Email</h5>
                        <p class="mb-0">assoc.jmc@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Nous sommes à votre écoute</h1>
                <p class="mb-4">N'hésitez pas à nous contacter pour toute question ou demande d'information. Nous vous répondrons dans les plus brefs délais.</p>
                <form action="traitement.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="name" name="name" placeholder="Votre Nom" required>
                                <label for="name">Nom Complet</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light" id="email" name="email" placeholder="Votre Email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="subject" name="subject" placeholder="Sujet" required>
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 bg-light" placeholder="Laissez votre message ici" id="message" name="message" style="height: 150px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit" name="submitContact">
                                Envoyer le message
                                <i class="fa fa-paper-plane ms-2"></i>
                            </button>
                            <input type="hidden" name="redirect" value="contact.php">
                        </div>
                    </div>
                </form>
                <?php if (isset($_GET['status'])): ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire({
                            title: "<?php echo $_GET['status'] === 'success' ? 'Merci!' : 'Erreur!'; ?>",
                            text: "<?php echo $_GET['status'] === 'success' ? 'Votre message a été envoyé avec succès.' : 'Une erreur est survenue lors de l\'envoi de votre message.'; ?>",
                            icon: "<?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>"
                        });
                    </script>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.3208128186766!2d4.08465671133231!3d48.296681039952276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee98ef8f5c180b%3A0xe2c99707d8965ce8!2s58%20Pl.%20des%20Charmilles%2C%2010000%20Troyes%2C%20France!5e0!3m2!1sfr!2sma!4v1720804120437!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php include 'footer.php'; ?>
