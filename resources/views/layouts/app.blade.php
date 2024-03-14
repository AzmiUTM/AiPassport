<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

        <!-- third party css -->
        @yield('css')
        <link href="{{asset('temp')}}/assets/css/vendor/sweetalert2.min.css" rel="stylesheet" >
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('temp')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('temp')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{asset('temp')}}/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
        @include('layouts.navigation')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    @include('layouts.topbar')
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    @yield('content')
                    <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.footer')
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->


        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->


        {{-- <script src="{{asset('temp')}}/assets/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
        <script src="{{asset('temp')}}/assets/js/vendor.min.js"></script>
        <script src="{{asset('temp')}}/assets/js/app.min.js"></script>

        {{-- <!-- third party:js -->
        <script src="{{asset('temp')}}/assets/js/vendor/apexcharts.min.js"></script>
        <!-- third party end -->

        <!-- Chat js -->
        <script src="{{asset('temp')}}/assets/js/ui/component.chat.js"></script>

        <!-- Todo js -->
        <script src="{{asset('temp')}}/assets/js/ui/component.todo.js"></script>

        <!-- demo:js -->
        <script src="{{asset('temp')}}/assets/js/pages/demo.widgets.js"></script>
        <!-- demo end --> --}}

        @yield('script')
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
            }, 1500); // Wait for 3 seconds (3000 milliseconds)
        });
        </script>
    </body>
</html>
