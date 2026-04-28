@extends('layouts.main')

@section('content')

    <div class="d-flex justify-content-center my-5">
        <div class="bg-white p-5">
            <h2 class="text-center">
                S'inscrire Comme Agence
            </h2>
            <form action="" method="post">
                
                @csrf
                <div class="pt-3">
                    <label for="">Nom</label>
                    <input type="text" name="name" id="" class="form-control">    
                </div>

                <div class="pt-3">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control">    
                </div>
        
                <div class="pt-3">
                    <label for="">Mot De Passe</label>
                    <input type="password" name="password" id="" class="form-control">    
                </div>

                <div class="pt-3">
                    <label for="">confirmer le Mot De Passe</label>
                    <input type="password" name="password_confirmation" id="" class="form-control">    
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                    <br>
                    <a href="{{route('loginAgence')}}">dèja un compte ?</a>
                </div>

            </form>
        </div>
        <div class="d-md-flex d-none justify-centent-center align-items-center bg-primary p-5">
            <center>
                <img src="images/vehitor_logo.png" style="width: 100px; border-radius: 50%" class="mx-5 moveImg" alt="">
                <div class="w-50 p-1 bg-dark mt-4 grounShadow" style="border-radius: 50%;"></div>
            </center>
        </div>
    </div>
    
@endsection