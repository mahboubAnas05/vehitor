<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

        .cardCars>article{
            display: grid; 
            grid-template-columns: 1fr 1fr 1fr;
            gap: 7px
        }

        @media screen and (max-width: 768px){
            .margTopContent{
                padding-top: 20%;
            }
        }
        @media screen and (max-width: 768px){
            .cardCars{
                display: block; 
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
    <header class="bg-white">
        @include('navbar')
    </header>

    <main class="container-fluid margTopContent bg-light">
        @yield('content')
    </main>

    <footer class="bg-dark text-light w-100">
        @include('footer')
    </footer>
</body>
</html>