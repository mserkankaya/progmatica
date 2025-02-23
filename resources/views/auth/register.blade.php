<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('admin/assets/images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
</head>

<body>
<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <img src="{{asset('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="">
                            </a>
                            <h1 class="text-center">Progmatica</h1>
                            <form method="POST" action="{{ route('auth.register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputtext1" class="form-label">Adınız - Soyadınız</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Adresiniz</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Şifre</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Şifre Tekrar</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Kayıt Ol</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Zaten Bir Hesabım Var</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ route('auth.login') }}">Giriş Yap</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
