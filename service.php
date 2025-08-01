<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
    <title>Swissoeil - Services</title>
    <meta name="description"
        content="Cabinet d'ophtalmologie à Genève, offrant des services de soins oculaires de haute qualité. Notre équipe d'experts est dédiée à la santé de vos yeux.">
    <meta author="Websnape & Elevryx">
    <meta name="keywords"
        content="ophtalmologie, soins oculaires, Genève, santé des yeux, cataracte, glaucome, laser, rétine, vision, santé visuelle">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        :root {
        --rouge-suisse: #c8102e;
        --gris-fonce: #1f2429;
        --gris-medium: #555d6b;
        --gris-clair: #f9f9fb;
        --radius: 12px;
        --shadow: 0 18px 40px -10px rgba(31,36,41,0.08);
        --transition: .25s cubic-bezier(.4,.2,.2,1);
        --max-width: 1100px;
        --base-line: 1.6;
        font-family: "Inter", "Segoe UI", system-ui, -apple-system, Arial, sans-serif;
    }

    body {
        background: #fff;
        margin: 0;
        padding: 0;
        color: var(--gris-fonce);
        line-height: var(--base-line);
    }

    .page-wrapper {
        max-width: var(--max-width);
        margin: 0 auto;
        padding: 60px 20px 100px;
    }

    .toc {
    background: var(--rouge-suisse);
    color: #ffffff;
    border-radius: 16px;
    padding: 24px 28px;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.05);
    max-width: 320px;
    margin: 0 0 60px 0;
    font-family: "Inter", sans-serif;
    font-size: 15px;
}

.toc .group {
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: flex-start;
}

.toc .group > div {
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #ffffff;
    margin-bottom: 6px;
}

.toc a {
    text-decoration: none;
    color: #ffffff;
    position: relative;
    padding-left: 18px;
    line-height: 1.6;
    transition: opacity 0.2s ease;
}

.toc a::before {
    content: "";
    width: 8px;
    height: 8px;
    background-color: #ffffff;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 6px;
}

.toc a:hover {
    opacity: 0.85;
}

.toc a:hover::before {
    background-color: #e0e0e0;
}


    .section {
        margin-bottom: 70px;
        scroll-margin-top: 100px;
    }

    .small-title {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1.5px;
        color: var(--rouge-suisse);
        font-weight: 700;
        margin-bottom: 6px;
    }

    .section-title {
        font-size: 34px;
        margin: 4px 0 14px;
        font-weight: 700;
        line-height: 1.1;
        letter-spacing: -0.5px;
    }

    .subtitle {
        font-size: 20px;
        margin: 6px 0 18px;
        font-weight: 500;
        color: var(--gris-medium);
    }

    .lead {
        font-size: 16px;
        margin-bottom: 24px;
        font-weight: 400;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 24px;
        margin-top: 8px;
    }

    .card {
        background: #fff;
        border: 1px solid #e3e8ee;
        border-radius: var(--radius);
        padding: 22px 24px;
        position: relative;
        overflow: hidden;
        transition: var(--transition);
        box-shadow: var(--shadow);
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 28px 60px -10px rgba(31,36,41,0.12);
    }

    .card h4 {
        margin: 0 0 8px;
        font-size: 18px;
        font-weight: 600;
        color: var(--gris-fonce);
    }

    .card .small-caption {
        font-size: 13px;
        margin: 4px 0 12px;
        color: #6f7582;
        font-weight: 500;
    }

    .list-plain {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .list-plain li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 10px;
        position: relative;
        padding-left: 20px;
        font-size: 15px;
    }

    .list-plain li:before {
        content: "";
        position: absolute;
        left: 0;
        top: 6px;
        width: 10px;
        height: 10px;
        background: var(--rouge-suisse);
        border-radius: 50%;
    }

    .highlight-box {
        background: #fff8f9;
        border-left: 4px solid var(--rouge-suisse);
        padding: 20px 22px;
        border-radius: 8px;
        margin: 16px 0;
        font-size: 15px;
    }

    .btn {
        display: inline-block;
        padding: 14px 28px;
        border-radius: 14px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        letter-spacing: .5px;
    }

    .btn-primary {
        background-color: var(--rouge-suisse);
        color: #fff;
        box-shadow: 0 14px 40px rgba(200,16,46,0.35);
    }

    .btn-primary:hover {
        background-color: #a10f2a;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: transparent;
        color: var(--rouge-suisse);
        border: 2px solid var(--rouge-suisse);
        padding: 12px 26px;
    }

    .btn-secondary:hover {
        background: var(--rouge-suisse);
        color: #fff;
    }

    .location-box {
        background: #fff;
        border: 1px solid #e3e8ee;
        padding: 20px 24px;
        border-radius: var(--radius);
        display: flex;
        gap: 18px;
        align-items: flex-start;
        flex-wrap: wrap;
        margin-top: 10px;
        box-shadow: var(--shadow);
    }

    .location-details {
        flex: 1 1 320px;
    }

    .testimonial-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 16px;
    }

    .testimonial {
        flex: 1 1 280px;
        background: #fff;
        border: 1px solid #e3e8ee;
        padding: 18px 20px;
        border-radius: 10px;
        position: relative;
        font-size: 14px;
        box-shadow: 0 14px 34px rgba(31,36,41,0.06);
    }

    .testimonial p {
        margin: 0;
    }

    .testimonial .author {
        margin-top: 8px;
        font-weight: 600;
        font-size: 13px;
        color: #444;
    }

    .divider {
        height: 1px;
        background: #e8ebf0;
        margin: 50px 0;
    }

    .anchor-link {
        display: inline-block;
        margin-right: 12px;
        font-size: 14px;
        color: var(--rouge-suisse);
        text-decoration: none;
        font-weight: 600;
    }

    .mini-sub {
        font-size: 13px;
        color: #666;
        margin-top: 4px;
    }
