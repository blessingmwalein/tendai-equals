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
</head>

<body>
    <div class="main-page-wrapper">

        <div class="user-data-page clearfix d-md-flex">
            <div class="illustration-wrapper d-none d-md-flex align-items-center">

                <div class="illustration-holder">
                    <img src="images/assets/ils_22.svg" alt="" class="illustration m-auto" />
                </div>
            </div>
            <!-- /.illustration-wrapper -->

            <div class="form-wrapper">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="/" class="d-block"><img src="images/logo/logo_01.png" alt=""
                                width="131" /></a>
                    </div>
                    <a href="/" class="go-back-button tran3s">Go to home</a>
                </div>
                <form action="#" class="user-data-form mt-60 lg-mt-40">
                    <h2>
                        Client
                        Area!
                    </h2>
                    <p class="header-info pt-20 pb-20 lg-pt-10 lg-pb-10">
                        Still don't have an account? <a href="">Register</a>
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="input-group-meta mb-25">
                                <label>Email Address</label>
                                <input type="email" placeholder="test@test.com" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group-meta mb-25">
                                <label>Password</label>
                                <input type="password" class="pass_log_id" />
                                <span class="placeholder_icon"><span class="passVicon"><img
                                            src="images/icon/icon_40.svg" alt="" /></span></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                                <div>
                                    <input type="checkbox" id="remember" />
                                    <label for="remember">Keep me logged in</label>
                                </div>
                                <a href="#">Request Password Reset?</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn-eight w-100 mt-50 mb-40 lg-mt-30 lg-mb-30">
                                Login
                            </button>
                        </div>
                        <div class="col-12">
                            <p class="text-center copyright-text m0">
                                Copyright @2022 Test inc.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.form-wrapper -->
        </div>
        <!-- /.user-data-page -->

        <button class="scroll-top">
            <i class="bi bi-arrow-up-short"></i>
        </button>


    </div>


    <script src="/vendor/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/aos-next/dist/aos.js"></script>
    <script src="/vendor/slick/slick.min.js"></script>
    <script src="/vendor/jquery.counterup.min.js"></script>
    <script src="/vendor/jquery.waypoints.min.js"></script>
    <script src="/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/js/theme.js"></script>
</body>

</html>
