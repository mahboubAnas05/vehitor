<nav class="fixed-top bg-white">
    <div class="d-flex justify-content-between align-items-center border-bottom">
        <div>
            <a href="{{route('home')}}">
                <img src="{{asset('images/vehitor_logo.png')}}" style="width: 100px" alt="">
            </a>
        </div>
        
        <div class="d-md-flex d-none align-items-center gap-3 me-1">
            <div><a href="{{route('home')}}" class="text-decoration-none text-dark">Acceuil</a></div>
            <div><a href="{{route('vehicules.index')}}" class="text-decoration-none text-dark">Véhicules</a></div>
            <div><a href="{{route('about')}}" class="text-decoration-none text-dark">A propos</a></div>
            <div><a href="{{route('loginClient')}}" class="btn btn-primary">Entrer Comme Client</a></div>
            <div><a href="{{route('loginAgence')}}" class="btn btn-secondary">Entrer Comme Agence</a></div>
            <div><a href="{{route('loginAdmin')}}" class="btn btn-dark">Entrer Comme Admin</a></div>
            <div class="p-3"><a href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32" fill="#dc3545"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg></a></div>
        </div>

        <div class="d-md-none">
            <button class="btn btnBurger">
                <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960" width="35" fill="#212529"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>               
            </button>
        </div>
    </div>
    
    <div class="d-md-none border-bottom menu">
        <center>
            <div class="p-3"><a href="{{route('home')}}" class="text-decoration-none text-dark">Acceuil</a></div>
            <div><a href="{{route('vehicules.index')}}" class="text-decoration-none text-dark">Véhicules</a></div>
            <div class="p-3"><a href="{{route('about')}}" class="text-decoration-none text-dark">A propos</a></div>
            <div class="p-3"><a href="{{route('loginClient')}}" class="btn w-100 btn-primary">Entrer Comme Client</a></div>
            <div class="p-3"><a href="{{route('loginAgence')}}" class="w-100 btn btn-secondary">Entrer Comme Agence</a></div>
            <div class="p-3"><a href="{{route('loginAdmin')}}" class="w-100 btn btn-dark">Entrer Comme Admin</a></div>
            <footer class="p-3"><a href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="32" fill="#dc3545"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg></a></footer>
        </center>
    </div>
    <script>
        function toggleMobileSidebar() {
            const sidebar = document.querySelector('.menu');
            
            if (sidebar) {
                if (sidebar.style.display === 'none' || !sidebar.style.display) {
                    sidebar.style.display = 'block';
                } else {
                    sidebar.style.display = 'none';
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('.btnBurger');
            
            if (menuButton) {
                menuButton.addEventListener('click', toggleMobileSidebar);
            }
            
            const sidebar = document.querySelector('.menu');
            if (sidebar) {
                sidebar.style.display = 'none';
            }
        });

    </script>
</nav>