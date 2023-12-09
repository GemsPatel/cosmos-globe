<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>COSMOS Globe &#8211; Immigration and Visa Consulting</title>

    <link rel='stylesheet' href="{{ url('public/css/layerdrops-toolbar.css') }}" media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/vendors/animate/animate.min.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/vendors/animate/custom-animate.css') }}"
        media='all' />
    <link rel='stylesheet'
        href="{{ url('public/plugins/treck-addon/assets/vendors/bootstrap-select/css/bootstrap-select.min141d.css') }}"
        media='all' />
    <link rel='stylesheet'
        href="{{ url('public/plugins/treck-addon/assets/vendors/bxslider/jquery.bxslider141d.css') }}" media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/vendors/jarallax/jarallax141d.css') }}"
        media='all' />
    <link rel='stylesheet'
        href="{{ url('public/plugins/treck-addon/assets/vendors/jquery-magnific-popup/jquery.magnific-popup141d.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/vendors/odometer/odometer.min141d.css') }}"
        media='all' />
    <link rel='stylesheet'
        href="{{ url('public/plugins/treck-addon/assets/vendors/owl-carousel/owl.carousel.min141d.css') }}"
        media='all' />
    <link rel='stylesheet'
        href="{{ url('public/plugins/treck-addon/assets/vendors/owl-carousel/owl.theme.default.min141d.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/vendors/reey-font/stylesheet141d.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/plugins/treck-addon/assets/css/treck-addon141d.css') }}"
        media='all' />
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Plus+Jakarta+Sans%3A200%2C200i%2C300%2C300i400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%26subset%3Dlatin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' href="{{ url('public/themes/vendors/flaticons/css/flaticon.css') }}" media='all' />
    <link rel='stylesheet' href="{{ url('public/themes/vendors/treck-icons/style.css') }}" media='all' />
    <link rel='stylesheet' href="{{ url('public/themes/vendors/bootstrap/css/bootstrap.min.css') }}"
        media='all' />
    <link rel='stylesheet' href="{{ url('public/themes/vendors/fontawesome/css/all.min.css') }}" media='all' />
    <link rel='stylesheet' href="{{ url('public/css/cg-style.css') }}" media='all' />
    <style>
        :root {
            --treck-primary: #f2edeb;
            --treck-primary-rgb: 242, 237, 235;

            --cosmos-globe-theme: #7aa9c7;
            --cosmos-globe-theme-rgb: 226, 9, 53;

            --treck-black: #16171a;
            --treck-black-rgb: 22, 23, 26;
        }

        .page-header-bg {
            background-image: url({{url('public/uploads/2023/04/page-header-bg.jpg')}});
        }

        .preloader .preloader__image {
            background-image: url({{url('public/uploads/2023/04/loader.png')}});
        }

        :root {
            --treck-primary: #f2edeb;
            --treck-primary-rgb: 242, 237, 235;
            --cosmos-globe-theme: #7aa9c7;
            --cosmos-globe-theme-rgb: 226, 9, 53;
            --treck-black: #16171a;
            --treck-black-rgb: 22, 23, 26;
        }

        .page-header-bg {
            background-image: url({{url('public/uploads/2023/04/page-header-bg.jpg')}});
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{url('public/js/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-14 theme-treck woocommerce-no-js custom-cursor woocommerce-active elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-14">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div id="page" class="site page-wrapper">
    @include('elements.header-menu')
    
   