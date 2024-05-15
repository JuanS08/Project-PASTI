<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel-Informasi Paket Pelanggan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">

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
    <style>
        /* Your custom styles here */
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
            /* Adjust margin as needed */
        }

        .border-left-purple {
            border-left: 0.25rem solid #800080;
            /* Purple color */
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
            <h1>Informasi Paket KBT</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Paket</li>
                    <li class="breadcrumb-item active">Tabel-Informasi Paket KBT</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Informasi Pengiriman Paket</h1>
                </div>

                <!-- Tabel untuk menampilkan data -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Pengirim</th>
                            <th>Penerima</th>
                            <th>Deskripsi</th>
                            <th>Waktu Kedatangan</th>
                            <th>Waktu Keberangkatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($packages))
                        @foreach($packages as $key => $package)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $package->nama_paket }}</td>
                            <td>{{ $package->berat }}</td>
                            <td>{{ $package->harga }}</td>
                            <td>{{ $package->kategori }}</td>
                            <td>{{ $package->name_pengirim }}</td>
                            <td>{{ $package->name_penerima }}</td>
                            <td>{{ $package->deskripsi }}</td>
                            <td>{{ $package->waktu_kedatangan }}</td>
                            <td>{{ $package->waktu_keberangkatan }}</td>
                            <td>
                                @if($package->status == 'Pending')
                                <span class="badge badge-warning">Pending</span>
                                @elseif($package->status == 'Success')
                                <span class="badge badge-success">Success</span>
                                @elseif($package->status == 'Failed')
                                <span class="badge badge-danger">Failed</span>
                                @endif
                            </td>
                            <td>
                                @if($package->status == 'Pending')
                                <a href="{{ route('admin.approve', $package->id) }}" class="btn btn-success">Setujui</a>
                                <a href="{{ route('admin.cancel', $package->id) }}" class="btn btn-danger">Batal</a>
                                @else
                                <!-- Tidak ada aksi jika sudah disetujui atau dibatalkan -->
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>

    @include ('admin.footer')
    <!-- End of Content Wrapper -->

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