    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <a class="navbar-brand" href="/">STMI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/mhs">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mtk">Matakuliah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Dosen</a>
            </li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Transaksi
                </a>
                <div class="dropdown-menu">
                @if (Auth::user()->role == 'Staf')
                    <a class="dropdown-item" href="#">Input KRS</a>
                @endif
                @if (Auth::user()->role == 'Staf' || Auth::user()->role == 'Manajer')
                <a class="dropdown-item" href="#">Cek Transkip Nilai</a>
                @endif
                @if (Auth::user()->role == 'Manajer')
                    <a class="dropdown-item" href="#">Biodata Mahasiswa</a>
                @endif
                </div>
            </li>    
            @endauth            
            </ul>
@guest
    <!-- Belum login -->
    <a href="{{ route('login') }}" 
        class="btn btn-success">Login</a>
    <a href="{{ route('register') }}" 
        class="btn btn-warning">Register</a>
@else
    <!-- Sudah login -->
    <span class="text text-white">Welcome {{ Auth::user()->name }} ({{ Auth::user()->role }})</span> 
    <form method="post" action="{{ route('logout') }}"
        class="form-inline my-2 my-lg-0">
        @csrf
        <button type="submit" class="btn btn-danger my-2 my-sm-0">
            logout</button>
    </form>
@endguest
        </div>  
    </nav>
