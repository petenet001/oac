@extends('layouts.app')

@section('title', 'Bienvenue sur notre site')


@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Lois et décrets</h1>
            <p>Consultez toutes les lois votées à l'Assemblée nationale<br>REPUBLIQUE DU CONGO</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Accueil</a></li>
                    <li class="current">Textes</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->


    <section class="lois-votees">
        <div class="container table-container">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="afficher">Afficher</label>
                    <select id="afficher" class="form-select">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>Tout</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="rechercher">Rechercher:</label>
                    <input type="search" id="rechercher" class="form-control">
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Lois votées</th>
                        <th>Taille</th>
                        <th>Télécharger</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>Decret 2014 - 246 Permis de Construire</td>
                        <td>1412 Ko</td>
                        <td><a target="_blank"
                                href="{{ asset('assets/files/TEXTES/Decret 2014 - 246 Permis de Construire.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>Loi n°6-2019 du 05 Mars2019 Code Urbanisme & Construction</td>
                        <td>643 Ko</td>
                        <td><a target="_blank"
                                href="{{ asset('assets/files/TEXTES/Loi n°6-2019 du 05Mars2019 Code Urbanisme & Construction.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>OAC LOI N°013-92</td>
                        <td>859 Ko</td>
                        <td><a target="_blank" href="{{ asset('assets/files/TEXTES/OAC LOI N°013-92.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>OAC_BAREME</td>
                        <td>379 Ko</td>
                        <td><a target="_blank" href="{{ asset('assets/files/TEXTES/OAC_BAREME.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>



@endsection
