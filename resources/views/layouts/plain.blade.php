{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}" />
</head>

<body data-sidebar="light" data-layout-mode="light" id="hs-mode">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{asset('assets/js/pages/apexcharts.init.js') }}"></script>
    <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('assets/js/app.js') }}"></script>
    @yield('plain-specific-script')
</body>
</html>