</style>
</head>

<body>
    <!-- header area start -->
    <?php include 'header.php' ?>
    <!-- header area end -->

    <!-- rts breadcrumb area start -->
    <div class="rts-breadcrumb-area bg_image rts-section-gap">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper">
                    <h1 class="title">Chirugie</h1>
                    <div class="nav-bread-crumb">
                        <a href="index.php">Acceuil</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a href="#" class="current">Chirugie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->


<!-- service details area start -->

<div class="page-wrapper">
    <!-- Table des matières -->
    <div class="toc" aria-label="Table des matières">
        <div class="group">
            <div style="font-weight:700; margin-bottom:6px;">Navigation</div>
            <a href="#presentation">1. Présentation</a>
            <a href="#consultations">2. Consultations</a>
            <a href="#location">3. Localisation</a>
            <a href="#rdv">4. Rendez-vous</a>
            <a href="#avis">5. Avis</a>
        </div>
    </div>

    <!-- 1. Présentation du cabinet -->
    <section class="section" id="presentation">
        <div class="small-title">Swiss Œil</div>
        <h1 class="section-title">Centre ophtalmologique à Monthey</h1>
        <p class="subtitle">L’excellence suisse au service de votre vision</p>
        <p class="lead">
            Bienvenue chez <strong>Swiss Œil</strong>, votre centre d’ophtalmologie à Monthey, dédié à la santé de vos yeux. Notre cabinet prend en charge l’ensemble des pathologies oculaires dans un cadre moderne, technologique et bienveillant, au cœur du Valais.
        </p>

        <div class="card">
            <h4>Nos prestations</h4>
            <ul class="list-plain spaced-list">
                <li>Bilan visuel pour lunettes, lentilles et permis de conduire</li>
                <li>Dépistage et traitement de la cataracte</li>
                <li>Suivi du glaucome</li>
                <li>Prise en charge de la DMLA (Dégénérescence Maculaire Liée à l’Âge)</li>
                <li>Kératocône et autres pathologies cornéennes</li>
                <li>Rétinopathie diabétique, occlusions veineuses et affections rétiniennes</li>
                <li>Sécheresse oculaire et troubles de la surface oculaire</li>
                <li>Urgences ophtalmologiques</li>
            </ul>
        </div>

        <div class="divider"></div>

        <div class="two-col" style="gap: 60px;">
            <div class="half">
                <div class="small-title">Expertise</div>
                <h2 class="section-title" style="font-size: 26px;">Un spécialiste reconnu</h2>
                <p class="lead">
                    Le Dr Gérard Djoukwe, médecin ophtalmologue spécialiste FMH, est membre de :
                </p>
                <ul class="list-plain spaced-list">
                    <li>La Société Suisse d’Ophtalmologie (SSO)</li>
                    <li>La Société Européenne de Chirurgie Réfractive et de la Cataracte (ESCRS)</li>
                </ul>
                <p>
                    Fort d’une solide expertise clinique et d’une expérience confirmée en milieu hospitalier et en cabinet, il propose une prise en charge rigoureuse, humaine et personnalisée, fondée sur les dernières recommandations scientifiques.
                </p>
            </div>
            <div class="half">
                <div class="small-title" style="margin-top: 5%;">Technologie</div>
                <h2 class="section-title" style="font-size: 26px;">Équipements de dernière génération</h2>
                <p class="lead">
                    Le cabinet Swiss Œil dispose d’un plateau technique avancé, garantissant un diagnostic précis et des traitements adaptés.
                </p>
                <div class="highlight-box">
                    <ul class="list-plain spaced-list">
                        <li><strong>OCT Heidelberg Engineering :</strong> imagerie en haute définition de la rétine, du nerf optique et de la macula pour un dépistage précoce et un suivi pointu des pathologies comme le glaucome, la DMLA ou les œdèmes rétiniens.</li>
                        <li><strong>Système de réfraction automatisée NIDEK :</strong> mesure ultra-précise de la vision pour une correction visuelle sur mesure.</li>
                        <li><strong>Lampe à fente Haag-Streit 900 :</strong> examen fin du segment antérieur avec optiques de haute performance et éclairage LED puissant.</li>
                    </ul>
                </div>
                <p>
                    Ces technologies, combinées à l’expertise du Dr Djoukwe, permettent de proposer des soins conformes aux standards d’excellence de la médecine suisse.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. Consultations -->
