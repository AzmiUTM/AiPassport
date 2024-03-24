
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon-->
    <link href="{{ asset('argon') }}/img/brand/myaims.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" />
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/quill/dist/quill.core.css">

    @yield('css')
    @stack('css')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

    <!-- Select2 CSS load before argon-->
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/select2/dist/css/select2.min.css" type="text/css">

    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="{{ $class ?? '' }}">
    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))


    @include('layouts.navbars.sidebar')

    @endif
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar')
        @yield('content')
    </div>

    @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
    @include('layouts.footers.guest')
    @endif


    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
    <!-- Optional JS -->
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    <script src="{{ asset('argon') }}/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/autocomplete/bootstrap3-typeahead.min.js"></script>

    @stack('js')

    <!-- Argon JS2 -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <script src="{{ asset('argon') }}/js/demo.min.js"></script>
    @yield('scripts')

    <script src="{{asset('temp')}}/assets/js/vendor/sweetalert2.min.js"></script>
        <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                @if(Session::has('swal_title'))
                    Swal.fire({
                        title: '{{ Session::get('swal_title') }}',
                        //text: '',
                        icon: '{{ Session::get('swal_icon')}}',
                        showConfirmButton: false,
                        timer: 2500,
                        timerProgressBar: true,
                    })
                @endif
            }, 500); // Wait for 3 seconds (3000 milliseconds)
        });
        </script>
</body>
</html>
