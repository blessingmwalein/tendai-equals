<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="all">
    @stack('styles')
    @stack('scripts')
    @livewireScripts
    @livewireStyles
</head>

<body>
    <div class="main-page-wrapper">
        <!-- ===================================================
    Loading Transition
   ==================================================== -->


        <header class="theme-main-menu sticky-menu theme-menu-four">
            <div class="inner-content">
                <div class="d-flex align-items-center">
                    <div class="logo order-lg-0">
                        <h2>  Logo Sample </h2>
                    </div>

                    <!-- /.right-widget -->
                    <div class="right-widget d-flex align-items-center ms-auto order-lg-3">
                        <nav class="navbar navbar-expand-lg order-lg-2 ">
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ">
                                    <li class="d-block d-lg-none">
                                        <div class="logo">
                                            <a href="/"><img src="images/logo/logo_01.png" alt=""
                                                    width="130" /></a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d" href="/" role="button"
                                            aria-expanded="false">Home</a>

                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="what-we-do" role="button">What We Do</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register-company" role="button">Register Your
                                            Company</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact-us" role="button">Contact us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="client-area" class="send-msg-btn tran3s d-none d-lg-block">Client
                                            Login</a>
                                    </li>
                                </ul>
                                <!-- Mobile Content -->
                                <div class="mobile-content d-block d-lg-none">
                                    <div class="d-flex flex-column align-items-center justify-content-center mt-70">
                                        <a href="" class="send-msg-btn tran3s mb-10">Client Login</a>

                                    </div>
                                </div>
                                <!-- /.mobile-content -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.inner-content -->
        </header>
        {{ $slot }}




        <script src="/vendor/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/aos-next/dist/aos.js"></script>
        <script src="/vendor/slick/slick.min.js"></script>
        <script src="/vendor/jquery.counterup.min.js"></script>
        <script src="/vendor/jquery.waypoints.min.js"></script>
        <script src="/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <script src="/js/theme.js"></script>
        <script src="/js/test.js"></script>

</body>

</html>