<section class="section" id="consultations">
  <div class="small-title">Consultations</div>
  <h2 class="section-title">Types de consultations ophtalmologiques</h2>
  <p class="lead">Swiss Œil – Monthey vous propose un accompagnement sur mesure pour chaque profil de patient, du dépistage précoce à la chirurgie spécialisée.</p>

  <div class="cards">

    <!-- 1. Bilan visuel -->
    <div class="card">
      <h4>1. Bilan visuel</h4>
      <p class="small-caption"><strong>But</strong> : Évaluer la vision et prescrire une correction ou un certificat</p>
      <ul class="list-plain">
        <li>Interrogatoire médical</li>
        <li>Mesure acuité visuelle (loin et près)</li>
        <li>Réfraction objective et subjective</li>
        <li>Examen à la lampe à fente</li>
        <li>Prescription lunettes ou lentilles</li>
        <li>Certificat pour permis de conduire</li>
      </ul>
    </div>

    <!-- 2. Pédiatrique -->
    <div class="card">
      <h4>2. Pédiatrique</h4>
      <p class="small-caption"><strong>But</strong> : Détecter précocement les troubles visuels chez l’enfant</p>
      <ul class="list-plain">
        <li>Entretien parental</li>
        <li>Test d’acuité visuelle adapté</li>
        <li>Dépistage du strabisme</li>
        <li>Réfraction sous cycloplégie</li>
        <li>Examen du segment antérieur et fond d’œil</li>
        <li>Orientation vers orthoptie si besoin</li>
      </ul>
    </div>

    <!-- 3. Senior -->
    <div class="card">
      <h4>3. Senior & pathologies liées à l’âge</h4>
      <p class="small-caption"><strong>But</strong> : Prévenir la perte de vision liée au vieillissement</p>
      <ul class="list-plain">
        <li>Anamnèse ciblée</li>
        <li>Acuité visuelle + pression intraoculaire</li>
        <li>Champ visuel (glaucome)</li>
        <li>OCT macula + nerf optique</li>
        <li>Fond d’œil et biomicroscopie</li>
      </ul>
    </div>

    <!-- 4. Téléophtalmologie -->
    <div class="card">
      <h4>4. Téléophtalmologie</h4>
      <p class="small-caption"><strong>But</strong> : Offrir un avis ou suivi à distance</p>
      <ul class="list-plain">
        <li>Transmission d’images sécurisée</li>
        <li>Analyse médicale à distance</li>
        <li>Compte-rendu et recommandations</li>
        <li>Consultation en présentiel si besoin</li>
      </ul>
    </div>

    <!-- 5. Consultation spécialisée -->
    <div class="card">
      <h4>5. Consultation spécialisée</h4>
      <p class="small-caption"><strong>But</strong> : Diagnostiquer des pathologies complexes</p>
      <ul class="list-plain">
        <li>Rétine : OCT, fond d’œil, angiographie</li>
        <li>Cornée : topographie, kératocône</li>
        <li>Neuro-ophtalmologie : champ visuel, pupille</li>
        <li>Chirurgie réfractive : bilan et consentement</li>
      </ul>
    </div>

    <!-- 6. Urgences -->
    <div class="card">
      <h4>6. Urgences ophtalmologiques</h4>
      <p class="small-caption"><strong>But</strong> : Intervenir rapidement en cas de danger visuel</p>
      <ul class="list-plain">
        <li>Baisse brutale de la vision</li>
        <li>Douleur, corps étranger</li>
        <li>Flashs lumineux, vision double</li>
        <li>Traitement immédiat et suivi</li>
      </ul>
    </div>

    <!-- 7. Pré-opératoire -->
    <div class="card">
      <h4>7. Pré-opératoire</h4>
      <p class="small-caption"><strong>But</strong> : Confirmer l’indication chirurgicale</p>
      <ul class="list-plain">
        <li>Bilan visuel complet</li>
        <li>Examens spécifiques selon l’intervention</li>
        <li>Choix de l’implant</li>
        <li>Information et consentement</li>
      </ul>
    </div>

    <!-- 8. Post-opératoire -->
    <div class="card">
      <h4>8. Post-opératoire</h4>
      <p class="small-caption"><strong>But</strong> : Vérifier la cicatrisation et ajuster le traitement</p>
      <ul class="list-plain">
        <li>Contrôle de l’acuité visuelle</li>
        <li>Inspection lampe à fente</li>
        <li>Contrôle de la tension oculaire</li>
        <li>Planification du suivi</li>
      </ul>
    </div>

    <!-- 9. Suivi régulier -->
    <div class="card">
      <h4>9. Suivi médical régulier</h4>
      <p class="small-caption"><strong>But</strong> : Contrôle annuel ou suivi de pathologies chroniques</p>
      <ul class="list-plain">
        <li>Révision de l’historique</li>
        <li>Comparaison des examens</li>
        <li>Tests ciblés selon pathologie</li>
        <li>Adaptation du traitement</li>
      </ul>
    </div>

  </div>
