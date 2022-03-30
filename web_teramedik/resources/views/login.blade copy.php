<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ url('assets/images/logo_ws.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ url('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/toastr/toastr.min.css') }}" rel="stylesheet">
    <title>Teramedik - Login</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="{{ url('assets/images/logo_ws2.png') }}" width="180" height="120" alt="">
                                        </div>
                                        <h4 class="mt-3 font-weight-bold">LOGIN</h4>
                                        <p class="text-muted">Silahkan Memasukan Username & Password dibawah ini</p>
                                        <hr>
                                        {{-- Error Alert --}}
                                        @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{session('error')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                        <form action="{{url('proses_login')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="mb-3 mt-5">
                                                @error('login_gagal')
                                                {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span> --}}
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @enderror
                                                <label class="form-label" for="exampleInputEmail1">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" autocomplete="off" autofocus>
                                                @if ($errors->has('username'))
                                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                                <input type="password" placeholder="Password" name="password" id="password" class="form-control" autocomplete="off" />
                                                @if ($errors->has('password'))
                                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ url('assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>
<script src="{{ url('assets/toastr/toastr.min.js') }}"></script>

<script>

</script>

</html>