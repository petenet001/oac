<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ARCHITECTURE DESIGN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('oac_custom_assets/css/main.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('oac_custom_assets/css/noscript.css') }}" />
    </noscript>
    <style>
        .news-ticker {
          overflow: hidden;
          white-space: nowrap;
          box-sizing: border-box;
          padding: 10px;
        }

        .news-items {
          display: inline-block;
          white-space: nowrap;
          animation: scroll-left 40s linear infinite;
        }

        .news-items a {
          display: inline-block;
          margin-right: 50px; /* Espace entre les éléments */
          color: #ffffff;
          text-decoration: none;
        }

        @keyframes scroll-left {
          from {
            transform: translateX(100%);
          }
          to {
            transform: translateX(-100%);
          }
        }
      </style>
</head>

<body class="is-preload">
    <div id="wrapper">
        <div id="bg"></div>
        <div id="overlay"></div>
        <div id="main">
            <!-- Header -->
            <header id="header">

                <ul>
                    <li>
                        <img src="{{ asset('oac_custom_assets/ICONES/armoirie1.png') }}" class="img-fluid" />
                    </li>
                    <li>
                        <h1>ORDRE DES ARCHITECTES DU CONGO</h1>
                    </li>
                    <li>
                        <img src="{{ asset('oac_custom_assets/ICONES/cg.png') }}" class="img-fluid" />
                    </li>
                </ul>
                <div class="spacer">
                    <div class="container">
                        <div class="news-ticker">
                            <div class="news-items">
                              <a href="#" class="nav-link">Ordre des architectes du Congo : Antoine Béli Bokolojoué se fixe de nouveaux défis.</a>
                              <a href="#" class="nav-link">Ordre des architectes du Congo : Antoine Béli Bokolojoué se fixe de nouveaux défis.</a>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="container" style="">
                    <div class="row">
                        <div class="col-md-4 align-content-end">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="/accueil" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/acceuil.png') }}"
                                                class="nav-icons" /></span>Accueil
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/infos-departement/pointe-noire" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/infos.png') }}"
                                                class="nav-icons" /></span>Infos des Départements
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="https://www.uia-architectes.org/fr/" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/international.png') }}"
                                                class="nav-icons" /></span>International
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/cotisation.png') }}"
                                                class="nav-icons" /></span>Cotisations
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('oac_custom_assets/logo2.svg') }}" class="img-fluid"
                                style="min-width:200px;heigt:auto" alt="">
                        </div>
                        <div class="col-md-4 align-content-start">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/inscription.png') }}"
                                                class="nav-icons" /></span>Inscriptions
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/formation.png') }}"
                                                class="nav-icons" /></span>Formations
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/tableau" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/Tableau.png') }}"
                                                class="nav-icons" /></span>Tableau
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/textes" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/textes.png') }}"
                                                class="nav-icons" /></span>Textes
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <ul class="nav flex-column align-content-center">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">
                                        <span><img src="{{ asset('oac_custom_assets/ICONES/projet.png') }}"
                                                class="nav-icons" /></span>Projets des Confrères
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </header>

            <!-- Footer -->
            <footer id="footer">
                <span class="copyright">&copy; E-consulting</span>
            </footer>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.body.classList.remove("is-preload");
        };
        window.ontouchmove = function() {
            return false;
        };
        window.onorientationchange = function() {
            document.body.scrollTop = 0;
        };
    </script>
</body>

</html>
