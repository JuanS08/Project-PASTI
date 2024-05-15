    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabel Booking KBT</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">

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

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/kendaraan.css') }}" rel="stylesheet">
        <style>
            form {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input,
            textarea {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }

            button {
                background-color: #4e73df;
                color: #fff;
                padding: 10px 15px;
                border: none;
                cursor: pointer;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #4e73df;
                color: #fff;
            }

            .sidebar-brand-icon img {
                transform: rotate(15deg);
            }

            .sidebar-brand {
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                height: 50px;
            }

            .sidebar-brand img {
                width: auto;
                height: 100%;
                max-width: 40px;
                margin-right: 10px;
            }

            .sidebar-brand-text {
                margin-top: 5px;
                /* Sesuaikan margin sesuai kebutuhan */
            }

            .border-left-purple {
                border-left: 0.25rem solid #800080;
                /* Warna ungu (#800080) */
            }

            .text-purple {
                color: #800080;
            }
        </style>
    </head>

    <body>
        @include('admin.header')
        @include('admin.sidebar')
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>Informasi KBT</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Tiket</li>
                        <li class="breadcrumb-item active">Kendaraan KBT</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <div class="bus-container">
                        <h1 class="title">Denah KBT</h1>
                        <div class="bus-top-view">
                            <div class="seat-row" data-nomor-kendaraan="1">
                                <div class="seat green" onclick="bookSeat(1, 1)">1</div>
                                <div class="seat green" onclick="bookSeat(1, 2)">2</div>
                                <div class="seat black">S</div>
                            </div>

                            <div class="seat-row">
                                <div class="seat green">3</div>
                                <div class="seat green">4</div>
                                <div class="seat green">5</div>
                            </div>
                            <div class="seat-row">
                                <div class="seat green">6</div>
                                <div class="seat green">7</div>
                                <div class="seat green">8</div>
                            </div>
                            <div class="seat-row">
                                <div class="seat green">9</div>
                                <div class="seat green">10</div>
                                <div class="seat green">11</div>
                            </div>
                            <div class="seat-row">
                                <div class="seat storage">X</div>
                            </div>
                        </div>
                        <div class="notes">
                            <p>Ket :</p>
                            <p><span class="color-box green"></span> = Kursi kosong</p>
                            <p><span class="color-box red"></span> = Kursi sudah di booking</p>
                            <p><span class="color-box orange"></span> = Tempat Barang atau Paket</p>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Details KBT</h1>
                    </div>

                    <!-- Tabel untuk menampilkan data -->
                    <table border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User ID</th>
                                <th>Nomor Kendaraan</th>
                                <th>Nomor Kursi</th>
                                <th>Total Kursi</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $key => $detail)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $detail->user_id }}</td>
                                <td>{{ $detail->nomor_kendaraan }}</td>
                                <td>{{ $detail->nomor_kursi }}</td>
                                <td>{{ $detail->total_kursi }}</td>
                                <td>{{ $detail->kelas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </main>

        @include ('admin.footer')
        <!-- End of Content Wrapper -->
        <script>
            function bookSeat(nomor_kendaraan, nomor_kursi) {
                // Kirim permintaan Ajax untuk melakukan booking
                $.ajax({
                    url: '{{ route("booking.seat") }}',
                    type: 'POST',
                    data: {
                        nomor_kendaraan: nomor_kendaraan,
                        nomor_kursi: nomor_kursi,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $(".seat-row").each(function() {
                            var nomor_kendaraan_row = $(this).data('nomor-kendaraan');
                            if (nomor_kendaraan_row == nomor_kendaraan) {
                                $(this).find(".seat").each(function() {
                                    var nomor_kursi_row = $(this).text();
                                    if (nomor_kursi_row == nomor_kursi) {
                                        $(this).removeClass('green').addClass('red');
                                    }
                                });
                            }
                        });
                    }
                });
            }
        </script>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js')}}"></script>

    </body>

    </html>