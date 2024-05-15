<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pelanggan</title>
    <link rel="icon" href="{{ asset('assets/img/kbt.png') }}" type="image/png">

    <!-- Link to Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link to Custom CSS -->
    <link href="{{ asset('assets/css/tiket.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('partials.header2')


    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section class="hero-section" id="hero">

            <div class="content-container">
                <div class="content">
                    <section class="page-single mt-100 mb-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="ticket-info">
                                        <form>
                                            <label for="tanggal_pemesanan">Tanggal Pemesanan</label><br>
                                            <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan"><br><br>
                                            <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label><br>
                                            <input type="date" id="tanggal_keberangkatan" name="tanggal_keberangkatan"><br><br>
                                            <label for="asal_keberangkatan">Asal Keberangkatan</label><br>
                                            <select id="asal_keberangkatan" name="asal_keberangkatan" required>
                                                <option value="">Pilih Asal Keberangkatan</option>
                                                <option value="Medan">Medan</option>
                                                <option value="Lubuk Pakam">Lubuk Pakam</option>
                                                <option value="Perbaungan">Perbaungan</option>
                                                <option value="Sei Rampah">Sei Rampah</option>
                                                <option value="Tebing Tinggi">Tebing Tinggi</option>
                                                <option value="Pematang Siantar">Pematang Siantar</option>
                                                <option value="Seribu Dolok">Seribu Dolok</option>
                                                <option value="Parapat">Parapat</option>
                                                <option value="Lumban Djulu">Lumban Djulu</option>
                                                <option value="Porsea">Porsea</option>
                                                <option value="Lubuk Pakam">Laguboti</option>
                                                <option value="Balige">Balige</option>
                                                <option value="Siborong-borong">Siborong-borong</option>
                                                <option value="Tarutung">Tarutung</option>
                                            </select><br><br>
                                            <label for="tujuan">Tujuan</label><br>
                                            <select id="tujuan_keberangkatan" name="tujuan_keberangkatan" required>
                                                <option value="">Pilih Tujuan Keberangkatan</option>
                                                <option value="Medan">Medan</option>
                                                <option value="Lubuk Pakam">Lubuk Pakam</option>
                                                <option value="Perbaungan">Perbaungan</option>
                                                <option value="Sei Rampah">Sei Rampah</option>
                                                <option value="Tebing Tinggi">Tebing Tinggi</option>
                                                <option value="Pematang Siantar">Pematang Siantar</option>
                                                <option value="Seribu Dolok">Seribu Dolok</option>
                                                <option value="Parapat">Parapat</option>
                                                <option value="Lumban Djulu">Lumban Djulu</option>
                                                <option value="Porsea">Porsea</option>
                                                <option value="Lubuk Pakam">Laguboti</option>
                                                <option value="Balige">Balige</option>
                                                <option value="Siborong-borong">Siborong-borong</option>
                                                <option value="Tarutung">Tarutung</option>
                                            </select><br><br>
                                            <label for="jumlah_penumpang">Jumlah Penumpang</label><br>
                                            <input type="number" id="jumlah_penumpang" name="jumlah_penumpang"><br><br>
                                            <input type="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section><!-- End Hero -->
    </main>

    @include('partials.footer2')
</body>

</html>