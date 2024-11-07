@extends('layouts.app')

@section('title', 'Bienvenue sur notre site')

@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Tableau de l'ordre</h1>
            {{-- <p>Consultez toutes les lois votées à l'Assemblée nationale<br>REPUBLIQUE DU CONGO</p> --}}
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li class="current">Tableau</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section class="lois-votees">
        <div class="container table-container">
            <div class="row mb-3">
                <div class="col-md-9">
                    {{-- <label for="afficher">Afficher</label>
                    <select id="afficher" class="form-select">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>Tout</option>
                    </select> --}}
                </div>
                <div class="col-md-3 text-end">
                    <a href="/assets/img/tableau/10e Tableau OAC A3 Recto Verso Def (27 03 2024) - BAT.pdf" target="_blank" class="btn btn-primary">Télécharger le tableau</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <img src="/assets/img/tableau/10e Tableau OAC A1 Def - BAT - (27 03 2024).png" class="img-fluid" alt="Tableau de l'ordre">
                </div>
            </div>
        </div>
    </section>

@endsection
