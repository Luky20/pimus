<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    <link href="{{ url('/assets/images/web/IconPIMUS.ico') }}" rel="shorcut icon">
    <!-- Bootstrap -->
    <!-- Bootstrap core CSS -->
    <link href="{{ url('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/star.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    @yield('style')
    <style type="text/css">
        .logo-hover {
            transition: transform 0.3s ease;
        }

        .logo-hover:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo/Konfigurasi Logo PIMUS.png') }}" alt="Logo Ubaya"
                    style="height: 65px; width: 280px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon" style=""></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Route::currentRouteName() != "verification.notice")
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/registration') }}">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/submission') }}">Submission</a>
                    </li>

                    <li class="nav-item nav-center dropdown">
                        <!-- <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Exhibition</a>

                        <div class="dropdown-menu nav-center" aria-labelledby="navbarDropdownMenuLink" id="dropdown">
                            {{-- <a class="dropdown-item" href="{{ route('exhibition',4) }}">KTI</a> --}}
                            <a class="dropdown-item" href="{{ route('exhibition',6) }}">Poster</a>
                            {{-- <a class="dropdown-item" href="{{ route('exhibition',7) }}">Video Digital Pendidikan</a> --}}
                        </div>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Exhibition
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            {{-- <li><a class="dropdown-item" href="{{ route('exhibition',4) }}">KTI</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('exhibition',6) }}">Poster</a></li>
                            {{-- <li><a class="dropdown-item" href="{{ route('exhibition',7) }}">Video Digital Pendidikan</a></li> --}}
                        </ul> -->
                    </li>
                    </li>
                    @endif
                    @guest
                    <li class="nav-item nav-center">
                        <a class="nav-link btnLogin" href="{{ url('/login') }}">Login</a>
                    </li>
                    @else
                    @if ((Auth::user()->divisi == 'Admin' || Auth::user()->divisi == 'Sekre' || Auth::user()->divisi ==
                    'Acara' || Auth::user()->divisi == 'Panitia') && Route::currentRouteName() != "verification.notice")
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ route('admin.index') }}">Admin Page</a>
                    </li>
                    @endif

                    <li class="nav-item nav-center">
                        <a class="nav-link btnLogin" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- ***** Header Area End ***** -->
    <div class="galaxy">
        <div class="stars1"></div>
        <div class="stars2"></div>
        <div class="stars3"></div>
        @yield('content')
    </div>
    <footer>
        <br>
        <div class="container">
            <div class="row">
            <div class="container text-center my-5 col-lg-12 wow fadeIn sponsor-con" data-wow-duration="1s" data-wow-delay="0.25s">
                <h2 style="color: white; text-align: center; margin-bottom: 40px; margin-bottom:60px;">Sponsored By :</h2>

                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center align-items-center" style="height: 150px;">
                        <img src="{{ url('assets/images/logo/sponsor/tanrise-logo.png') }}" class="img-fluid logo-hover" alt="Tanrise logo" style="background: white; border-radius: 50%; padding: 0px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); object-fit: contain; width: 70%;">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center align-items-center" style="height: 150px;">
                        <img src="{{ url('assets/images/logo/sponsor/spikoe-logo.png') }}" class="img-fluid logo-hover" alt="Spikoe logo" style="background: black; border-radius: 50%; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); object-fit: contain; width: 90%;">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center align-items-center" style="height: 155px;">
                        <img src="{{ url('assets/images/logo/sponsor/bantex-logo.jpeg') }}" class="img-fluid logo-hover" alt="bantex logo" style="background: black; border-radius: 45%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); object-fit: contain; width: 85%; margin: 10px;">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center" style="height: 150px;">
                        <img src="{{ url('assets/images/logo/sponsor/sprent-logo.jpg') }}" class="img-fluid logo-hover" alt="sprent logo" style="background: black; border-radius: 50%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); object-fit: contain; width: 70%;">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center align-items-center" style="height: 150px;">
                        <img src="{{ url('assets/images/logo/sponsor/TehGelas-logo.jpeg') }}" class="img-fluid logo-hover" alt="Teh Gelas logo" style="background: black; border-radius: 50%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); object-fit: contain; width: 70%;">
                    </div>
                </div>
            </div>

                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p style="color: #fdfdfd">© Copyright 2024 SI PIMUS XIV Committee.</p>

                    <!-- <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ url('assets/js/animation.js') }}"></script>
    <script src="{{ url('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ url('assets/js/templatemo-custom.js') }}"></script>
    <script type="text/javascript" src=" {{ url('assets/js/vanilla-tilt.min.js') }}"></script>

    @yield('script')
</body>

</html>
