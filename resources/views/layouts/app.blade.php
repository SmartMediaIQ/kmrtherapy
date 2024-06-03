<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}" />

    @yield('page-specific-style')
</head>

<body data-sidebar="light" data-layout-mode="light" id="hs-mode">
    <div id="layout-wrapper" class="hs">
        @include('includes.header')
        {{-- @include('includes.sidebar') --}}
        @if(Request::is('dashboard'))
            <div class="alert alert-info alert-dismissible fade show hs-alert popinfo" role="alert">
            <span class="mt-0"><i class="mdi mdi-hand me-2"></i><b>Welcome To Smart Insurance!</b> The easier, faster alternative to Healthcare.gov - designed specifically for agents & brokers.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @include('includes.sidebar')
        <div class="main-content hs-clients">
            <div class="page-content pb-0">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('includes.footer')
        </div>
    </div>

        <script src="{{asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{asset('assets/js/pages/apexcharts.init.js') }}"></script>
        <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
        <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
        <script src="{{asset('assets/js/app.js') }}"></script>
        <script>
            const themeToggle = document.getElementById('checkbox');

            themeToggle.addEventListener('change', function() {

            if (this.checked) {
                document.body.setAttribute('data-layout-mode', 'dark');
                document.body.setAttribute('data-sidebar', 'dark');
            } else {
                document.body.removeAttribute('data-layout-mode', 'dark');
                document.body.removeAttribute('data-sidebar', 'dark');
            }
            });
        </script>

    @yield('page-specific-script')
</body>

</html>
