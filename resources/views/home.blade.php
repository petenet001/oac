@extends('layouts.app')

@section('title', 'Bienvenue sur notre site')


@section('content')



    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <h2>Bienvenue à l'Ordre des Architectes du Congo</h2>
                        <p>Depuis 1992, nous œuvrons pour l'excellence architecturale et le développement urbain durable au
                            Congo.</p>
                        <a href="#about" class="btn-get-started">Découvrir l'OAC</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item">
                <img src="assets/img/hero-carousel/carousel-1.JPG" alt="">
            </div>

            <div class="carousel-item active">
                <img src="assets/img/hero-carousel/carousel-2.JPG" alt="">
            </div>
            <!-- Add more carousel items as needed -->
        </div>
    </section><!-- End Hero Section -->


    <!-- Get Started Section -->
    <section id="get-started" class="get-started section py-5">
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <div class="content">
                        <h3>Historique de l'Ordre des Architectes du Congo</h3>
                        <p>L'Ordre des Architectes du Congo (OAC) a été officiellement créé par la loi 013-92 du 29 avril
                            1992,
                            dans le but de structurer et de réguler la profession architecturale à travers le pays. Depuis
                            ses débuts,
                            l'OAC s'est affirmé comme un acteur majeur dans le développement de l'architecture et de
                            l'urbanisme au Congo.</p>

                        <p>En 32 ans d’existence, l’OAC a accompagné d’importants projets d’infrastructures publiques et
                            privées, tout en veillant
                            à ce que les standards architecturaux soient respectés. L'Ordre a également œuvré pour
                            l'adoption de nouvelles pratiques,
                            telles que l'intégration des technologies modernes dans le processus de conception et de
                            construction.</p>

                        <p>Aujourd'hui, l'OAC s'efforce de renforcer le cadre réglementaire des appels d'offres, de
                            promouvoir la reconnaissance
                            des architectes au sein de la fonction publique, et d'améliorer les formations pour les jeunes
                            générations de professionnels.
                            L’avenir de l'architecture au Congo repose sur la capacité à s’adapter aux défis contemporains,
                            notamment à travers des diagnostics
                            architecturaux plus rigoureux et une plus grande collaboration avec les autorités locales pour
                            des projets d’urbanisme durables.</p>
                        <p>
                            Notre mission est de :

                            Garantir la qualité et l'éthique dans la pratique de l'architecture
                            Promouvoir une architecture durable et adaptée au contexte congolais
                            Représenter les intérêts des architectes auprès des autorités
                            Favoriser la formation continue et l'innovation dans le domaine
                            Avec plus de 500 membres actifs, l'OAC joue un rôle crucial dans le développement urbain et
                            architectural du Congo.
                        </p>
                        <a href="#historique-complet" class="btn btn-primary mt-3">En savoir plus</a>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/img/hiostory.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section><!-- /Get Started Section -->


    <!-- Members Section -->
    <section id="members" class="members section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Nos Membres Éminents</h2>
            <p>Découvrez quelques-uns de nos architectes distingués qui contribuent à façonner le paysage congolais</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-item">
                        <img src="{{ asset('assets/img/hiostory.jpg') }}"
                            alt="Nom du Membre" class="img-fluid">
                        <h4>Jean Mukoko</h4>
                        <p>Président de l'OAC</p>
                        <p>Architecte renommé avec 30 ans d'expérience dans les projets d'urbanisme durable.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-item">
                        <img src="{{ asset('assets/img/hiostory.jpg') }}"
                            alt="Nom du Membre" class="img-fluid">
                        <h4>Marie Yango</h4>
                        <p>Vice-Présidente de l'OAC</p>
                        <p>Spécialiste en architecture écologique et lauréate du prix national d'architecture 2020.</p>
                    </div>
                </div>
                <!-- Add more member items as needed -->
            </div>
        </div>
    </section><!-- End Members Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Nos Services</h2>
            <p>L'OAC offre une gamme de services pour soutenir ses membres et promouvoir l'excellence architecturale</p>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa-solid fa-users"></i></div>
                        <h3>Inscription au Tableau de l'Ordre</h3>
                        <p>Processus d'inscription et de renouvellement pour les architectes qualifiés.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa-solid fa-book"></i></div>
                        <h3>Formation Continue</h3>
                        <p>Programmes de formation pour maintenir et améliorer les compétences professionnelles.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <h3>Conseil Juridique</h3>
                        <p>Assistance juridique sur les questions liées à la pratique architecturale.</p>
                    </div>
                </div>
                <!-- Add more service items as needed -->
            </div>
        </div>
    </section><!-- /Services Section -->

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">

        <div class="container">

            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                        src="assets/img/alt-services.jpg" alt=""></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                    <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                        temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                cupiditate non provident</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt
                                minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tride clov</a></h4>
                            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur
                                odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>

    </section><!-- /Alt Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <ul class="nav nav-tabs row g-2 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"
                role="tablist">

                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="false"
                        role="tab" tabindex="-1">
                        <h4>Formation</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false"
                        role="tab" tabindex="-1">
                        <h4>Réglementation</h4>
                    </a><!-- End tab nav item -->

                </li>
                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-tab-3"
                        aria-selected="true" role="tab">
                        <h4>Éthique</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false"
                        tabindex="-1" role="tab">
                        <h4>Innovation</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade" id="features-tab-1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Formation continue des architectes</h3>
                            <p class="fst-italic">
                                L'Ordre des Architectes du Congo s'engage à promouvoir l'excellence professionnelle à
                                travers des programmes de formation continue.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Ateliers et séminaires sur les dernières
                                        innovations en architecture.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Programmes de mentorat pour les jeunes
                                        architectes.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Conférences internationales pour favoriser
                                        l'échange d'idées et de pratiques.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Réglementation et normes professionnelles</h3>
                            <p class="fst-italic">
                                Nous veillons au respect des normes et réglementations en vigueur pour garantir la qualité
                                et la sécurité des constructions au Congo.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Élaboration et mise à jour des codes de
                                        construction.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Supervision des pratiques
                                        professionnelles.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Collaboration avec les autorités pour
                                        l'amélioration des normes.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Conseil et assistance aux architectes sur les
                                        questions réglementaires.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade active show" id="features-tab-3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Éthique et déontologie</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Promotion d'une pratique éthique de
                                        l'architecture.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Gestion des conflits d'intérêts et médiation
                                        professionnelle.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Sensibilisation à la responsabilité sociale et
                                        environnementale.</span></li>
                            </ul>
                            <p class="fst-italic">
                                L'Ordre des Architectes du Congo s'engage à maintenir les plus hauts standards éthiques dans
                                la profession, assurant ainsi la confiance du public et l'intégrité de notre communauté.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Innovation et développement durable</h3>
                            <p class="fst-italic">
                                Nous encourageons l'innovation et l'adoption de pratiques durables dans l'architecture
                                congolaise pour répondre aux défis du 21e siècle.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Promotion de l'architecture verte et des
                                        technologies éco-responsables.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Soutien à la recherche en architecture tropicale
                                        et climatique.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Organisation de concours d'innovation pour
                                        stimuler la créativité et l'adaptation aux besoins locaux.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Projects Section -->

    <!-- Section Projets -->
    <section id="projects" class="projects section">

        <!-- Titre de la Section -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Nos Réalisations</h2>
            <p>Découvrez les projets remarquables de nos architectes membres à travers le Congo</p>
        </div><!-- Fin du Titre de la Section -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Tous</li>
                    <li data-filter=".filter-remodeling">Résidentiel</li>
                    <li data-filter=".filter-construction">Commercial</li>
                    <li data-filter=".filter-repairs">Public</li>
                    <li data-filter=".filter-design">Culturel</li>
                </ul><!-- Fin des Filtres du Portfolio -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Villa Moderne à Brazzaville</h4>
                                <p>Conception d'une résidence contemporaine adaptée au climat tropical</p>
                                <a href="assets/img/projects/remodeling-1.jpg" title="Villa Moderne à Brazzaville"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Centre Commercial à Pointe-Noire</h4>
                                <p>Conception d'un espace commercial moderne intégrant des éléments traditionnels congolais
                                </p>
                                <a href="assets/img/projects/construction-1.jpg" title="Centre Commercial à Pointe-Noire"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Rénovation de l'Hôpital Général de Dolisie</h4>
                                <p>Modernisation et extension des installations médicales existantes</p>
                                <a href="assets/img/projects/repairs-1.jpg"
                                    title="Rénovation de l'Hôpital Général de Dolisie"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Musée National du Congo à Brazzaville</h4>
                                <p>Conception d'un espace culturel mettant en valeur l'histoire et l'art congolais</p>
                                <a href="assets/img/projects/design-1.jpg" title="Musée National du Congo à Brazzaville"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Éco-lodge dans la Réserve de Léfini</h4>
                                <p>Conception d'hébergements touristiques écologiques en harmonie avec la nature</p>
                                <a href="assets/img/projects/remodeling-2.jpg" title="Éco-lodge dans la Réserve de Léfini"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Tour de Bureaux à Brazzaville</h4>
                                <p>Conception d'un gratte-ciel moderne intégrant des technologies vertes</p>
                                <a href="assets/img/projects/construction-2.jpg" title="Tour de Bureaux à Brazzaville"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Réhabilitation du Marché Total de Bacongo</h4>
                                <p>Modernisation des infrastructures tout en préservant l'atmosphère traditionnelle</p>
                                <a href="assets/img/projects/repairs-2.jpg"
                                    title="Réhabilitation du Marché Total de Bacongo"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Théâtre National du Congo</h4>
                                <p>Conception d'un espace culturel polyvalent célébrant les arts du spectacle congolais</p>
                                <a href="assets/img/projects/design-2.jpg" title="Théâtre National du Congo"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Complexe Résidentiel à Oyo</h4>
                                <p>Conception d'un ensemble d'habitations modernes adaptées au contexte local</p>
                                <a href="assets/img/projects/remodeling-3.jpg" title="Complexe Résidentiel à Oyo"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Nouveau Terminal de l'Aéroport de Pointe-Noire</h4>
                                <p>Conception d'un terminal aéroportuaire moderne reflétant l'identité congolaise</p>
                                <a href="assets/img/projects/construction-3.jpg"
                                    title="Nouveau Terminal de l'Aéroport de Pointe-Noire"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Restauration du Palais du Peuple</h4>
                                <p>Rénovation et modernisation d'un bâtiment historique emblématique</p>
                                <a href="assets/img/projects/repairs-3.jpg" title="Restauration du Palais du Peuple"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Bibliothèque Nationale du Congo</h4>
                                <p>Conception d'un espace moderne dédié à la préservation et à la diffusion du savoir</p>
                                <a href="assets/img/projects/design-3.jpg" title="Bibliothèque Nationale du Congo"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="project-details.html" title="Plus de Détails" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- Fin de l'Élément du Portfolio -->

                </div><!-- Fin du Conteneur du Portfolio -->

            </div>

        </div>

    </section><!-- /Section Projets --><!-- /Projects Section -->



    <!-- Recent Blog Posts Section -->
    <section id="recent-blog-posts" class="recent-blog-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Actualités de l'OAC</h2>
            <p>Restez informé des dernières nouvelles et événements de l'Ordre des Architectes du Congo</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                            <span class="post-date">December 12</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                            <span class="post-date">July 17</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                            <span class="post-date">September 05</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

            </div>

        </div>

    </section><!-- /Recent Blog Posts Section -->

@endsection
