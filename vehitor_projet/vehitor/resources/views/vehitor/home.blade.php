@extends('layouts.main')

@section('content')
    <section class="container-fluid py-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="images/vehitor_car1.png" class="w-100 shadow rounded" alt="">
            </div>
            <div class="mt-3 col-md-6">
                <h1 class="text-center fw-bold text-primary">VEH<span class="text-dark">ITOR</span></h1>
                <p class="text-center">Programme incubateur pour agences de location de véhicules. 
                    <br> 
                    Vous rêvez de lancer votre propre agence de location de voitures?
                    <br>
                    Notre incubateur vous offre les clés pour réussir:
                    accompagnement personnalisé, accès à une flotte de véhicules, outils de gestion.
                    Transformez votre passion pour l'automobile en une entreprise rentable et durable.
                    Rejoignez notre incubateur et développez votre agence de location automobile.
                </p>
            </div>
        </div>
    </section>

    <div class="my-5">
        @include('vehitor.homeDashboard')
    </div>

    <div class="my-5">
        @include('vehitor.homeAventages')
    </div>
    
    <div class="shadow my-3 rounded bg-white d-flex justify-content-center align-items-center gap-3">
        <div>
            <img src="{{asset('images/vehitor_logo.png')}}" style="width: 100px; border-radius: 50%" alt="">
        </div>
        <div>
            <p>veuillez nous <a href="#">Rejoindre</a> et vous bénéficiez de notre service d'incubation</p>
        </div>
    </div>

@endsection