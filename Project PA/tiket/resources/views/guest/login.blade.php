<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">
    <link href="{{ asset('assets/css/tiket.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

</head>

<body>
    @include('partials.header')
    <div class="container3">
        <div class="card">
            <div class="card-body">
                <div class="login">
                    <h3>Login Member</h3>
                    <p>Selamat Datang</p>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('login') }}">
                        @csrf
                        <div class="input-field">
                            <label for="email">EMAIL</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-field">
                            <label for="password">PASSWORD</label>
                            <input type="password" id="password" name="password" required>
                            <i class="password-toggle far fa-eye" onclick="togglePasswordVisibility('password')"></i>
                        </div>
                        <script>
                            function togglePasswordVisibility(inputId) {
                                var passwordInput = document.getElementById(inputId);
                                if (passwordInput.type === 'password') {
                                    passwordInput.type = 'text';
                                    document.querySelector('.password-toggle').classList.remove('fa-eye');
                                    document.querySelector('.password-toggle').classList.add('fa-eye-slash');
                                } else {
                                    passwordInput.type = 'password';
                                    document.querySelector('.password-toggle').classList.remove('fa-eye-slash');
                                    document.querySelector('.password-toggle').classList.add('fa-eye');
                                }
                            }
                        </script>
                        <button type="submit">LOGIN</button>
                    </form>
                    <p class="input-field1">Belum punya akun? <a href="{{ url('register') }}">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <!-- Link to Bootstrap JavaScript from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

</body>

</html>