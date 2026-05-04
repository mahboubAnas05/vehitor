<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
    <style>
        html, body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        width: 100%;
        }

        .margTopContent{
            padding-top: 9%;
        }

        .moveImg{
           animation: logoMoving 2000ms ease infinite;
        }

        .grounShadow{
            animation: groun 2000ms ease infinite;
        }

        .hoverCard{
            background-color: white
        }

        .hoverCard:hover{
            scale: 1.06;
            transition: 700ms;
            color: white;
            background-color: #0d6efd
        }

        #hoverIcon{
            color: white
        }

        @media screen and (max-width: 768px){
            .margTopContent{
                padding-top: 20%;
            }
        }
        @keyframes logoMoving{
            0%{
                transform: translateY(0px)
            }
            50%{
                transform: translateY(20px);
            }
            100%{
                transform: translateY(0px)            
            }
        }
        @keyframes groun{
            0%{
                scale: 0.5;
            }
            50%{
                scale: 1
            }
            100%{
                scale: 0.5;
            }
        }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center my-5">
        <div class="bg-white p-5">
            <h2 class="text-center">
                S'inscrire Comme Client
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
                    <label for="">Confirmer le Mot De Passe</label>
                    <input type="password" name="password_confirmation" id="" class="form-control">    
                </div>
                <div class="pt-3">
                    <label for="">Vous Êtes :</label>
                    <input type="radio" name="type" value="particulier" id="" class="form-check-input ms-3">    
                    <label for="">particulier</label>
                    <input type="radio" name="type" value="entreprise" id="" class="form-check-input ms-3">    
                    <label for="">entreprise</label>
                </div>

                <input type="hidden" name="role" value="client">

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                    <br>
                    <a href="{{route('loginClient')}}">dèja un compte ?</a>
                </div>

            </form>
        </div>
        <div class="d-md-flex mx-2 justify-centent-center align-items-center bg-primary p-5">
            <center>
                <a href="{{route('home')}}">
                    <img src="images/vehitor_logo.png" style="width: 100px; border-radius: 50%" class="mx-5 moveImg" alt="">
                </a>
                <div class="w-50 p-1 bg-dark mt-4 grounShadow" style="border-radius: 50%;"></div>
            </center>
        </div>
    </div>
    
</body>
</html>