</section>

    <!-- 3. Où il se trouve -->
    <section class="section" id="location">
        <div class="small-title">Où nous trouver</div>
        <h2 class="section-title">Adresse de consultation</h2>
        <div class="location-box">
            <div class="location-details">
                <p class="lead">
                    Le Dr Gérard Djoukwe reçoit ses patients à l’adresse suivante :
                </p>
                <p style="margin:0; font-weight:700; font-size:16px;">
                    CMC OPHTA LEMAN<br>
                    Rue du Léman 18B,<br>
                    1920 Martigny
                </p>
                <p class="small-caption" style="margin-top:8px;">
                    Cabinet facilement accessible dans le Valais, avec parkings et transports à proximité.
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Comment prendre rendez-vous -->
    <section class="section" id="rdv">
        <div class="small-title">Prise de rendez-vous</div>
        <h2 class="section-title">Réservez en toute sécurité</h2>
        <p class="lead">
            La prise de rendez-vous se fait en ligne via <strong>OneDoc</strong>, plateforme reconnue pour sa sécurité et son respect strict des données personnelles. Vous choisissez votre créneau, recevez une confirmation instantanée et gérez facilement vos rendez-vous.
        </p>
        <a class="btn btn-primary" href="https://www.onedoc.ch/fr/ophtalmologue/martigny/pcubn/dr-gerard-djoukwe" target="_blank">
            Prendre rendez-vous
        </a>
        <p class="small-caption" style="margin-top:12px;">
            Plateforme sécurisée – données chiffrées et confidentialité garanties.
        </p>
    </section>

    <!-- rts testimonials area start -->
    <div class="rts-testimonials-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center">
                        <span class="pre">Retour Client</span>
                        <h2 class="title text-center">Ce qu'ils<br> Disent</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-5">
                <div class="col-lg-12">
                    <div class="swiper swiper-container-h1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-testimonials-style">
                                    <div class="quots">
                                        <img src="assets/images/testimonials/quotes.png" alt="testimonails">
                                    </div>
                                    <p class="disc">
                                        Praticien flexible et compréhensif ( enfant TSA &TDAH) Il a su s'adapter immédiatement à la situation. Merci pour votre patience.
                                    <div class="author-area">
                                        <a href="#" class="img">
                                            <img src="assets/images/testimonials/user.png" alt="testiminials">
                                        </a>
                                        <div class="info">
                                            <h6 class="name">Cosme</h6>
                                            <div class="stars-area">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/testimonials/02.png" alt="service">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style">
                                    <div class="quots">
                                        <img src="assets/images/testimonials/quotes.png" alt="testimonails">
                                    </div>
                                    <p class="disc">
                                        Tout s’est bien passé, le docteur expliques bien les choses et l’assistante a été adorable et décrit également tout ce qu’elle va faire
                                    <div class="author-area">
                                        <a href="#" class="img">
                                            <img src="assets/images/testimonials/user.png" alt="testiminials">
                                        </a>
                                        <div class="info">
                                            <h6 class="name">Noemie</h6>
                                            <div class="stars-area">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/testimonials/02.png" alt="service">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style">
                                    <div class="quots">
                                        <img src="assets/images/testimonials/quotes.png" alt="testimonails">
                                    </div>
                                    <p class="disc">
                                        Médecin très agréable et très sympathique.
                                    </p>
                                    <div class="author-area">
                                        <a href="#" class="img">
                                            <img src="assets/images/testimonials/user.png" alt="testiminials">
                                        </a>
                                        <div class="info">
                                            <h6 class="name">Daoud </h6>
                                            <div class="stars-area">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/testimonials/02.png" alt="service">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div style="text-align: center; margin-top: 40px;">
                            <a id="btn-temoignages" href="https://www.doctena.lu/fr/specialite/ophtalmologue-medecin-ophtalmologue/dr-gerard-djoukwe-1811285/feedback" target="_blank">
                                Voir plus de témoignages
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimonials area end -->
</div>
<!-- service details area end -->

    <!-- service details area end -->


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