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

    <div class="user-data-page clearfix d-md-flex">
        <div class="illustration-wrapper d-none d-md-flex align-items-center">
            <div class="illustration-holder">
                <img src="images/assets/ils_22.svg" alt="" class="illustration m-auto">
            </div>
        </div> <!-- /.illustration-wrapper -->

        <div class="form-wrapper">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo"><a href="/" class="d-block"><img src="images/logo/logo_01.png" alt=""
                            width="131"></a></div>
                <a href="/" class="go-back-button tran3s">Go to home</a>
            </div>
            <form action="#" class="user-data-form mt-60 lg-mt-40">
                <h2 style="font-size:30px">Register As A Tester <br> Not A Member? Lets Fix That!</h2>
                <p class="header-info pt-20 pb-20 lg-pt-10 lg-pb-10">Have an account? Login <a
                        href="/client-area">here</a></p>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group-meta mb-20">
                            <label>First Name*</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-meta mb-20">
                            <label>Last Name*</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-meta mb-20">
                            <label>Middle name*</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-meta mb-20">
                            <label>DOB*</label>
                            <input type="date">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group-meta mb-20">
                            <label>Current Location*</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group-meta mb-20">
                            <label>Country of Origin*</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-meta form-group mb-30 has-error has-danger">
                            <label>Currency</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>RTGS</option>
                                <option>USD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-meta mb-20">
                            <label>Upload CV*</label>
                            <input type="file">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                            <div class=" d-flex justify-content-between align-items-center">
                                <input type="checkbox" id="remember" style="width:20px">
                                <label for="remember" class="ml-2" style="margin-left:15px;margin-top:5px">Agree To Terms &
                                    Conditions</label>
                            </div>

                        </div> <!-- /.agreement-checkbox -->
                    </div>

                    <div class="col-12">
                        <button class="btn-eight w-100 mt-50 mb-40 lg-mt-30 lg-mb-30">Submit</button>
                    </div>
                    <div class="col-12">
                        <p class="text-center copyright-text m0">Copyright @2022 Test inc.</p>
                    </div>
                </div>
            </form>
        </div> <!-- /.form-wrapper -->
    </div> <!-- /.user-data-page -->





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
