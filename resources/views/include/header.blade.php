
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AllSchool</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 <!-- Favicons -->
 <link href="{{asset('assets/img/logo.png')}}" rel="icon">
 <link href="{{asset('assets/img/logo.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/') }}">All</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ url('/') }}">Accueil</a></li>
          <li><a class="" href="{{ url('/about') }}">About</a></li>
          <li><a class="" href="{{ url('/faq') }}">FAQ</a></li>

          <li class="dropdown"><a href="{{ url('/') }}"><span>Ecoles</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/') }}">Primaire</a></li>
              
              <li><a href="{{ url('/') }}">Secondaire</a></li>
              <li><a href="{{ url('/') }}">Universitaire</a></li>
              </ul>
          </li>
          <li><a class="" href="{{ url('organisation') }}">Organisation</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      {{-- <a href="{{ url('pages_login') }}" class="get-started-btn">Connexion</a>
      <a href="{{ url('pages_register') }}" class="get-started-btn">Inscription</a> --}}
      @guest
      @if (Route::has('login'))

              <a class="get-started-btn" href="{{ route('login') }}">{{ __('Connexion') }}</a>
         
      @endif

      @if (Route::has('register'))
         
              <a class="get-started-btn" href="{{ route('register') }}">{{ __('Inscription') }}</a>
          
      @endif
      @else
      <i class="nav-item dropdown">
        <a href="{{ url('/dashboad') }}" class="get-started-btn"> Dashboard</a>
          <a id="navbarDropdown" class="nav-link dropdown-toggle get-started-btn" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          
          <div class="dropdown-menu dropown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item get-started-btn " href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Deconnecter')}}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
          </div>
      </li>
  @endguest

  {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
</div>
  </header>
