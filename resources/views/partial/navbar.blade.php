<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">MUTASI dan PROMOSI ASN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'MUTASI')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mutasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('index.mutasi')}}"><i class="bi bi-chat-square"></i> Syarat Mutasi</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
            @else
            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="bi bi-envelope"></i> Login Mutasi</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
            @endif
            @endauth
            @endif
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-phone"></i> Call Center</a></li>
          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'IDENTITAS')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Identitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('index.identitas') }}"><i class="bi bi-chat-square"></i> Syarat Pengurusan</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
            @else
            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="bi bi-envelope"></i> Login Identitas</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Daftar Akun</a></li>
            @endif
            @endauth
            @endif
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-phone"></i> Call Center</a></li>
          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{($title === 'KEPANGKATAN')? 'active' : ' '}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kepangkatan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('index.kepangkatan')}}"><i class="bi bi-chat-square"></i> Informasi Kepangkatan</a></li>
            @if (Route::has('login'))
            @auth
            <li><a class="dropdown-item" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
            @else
            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="bi bi-envelope"></i> Login Kepangkatan</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" hidden class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
            @endif
            @endauth
            @endif
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-phone"></i> Call Center</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari.." aria-label="Search" value="{{request('search')}}">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>