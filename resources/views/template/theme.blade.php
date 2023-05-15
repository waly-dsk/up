<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    <title>UP | @yield('title')</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('images/logo_université_de_parakou.jpg') }}" class="rounded img-fluid bg-dark"
                        alt="logo">
                    <span class="navbar-brand-text">
                        UNIVERSITE
                        <small class="offset-1" style="font-size: large;">de Parakou</small>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                L'Université
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Actualités</a></li>
                                <li><a class="dropdown-item" href="#">Vision et Mission</a></li>
                                <li><a class="dropdown-item" href="#">Equipe rectorale</a></li>
                                <li><a class="dropdown-item" href="#">Services du Rectorat</a></li>
                                <li><a class="dropdown-item" href="#">Contact</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Formation
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Offres de formation</a></li>

                                <li><a class="dropdown-item" href="#">Nos Entités</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Recherhce
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Laboratoire</a></li>
                                <li><a class="dropdown-item" href="#">Colloque</a></li>
                                <li><a class="dropdown-item" href="#">Anales de l'UP</a></li>
                                <li><a class="dropdown-item" href="#">Fonds compétitifs</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Coopération
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Coopération Nationale</a></li>
                                <li><a class="dropdown-item" href="#">Coopération Internationale</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vie de campus
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Bibliothèque</a></li>
                                <li><a class="dropdown-item" href="#">Service numérique</a></li>
                                <li><a class="dropdown-item" href="#">Alumni</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="{{ asset('images/logo_université_de_parakou.jpg') }}"
                                class="rounded-pill img-fluid" alt="logo">
                            <span class="navbar-brand-text">
                                UNIVERSITE
                                <small style="font-size:large" class="offset-1">DE PARAKOU</small>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Join Us</h5>
                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Mon-Fri</span>
                            6:00 AM - 6:00 PM
                        </p>

                        <p class="d-flex me-lg-3">
                            <span>Sat-Sun</span>
                            6:30 AM - 8:30 PM
                        </p>
                        <br>
                        <p class="copyright-text">Copyright © 2048 Tiya Golf Club</p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#81B29A" fill-opacity="1"
                    d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
