<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pemesanan dan Pembayaran</title>
    <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">
    <!-- Link to Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/pemesanan.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiket.css') }}">
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

    <style>
        /* Menambahkan jarak di atas dan di bawah konten */
        .page-single {
            padding-top: 150px;
            /* Jarak dari header */
            padding-bottom: 20px;
            /* Jarak ke footer */
        }

        /* Menambahkan jarak di atas footer */
        .footer2 {
            margin-top: 20px;
            /* Sesuaikan nilai ini sesuai kebutuhan */
        }

        /* Container for navigation tabs, ensuring proper alignment and spacing */
        .nav-tabs .container {
            padding: 0;
            /* Remove padding inside the container */
            max-width: 100%;
            /* Ensures the container can expand as needed */
        }

        /* Style for the navigation list */
        .nav-tabs .nav {
            list-style-type: none;
            /* Removes list bullets */
            padding: 0;
            /* Removes padding */
            display: flex;
            /* Displays list items inline */
            justify-content: flex-end;
            /* Aligns the navigation to the right */
            margin-bottom: 0;
            /* Removes default bottom margin */
        }

        /* Styles for each navigation item */
        .nav-tabs .nav li {
            margin-left: 20px;
            /* Spacing between menu items */
        }

        /* Link styling for non-active state */
        .nav-tabs .nav a {
            text-decoration: none;
            /* Removes underline */
            color: #007bff;
            /* Bootstrap primary blue color, adjustable as needed */
            padding: 10px 15px;
            /* Padding for clickable area */
            border-radius: 5px;
            /* Rounded corners for aesthetic */
            transition: color 0.3s ease, background-color 0.3s ease;
            /* Smooth transition for hover effects */
        }

        /* Hover and active link styling */
        .nav-tabs .nav a:hover,
        .nav-tabs .nav a.active {
            color: #fff;
            /* White text on active/hover */
            background-color: #007bff;
            /* Background color on hover/active */
        }

        /* Specific style when link is active */
        .nav-tabs .nav a.active {
            font-weight: bold;
            /* Makes active link bold */
        }
    </style>

</head>

<body>
    @include('partials.header')

    <section class="page-single mt-100 mb-100">
        <div class="tabbable">
            <div class="nav-tabs">
                <div class="container">
                    <div class="row">
                        <ul class="nav ml-auto">
                            <li><a href="{{route('guest.pemesanan')}}" class="active">Cara Pemesanan</a></li>
                            <li><a href="{{route('guest.pembayaran')}}">Cara Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pemesananTabsContent">
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="cara-pemesanan-tab">

                    <div class="w-100">
                        <div class="container-holder step-item my-5">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-8 col-12 step-w">
                                        <div class="step-number">
                                            1
                                        </div>
                                        <div class="img-step">
                                            <div class="blue-box">
                                                <img src="{{ asset('assets/img/bagan1.png') }}" class="img-100 float-right">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
                                        <div class="w-100">
                                            <h3 class="primary-color bold mb-3">Pilih Rute</h3>

                                            <p>Pilih Rute Perjalanan Anda ,Tersedia
                                                penjemputan jika keberangkatan
                                                melalui Loket, Jangan lupa untuk mengisi
                                                tanggal Keberangkatan & Jumlah Penumpang</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="container-holder step-item my-5">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
                                        <div class="w-100">
                                            <h3 class="primary-color bold mb-3">Lengkapi Info<br>Keberangkatan Anda</h3>

                                            <p class="mb-0">Isi Nama Penumpang, dan Alamat Jemput/Antar*</p>
                                            <p>Lalu Pilih Jam yang tersedia</p>

                                            <div class="f-small gray-color">*Layanan Jemput/Antar hanya tersedia pada keberangkatan melalui
                                                Loket</div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-12 step-w">
                                        <div class="step-number">
                                            2
                                        </div>
                                        <div class="img-step">
                                            <div class="blue-box">
                                                <img src="assets/img/step-2.png" class="img-100 float-left">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="container-holder step-item my-5">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-8 col-12 step-w">
                                        <div class="step-number">
                                            3
                                        </div>
                                        <div class="img-step">
                                            <div class="blue-box">
                                                <img src="assets/img/step-3.png" class="img-100 float-right">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
                                        <div class="w-100">
                                            <h3 class="primary-color bold mb-3">Pilih Kursi</h3>

                                            <p>Pilih kursi, dan cek tagihan anda,
                                                lalu Klik Bayar untuk menyelesaikan
                                                pesanan. tukarkan Poin untuk
                                                potongan harga di setiap Perjalanan.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="container-holder step-item my-5">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
                                        <div class="w-100">
                                            <h3 class="primary-color bold mb-3">Terima Tiket Anda</h3>

                                            <p>Lunasi tiket anda dengan berbagai
                                                metode pembayaran yang telah di sediakan</p>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-12 step-w">
                                        <div class="step-number">
                                            4
                                        </div>
                                        <div class="img-step">
                                            <div class="blue-box">
                                                <img src="assets/img/step-4.png" class="img-100 float-left">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

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