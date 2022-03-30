<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--favicon-->
    <link rel="icon" href="{{ url('assets/images/teramedik_logo2_rbg.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    <!-- loader-->
    <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/header-colors.css') }}" />
    <link href="{{ url('assets/toastr/toastr.min.css') }}" rel="stylesheet">

    <title>Teramedik - Terakorp Indonesia</title>

    <style>
        td,
        th {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @extends('templates/menu')
        <!--end sidebar wrapper -->
        <!--start header -->
        @extends('templates/navbar')
        <!--end header -->
        <!--start page wrapper -->
        @section('content')
        @show
        <!--end page wrapper -->
        @extends('templates/footer')
    </div>
    @extends('templates/script')
</body>

</html>