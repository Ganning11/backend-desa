<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- bootsrap --}}
    @yield('title')
    <link rel="icon" href="assets/kiky.png" type="image/x-icon" />


    <link rel="stylesheet" href="/assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/css/select2.min.css">
    <link rel="stylesheet" href="/assets/vendor/datatables/css/jquery.dataTables.css">
    <link rel="stylesheet" href="/assets/css/style2.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-free/css/solid.css">


    <script>
        const storedToken = localStorage.getItem("token");

        if (!storedToken) {
            window.location.href = '/login';
            var queryString = window.location.pathname;
            localStorage.setItem("urlDefault", queryString);
        }



        console.log(storedToken);
    </script>
    @yield('css')
</head>

<body>
    <div class="container-fluid">
        @include('Admin.partials.sidebar')
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
            @yield('container')
        </div>
    </div>

    <!--My Script-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
    <script src="/JS/sidebar.js"></script>
    <script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ url('JS/home.js') }}"></script>
    @yield('script')
</body>

</html>
