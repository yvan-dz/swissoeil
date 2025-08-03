<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
    <title>Swissoeil - Contact</title>
    <meta name="description"
        content="Cabinet d'ophtalmologie à Genève, offrant des services de soins oculaires de haute qualité. Notre équipe d'experts est dédiée à la santé de vos yeux.">
    <meta author="Websnape & Elevryx">
    <meta name="keywords"
        content="ophtalmologie, soins oculaires, Genève, santé des yeux, cataracte, glaucome, laser, rétine, vision, santé visuelle">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- header area start -->
    <!-- header area start -->
    <?php include 'header.php' ?>
    <!-- header area end -->

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area3 bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Contact</h1>
                    <div class="nav-bread-crumb">
                        <a href="index.php">Acceuil</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->


    <!-- contact us area start -->
    <div class="rts-contact-top-wrapper rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h2 class="title text-center move-right wow">Information de contact générale</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="assets/images/contact/01.png" alt="icons">
                        </div>
                        <a href="#">
                            Rue de la gare 8 Monthey
                            <br>
                            1920 Martigny
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="assets/images/contact/02.png" alt="icons">
                        </div>
                        <a href="tel:+41 027 722 29 31">
                            +41 027 722 29 31
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="assets/images/contact/03.png" alt="icons">
                        </div>
                        <a href="#">
                            Lun-Ven: 08:30 – 18:00 <br>
                            Samedi: Fermé
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->

    <!-- google map area start -->
    <div class="google-map-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gogle-map-wrapper">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2766.2666722049667!2d7.072354275611514!3d46.10559297109172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ec82d347a7123%3A0x4bca24766dd9e87d!2sRue%20du%20L%C3%A9man%2018B%2C%201920%20Martigny%2C%20Suisse!5e0!3m2!1sfr!2scm!4v1753725247281!5m2!1sfr!2scm"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- google map area end -->

    <!-- contact form section start-->
    <div class="contact-form-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="appoinment-area-main contact-page appoinment-page bg_image">
                        <form action="#">
                            <div class="half-input-wrapper">
                                <input type="text" placeholder="Votre Nom">
                                <input type="email" placeholder="Adresse Mail">
                            </div>
                            <div class="search-input">
                                <select class="" style="display: none;">
                                    <option data-display="Select Department">Choisir un service</option>
                                    <option value="Bilan de vue">Bilan de vue</option>
                                    <option value="Chirugie(Cataracte, Glaucome)">Chirugie(Cataracte, Glaucome)</option>
                                    <option value="Consultation">Consultation</option>
                                    <option value="Laser et imagerie de la rétine">Laser et imagerie de la rétine
                                    </option>
                                </select>
                                <div class="nice-select custom-select one" style="flex-basis: 50%;" tabindex="0">
                                    <span class="current">Choisir un service</span>
                                    <ul class="list">
                                        <li data-value="Bilan de vue" data-display="Bilan de vue"
                                            class="option selected focus">Bilan de vue</li>
                                        <li data-value="Chirugie(Cataracte, Glaucome)" class="option">
                                            Chirugie(Cataracte, Glaucome)</li>
                                        <li data-value="Consultation" class="option">Consultation</li>
                                        <li data-value="Laser et imagerie de la rétine" class="option">Laser et imagerie
                                            de la rétine</li>
                                    </ul>
                                </div>
                            </div>
                            <input type="text" placeholder="Your Email">
                            <textarea class="mb--15" name="#" id="textarea" placeholder="Votre Message"></textarea>
                            <a href="#" class="rts-btn btn-primary">Contacter</a>
                        </form>
                    </div>
                </div>
                
                    
                     <div class="col-lg-6">
                    <!--      <div class="thumbnail-appoinment wow move-right">-->
                    <!--   <img src="assets/images/appoinment/pic1.jpg" width="200px" alt="">-->
                    <!--</div>-->
                   <div class="thumbnail-appoinment wow move-right">
                       <img src="assets/images/appoinment/pic2.jpg" width="200px" alt="">
                    </div>
                </div>
                   
                 
                
            </div>
        </div>
    </div>
    <!-- contact form section end -->

    <!-- header area start -->
    <?php include 'footer.php' ?>

    <script src="assets/js/plugins/jquery.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/vendor/waw.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/metismenu.js"></script>
    <script src="assets/js/plugins/jarallax.js"></script>
    <script src="assets/js/plugins/smooth-scroll.js"></script>
    <script src="assets/js/plugins/magnifying-popup.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- main js here -->
    <script src="assets/js/main.js"></script>

</body>

</html>