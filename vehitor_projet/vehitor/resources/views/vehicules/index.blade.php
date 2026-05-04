@extends('layouts.main')

@section('content')
    <div>
       <h1 class="text-center">
            Les Véhicules
        </h1>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <form action="" method="GET" class="input-group">
                    <input type="text" name="categorie" id="" class="form-control"  placeholder="filter par catégorie">
                    <button class="btn btn-primary">
                        Filtrer
                    </button>
                </form>
            </div>
            {{--seulement pour l'agence--}}

            <div>
                <a href="{{route('vehicules.create')}}" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" id='hoverIcon' viewBox="0 -960 960 960" width="24" fill="#eee"><path d="M240-200v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l84-240q6-18 21.5-29t34.5-11h440q19 0 34.5 11t21.5 29l84 240v320q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240Zm-8-360h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm-460 40h560v-200H200v200Z"/></svg>
                    gérer la flotte
                </a>
            </div>
        </div>

        <div class="my-5 cardCars">

            @forelse ($vehicules as $vehicule)
                <article class="card p-3 rounded">
                    @if ($vehicule->photo)
                        <img src="{{asset('/storage'.$vehicule->photo)}}" alt="" class="card-img-top">
                    @endif
                    <div>
                        <h3>            
                            {{$vehicule->modele}}
                        </h3>
                        <h5 class="text-muted">
                            {{$vehicule->marque}}
                        </h5>
                        <h3 class="text-primary">
                            {{$vehicule->prix_par_jour}} DHS/jour
                        </h3>
                        <a href="#" class="btn btn-primary">Voir</a>
                        {{--seulement pour le client--}}
                        <a href="#" class="btn btn-outline-dark">Louer</a>
                    </div>
                </article>
            @empty
                <h3 class="d-flex justify-content-center align-items-center" style="margin: 12.5% 0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50" fill="#212529"><path d="M160-240v-200 200ZM80-440l84-240q6-18 21.5-29t34.5-11h183q-3 20-3 40t3 40H234l-42 120h259q17 24 38 44.5t47 35.5H160v200h560v-163q21-3 41-9t39-15v307q0 17-11.5 28.5T760-80h-40q-17 0-28.5-11.5T680-120v-40H200v40q0 17-11.5 28.5T160-80h-40q-17 0-28.5-11.5T80-120v-320Zm540 160q25 0 42.5-17.5T680-340q0-25-17.5-42.5T620-400q-25 0-42.5 17.5T560-340q0 25 17.5 42.5T620-280Zm-360 0q25 0 42.5-17.5T320-340q0-25-17.5-42.5T260-400q-25 0-42.5 17.5T200-340q0 25 17.5 42.5T260-280Zm420-200q-83 0-141.5-58.5T480-680q0-82 58-141t142-59q83 0 141.5 58.5T880-680q0 83-58.5 141.5T680-480Zm-20-160h40v-160h-40v160Zm20 80q8 0 14-6t6-14q0-8-6-14t-14-6q-8 0-14 6t-6 14q0 8 6 14t14 6Z"/></svg>
                    Aucune Véhicule...
                </h3>
            @endforelse

        </div>

    </div>
@endsection