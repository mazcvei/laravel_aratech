<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registro</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">Mi perfil</a>
                </li>

                <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="{{route('logout')}}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        Cerrar sesión
                    </a>
                </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

