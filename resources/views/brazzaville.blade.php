@extends('layouts.app')

@section('title', 'Bienvenue sur notre site')


@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Brazzaville</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#">Internationale</a></li>
                    <li class="current">Brazzaville</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section class="container">
        <h1>Brazzaville</h1>
        <p>

        </p>
    </section>

@endsection
