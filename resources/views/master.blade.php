<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/646e87d3f4.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/assets/images/icons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/assets/images/icons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/assets/images/icons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('assets/assets/images/icons/site.html')}}" />
    <link rel="mask-icon" href="{{ asset('assets/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666" />
    <link rel="shortcut icon" href="{{ asset('assets/assets/images/icons/favicon.ico')}}" />

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/plugins/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/plugins/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/plugins/jquery.countdown.css')}}" />

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/dropdown.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/demos/demo-12.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/elements.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/elements_responsive.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}" />
    <!-- Plugins CSS File -->

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/plugins/nouislider/nouislider.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/demos/demo-11.css')}}" />

    <title>web Poject</title>
</head>

<body>
    {{View::make('header')}}
    @yield('index-content')
    {{View::make('footer')}}


    <!-- Plugins JS File -->
    <script src="{{ asset('assets/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{ asset('assets/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/wNumb.js')}}"></script>
    <script src="{{ asset('assets/assets/js/nouislider.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/assets/js/login-menu-dropdown.js')}}"></script>
    <script src="{{ asset('assets/assets/js/demos/demo-12.js')}}"></script>
    <script src="{{ asset('assets/assets/js/demos/demo-11.js')}}"></script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
</style>

</html>