<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IEEE-SIGHT') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles

    <!-- Font Icons -->
    <link media="all" rel="stylesheet" href="/css/fonts/icomoon/icomoon.css">
    <link media="all" rel="stylesheet" href="/css/fonts/roxine-font-icon/roxine-font.css">
    <link media="all" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.css">
    <!-- Vendors -->
    <link media="all" rel="stylesheet" href="/vendors/owl-carousel/dist/assets/owl.carousel.min.css">
    <link media="all" rel="stylesheet" href="/vendors/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link media="all" rel="stylesheet" href="/vendors/animate/animate.css">
    <link media="all" rel="stylesheet" href="/vendors/rateyo/jquery.rateyo.css">
    <link media="all" rel="stylesheet" href="/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css">
    <link media="all" rel="stylesheet" href="/vendors/fancyBox/source/jquery.fancybox.css">
    <link media="all" rel="stylesheet" href="/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css">
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="/css/bootstrap.css">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="/vendors/rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/vendors/rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/vendors/rev-slider/revolution/css/navigation.css">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="/css/main.css">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="/css/custom.css">
</head>

<body>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">

            @livewire('navigation')

            <main>
                {{ $slot }}
            </main>

            @livewire('footer')

        </div>
    </div>

    @stack('modals')

    @livewireScripts

    <!-- search form wrapper -->
    <div class="search-form-wrapper">
        <a href="#" class="nav-search-link close"><span class="icon-android-close"></span></a>
        <div class="holder">
            <input type="search" class="form-control form-control-v1" placeholder="Enter Your Search">
            <button type="submit"><span class="custom-icon-search"></span></button>
        </div>
    </div>

    <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- jquery library -->
    <script src="/vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="/vendors/tether/dist/js/tether.min.js"></script>
    <script src="/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendors/stellar/jquery.stellar.min.js"></script>
    <script src="/vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
    <script src="/vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
    <script src="/vendors/owl-carousel/dist/owl.carousel.js"></script>
    <script src="/vendors/waypoint/waypoints.min.js"></script>
    <script src="/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="/vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src="/vendors/image-stretcher-master/image-stretcher.js"></script>
    <script src="/vendors/wow/wow.min.js"></script>
    <script src="/vendors/rateyo/jquery.rateyo.js"></script>
    <script src="/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
    <script src="/js/mega-menu.js"></script>
    <!-- custom jquery script -->
    <script src="/js/jquery.main.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script type="text/javascript"
        src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script type="text/javascript"
        src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script type="text/javascript"
        src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js">
    </script>
    <!-- SNOW ADD ON -->
    <script type="text/javascript" src="/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
    <!-- revolutions slider script -->
    <script src="/js/revolution.js"></script>
</body>

</html>
