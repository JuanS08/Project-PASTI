<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Paket</title>
    <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">
    <!-- Link to Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/tiket.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
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
        /* Content styling */
        #main {
            margin-top: 150px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: static;
        }

        form {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        button {
            background-color: #4e73df;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        button:hover {
            background-color: #375abb;
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

        form {
            margin-top: 20px;
        }

        label,
        select,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    @include('partials.header2')
    <main id="main" class="main">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Buat Pengiriman Paket</h1>
                </div>
                <!-- Form untuk menambah data detail tiket -->
                <form action="{{ route('users.barang.store') }}" method="POST">
                    @csrf
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" id="nama_paket" name="nama_paket" required>
                    <br>

                    <label for="berat">Berat</label>
                    <input type="number" id="berat" name="berat" required>
                    <br>

                    <label for="harga">Harga</label>
                    <select id="harga" name="harga" required>
                        <option value="">Pilih Harga Paket</option>
                        <option value="10000">0-1 kg: Rp. 10.000</option>
                        <option value="20000">1-2 kg: Rp. 20.000</option>
                        <option value="30000">2-3 kg: Rp. 30.000</option>
                    </select>
                    <br>

                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" required>
                    <br>

                    <label for="pengirim_id">Nama Pengirim</label>
                    <input type="text" id="name_pengirim" name="name_pengirim" required>
                    <br>

                    <label for="pengirim_id">Nama Penerima</label>
                    <input type="text" id="name_penerima" name="name_penerima" required>
                    <br>

                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>
                    <br>

                    <label for="waktu_kedatangan">Waktu Kedatangan</label>
                    <input type="date" id="waktu_kedatangan" name="waktu_kedatangan">
                    <br>

                    <label for="waktu_keberangkatan">Waktu Keberangkatan</label>
                    <input type="date" id="waktu_keberangkatan" name="waktu_keberangkatan">
                    <br>

                    <button type="submit"><i class="fas fa-box"></i> Submit</button>
                </form>

            </div>
    </main>
    @include('partials.footer2')

    <!-- Link to Bootstrap JavaScript from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>