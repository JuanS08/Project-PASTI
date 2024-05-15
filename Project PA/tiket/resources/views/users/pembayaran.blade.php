<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Pembayaran</title>
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
        /* Custom styles for card header */
        .card-header {
            cursor: pointer;
        }

        .card-header:hover {
            background-color: #f7f7f7;
        }

        /* Menambahkan jarak di atas dan di bawah konten */
        .page-single {
            padding-top: 150px;
            /* Jarak dari header */
            padding-bottom: 500px;
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
    @include('partials.header2')

    <section class="page-single mt-100 mb-100">
        <div class="tabbable">
            <div class="nav-tabs">
                <div class="container">
                    <div class="row">
                        <ul class="nav ml-auto">
                            <li><a href="{{ route('users.pemesanan') }}">Cara Pemesanan</a></li>
                            <li><a href="{{route('users.pembayaran')}}" class="active">Cara Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pemesananTabsContent">
                <div class="tab-pane fade show active" id="cara-pembayaran" role="tabpanel" aria-labelledby="cara-pembayaran-tab">
                    <div class="w-100">
                        <div class="container-holder step-item my-5">
                            <div class="container">
                                <div class="section-title mb-3">
                                    <h3 class="bold text-uppercase primary-color mb-2">Cara pembayaran</h3>
                                    <h6 class="bold text-uppercase gray-color">tersedia berbagai jenis pembayaran yang memudahkan anda</h6>
                                </div>

                                <div id="accordion" class="accordion">
                                    <div class="card mb-0">
                                        <div class="accordion-item">
                                            <div class="card-header collapsed" data-bs-toggle="collapse" data-bs-target="#collapse0">
                                                <a class="card-title bold">CIMB Virtual Account</a>
                                            </div>
                                            <div id="collapse0" class="collapse" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p><b>Pembayaran VA melalui ATM CIMB NIAGA</b></p>
                                                    <ol>
                                                        <li>Masukkan kartu ATM dan PIN CIMB Niaga Anda</li>
                                                        <li>Pilih Menu Pembayaran</li>
                                                        <li>Pilih Virtual Account</li>
                                                        <li>Masukkan NOMOR VIRTUAL ACCOUNT</li>
                                                        <li>Muncul nama dan nominal billing di layar konfirmasi</li>
                                                        <li>Pilih OK untuk payment</li>
                                                    </ol>

                                                    <p><b>Pembayaran VA melalui OCTO Clicks</b></p>
                                                    <ol>
                                                        <li>Login ke OCTO Clicks</li>
                                                        <li>Pilih menu Pembayaran Tagihan</li>
                                                        <li>Pilih kategori Mobile Rekening Virtual</li>
                                                        <li>Masukkan nomor Virtual Account Anda</li>
                                                        <li>Tekan tombol 'lanjut untuk verifikasi detail'</li>
                                                        <li>Tekan tombol 'kirim OTP untuk lanjut'</li>
                                                        <li>Masukkan OTP yang dikirimkan ke nomor HP anda</li>
                                                        <li>Tekan tombol 'Konfirmasi'</li>
                                                    </ol>

                                                    <p><b>Pembayaran VA melalui OCTO MOBILE</b></p>
                                                    <ol>
                                                        <li>Login ke Octo Mobile</li>
                                                        <li>Pilih menu TRANSFER > Transfer to Other CIMB Niaga Account</li>
                                                        <li>Pilih rekening sumber anda: CASA atau Rekening Ponsel</li>
                                                        <li>Masukkan nomor Virtual Account Anda pada kolom Transfer To</li>
                                                        <li>Masukkan jumlah amount sesuai tagihan</li>
                                                        <li>Ikuti instruksi untuk menyelesaikan transaksi</li>
                                                    </ol>
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
        </div>
    </section>

    @include('partials.footer2')

    <!-- Link to Bootstrap JavaScript from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>