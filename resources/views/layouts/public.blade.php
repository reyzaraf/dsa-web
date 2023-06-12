<!DOCTYPE html>
<html lang="en">

<head>
    <title>DUTA SULUT AMAN - RUMAH KEBANGSAAN DSA</title>

    <meta charset="utf-8" />
    <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <!-- Google Fonts -->
    <link href="{{ asset('ssi-fe/css?family=Roboto:400,400i,500,700') }}" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('dsa/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dsa/assets/css/font-awesome.min.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('dsa/assets/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('dsa/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('dsa/assets/css/custom-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('dsa/assets/css/owl.carousel.min.css') }}" />
    <link href="{{asset('dsa/assets/css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('dsa/assets/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('dsa/assets/img/logo.png') }}" />

    @yield('head')
</head>

<body>
    <!-- Preloader -->

    <main class="main-wrapper">
        <!-- Navigation -->
        <x-public.navbar />
        <!-- end navigation -->

        @yield('content')

    </main>
    <!-- end main wrapper -->

    <!-- jQuery Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
    <script src="{{ asset('dsa/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('dsa/assets/js/main.js') }}"></script>
 
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/38b3e84371.js" crossorigin="anonymous"></script>

    <!-- splidejs -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>

    @yield('script')
</body>

</html>
