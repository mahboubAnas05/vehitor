@extends('layouts.main')

@section('content')
    <h2 class="text-center">
        Ajouter Une Nouvelle Véhicule
    </h2>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="my-3 card p-3 bg-light shadow">
                    <form action="" method="post">
                        @csrf
                        @include('formCar')
                        <div class="text-center mt-3">
                            <input type="submit" value="inserer" class="btn btn-primary w-100">
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


@endsection
