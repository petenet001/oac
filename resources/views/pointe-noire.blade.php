@extends('layouts.app')

@section('title', 'Bienvenue sur notre site')


@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Pointe-Noire</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Internationale</a></li>
                    <li class="current">Pointe-Noire</li>
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
                        <th>Télécharger</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>COMPTE RENDU AG CD PN & ZONE SUD</td>
                        <td><a target="_blank"
                                href="{{ asset('assets/files/Conseil Departemental POINTE-NOIRE/COMPTE RENDU AG CD PN & ZONE SUD.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf text-danger"></i></td>
                        <td>COMPTE RENDU REUNION CD PN & ZONE SUD</td>
                        <td><a target="_blank" href="{{ asset('assets/files/Conseil Departemental POINTE-NOIRE/COMPTE RENDU REUNION CD PN & ZONE SUD.pdf') }}"
                                class="btn btn-primary btn-sm">Télécharger</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection
