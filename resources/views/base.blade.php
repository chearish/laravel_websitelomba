<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title', 'Petra Cantare')</title>

        <!-- Library CSS -->
        @yield('library-css')
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        @vite(['resources/css/style.css', 'resources/css/responsive.css', 'resources/css/bootstrap.css'])
        @stack('styles')
        <style>
            .hero_area {
                min-height: 100%;
                background-color: rgba(255, 245, 225, 0.9);
            }
            
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

        </style>
    </head>
    <body>
        <div class="hero_area">
        <header class="header_section bg-light shadow">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Petra Cantare" style="height: 60px; margin-right: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left-aligned navigation links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(auth()->check())
                        <!-- Admin Links -->
                        @if(auth()->user()->role->name === 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.registered') }}">Registered Teams</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                            </li>
                        @else
                            <!-- Regular User Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#eventsched">Event Schedule </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=#contactus>Contact Us</a>
                            </li>
                            
                        @endif
                    @else
                        <!-- Guest Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#eventsched">Event Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=#contactus>Contact Us</a>
                        </li>
                    @endif
                </ul>

                <!-- Right-aligned buttons -->
                <div class="d-flex align-items-center"> <!-- Use 'align-items-center' for vertical centering -->
                    @if(auth()->check())
                        <a href="{{ route('logout') }}" class="btn btn-danger mt-3"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <div class="d-flex gap-2 mt-2">
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>


            <!-- Main Content -->
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Library JS -->
        @yield('library-js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
