<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inicio') }}</title>
    <script src="https://kit.fontawesome.com/8efbe29298.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-3.6.0.js"
    crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.20.1/bootstrap-table.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <script src="{{ asset('js/argon/argon-dashboard.js') }}" defer></script>
    {{-- <script src="{{ asset('js/argon/argon-dashboard.js.map') }}" defer></script> --}}
    {{-- <script src="{{ asset('js/argon/argon-dashboard.min.js') }}" defer></script> --}}
    <script src="{{ asset('js/argon/plugins/bootstrap-notify.js') }}" defer></script>
    {{-- <script src="{{ asset('js/argon/plugin/Chart.extension.js') }}" defer></script> --}}
    <script src="{{ asset('js/argon/plugins/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('js/argon/plugins/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('js/argon/plugins/smooth-scrollbar.min.js') }}" defer></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{asset('js/argon/core/popper.min.js')}}"></script>
    <script src="{{asset('js/argon/core/bootstrap.min.js')}}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('scss/argon-dashboard/theme.scss')}}" rel="stylesheet">
    <link href="{{asset('scss/argon-dashboard.scss')}}" rel="stylesheet">
    {{-- <script src="{{ asset('js/chart.js') }}" defer></script> --}}
    <script src="{{ asset('js/animation.js') }}" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/argon/argon-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/argon/argon-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ asset('css/argon/argon-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/argon/nucleo-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/argon/nucleso-svg.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('layouts.aside')
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        @include('layouts.nav')
        @yield('content')
        <!-- End Navbar -->
    </main>
    @include('layouts.animation')
    <!--   Core JS Files   -->
    @yield('scripts')
</body>

</html>
