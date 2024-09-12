<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('oac_custom_assets/logo2.svg') }}" class="img-responsive" style="width:60px;heigt:auto"  alt="">
            {{-- <h1 class="sitename">AOC</h1>  --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#">BARRE D'INFOS</a></li>
                <li><a href="#">HISTORIQUE</a></li>
                <li><a href="#">INSCRIPTIONS</a></li>
                <li><a href="#">COTISATIONS</a></li>
                <li class="dropdown">
                    <a href="#"><span>FORMATIONS</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Base de données</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>INFOS DES DEPARTEMENTS</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Brazzaville et zone nord</a></li>
                        <li><a href="#">Pointe Noire et zone sud</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>INTERNATIONAL</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">UIA</a></li>
                        <li><a href="#">AUA</a></li>
                        <li><a href="#">FAFA</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>TABLEAU</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Sous partie 1</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>TEXTES</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Sous partie 1</a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>