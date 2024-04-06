<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('assets') }}/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ url('assets') }}/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <x-layout.sidebar />


        <div class="body-wrapper">
            {{ $slot }}
        </div>
    </div>
    <script src="{{ url('assets') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('assets') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets') }}/assets/js/sidebarmenu.js"></script>
    <script src="{{ url('assets') }}/assets/js/app.min.js"></script>
    <script src="{{ url('assets') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ url('assets') }}/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ url('assets') }}/assets/js/dashboard.js"></script>
</body>

</html>
