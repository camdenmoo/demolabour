<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Site for the Labour Party</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css?t='.time()) }}" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('images/labour-party-white.png')}}" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="https://donation.labour.org.uk/page/75697/donate/1" target="_blank">
                            <i class="fas fa-donate"></i> Donate
                        </a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="https://join.labour.org.uk/" target="_blank"><i class="fa-solid fa-users"></i> Join</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="https://labour.org.uk/volunteering/" target="_blank"><i class="fa-solid fa-handshake-angle"></i> Volunteer</a>
                    </li>
                </ul>

                <button class="btn btn-outline-light btn-sm ms-5 create-event">Create Event</button>
            </div>
        </div>
    </nav>

    <main>
        <div class="wrapper">
            @yield('content')
            <div class="push"></div>
        </div>
    </main>


    <footer class="mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/">
                        <img class="footer-logo" src="{{asset('images/labour-party-white.png')}}" />
                    </a>
                    <p><small>Copyright &copy; 2022 Labour | All rights reserved.<br>105 Victoria Street, London SW1E 6QT</small></p>
                </div>
                <div class="col-6">
                    <small>
                        <ul>
                            <li>
                                <a class="footer-link" href="https://join.labour.org.uk/" target="_blank">
                                    Join
                                </a>
                            </li>
                            <li>
                                <a class="footer-link" href="https://donation.labour.org.uk/page/75697/donate/1" target="_blank">
                                    Donate
                                </a>
                            </li>
                            <li>
                                <a class="footer-link" href="https://labour.org.uk/volunteering/" target="_blank">
                                    Volunteer
                                </a>
                            </li>
                            <li>
                                <a class="footer-link" href="https://labour.org.uk/cookie-policy/Privacy" target="_blank">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>