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
    </head>
    <body>
        <!-- Hero Area -->
        <div class="hero_area">
            <!-- Header Section -->
            <header class="header_section bg-light shadow">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <span>Petra Cantare</span>
                        </a>

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left-aligned navigation links -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                                </li>
                            </ul>

                            <!-- Right-aligned buttons -->
                            <div class="d-flex">
                                <a class="btn btn-outline-primary me-2" href="{{ url('/login') }}">Login</a>
                                <a class="btn btn-primary" href="{{ url('/signup') }}">Signup</a>
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
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qQ1TO8zozPpOYhQOBszxZZ7iU+F6dOtwGp5qGhgm6sao1l5LVJv30oTHPuTxhDhI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
