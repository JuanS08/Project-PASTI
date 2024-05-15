<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
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
    <style>
        .post-entry {
            height: 300px;
            /* Atur tinggi post-entry */
            overflow: hidden;
            border-radius: 10px;
            position: relative;
        }

        .d-block.mb-4 {
            width: 100%;
            height: 100%;
            /* Mengisi tinggi parent (post-entry) */
            object-fit: cover;
            /* Mengatur gambar agar sesuai dengan ukuran parent */
            border-radius: 10px;
        }

        .post-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.45);
            /* Memberi latar belakang putih semi-transparan */
            border-radius: 0 0 10px 10px;
        }

        .post-meta {
            display: block;
            margin-bottom: 10px;
            color:#222
        }

        h3 {
            margin-bottom: 10px;
            color: #444;
            /* Warna judul */
        }

        p {
            margin-bottom: 0;
            color: #777;
            /* Warna teks */
        }
    </style>
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
        <!-- ======= Home Section ======= -->
        <section>
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Kami Hadir Di Kota Besar</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/medan.jpeg') }}" alt="medan" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">MEDAN</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/tebing.jpeg') }}" alt="tebing" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Tebing Tinggi</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/pematang.png') }}" alt="siantar" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Pematang Siantar</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/parapat.jpeg') }}" alt="parapat" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Parapat</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/porsea.jpeg') }}" alt="porsea" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Porsea</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/laguboti.jpeg') }}" alt="laguboti" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Laguboti</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/balige.jpeg') }}" alt="balige" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Balige</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/siborongborong.jpeg') }}" alt="siborongborong" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Siborongborong</h3>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <img src="{{ url('assets/img/tarutung.jpeg') }}" alt="" style="height: 200px; padding: 20px;">
                            </div>
                            <h3 class="text-center mb-3">Tarutung</h3>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section border-top border-bottom">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-4">
                        <h2 class="section-heading">Informasi</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-slide">
                                <div class="row">
                                    @php $counter = 0; @endphp
                                    @foreach ($informasi as $item)
                                    <div class="col-md-6">
                                        <div class="review">
                                            <div class="post-entry">
                                                <a class="d-block mb-4">
                                                    <img src="{{ asset($item->image) }}" alt="Image" class="img-fluid">
                                                </a>
                                                <div class="post-text">
                                                    <span class="post-meta">{{ $item->created_at }}</span>
                                                    <h3><a>{{ $item->judul }}</a></h3>
                                                    <div class="description" style="max-height: 100px; overflow: hidden;">
                                                        <p>{{ $item->deskripsi }}</p>
                                                    </div>
                                                    @if (strlen($item->deskripsi) > 100)
                                                    <a class="show-more-btn">Show more</a>
                                                    @endif
                                                </div>
                                            </div>

                                            <script>
                                                document.querySelectorAll('.show-more-btn').forEach(button => {
                                                    button.addEventListener('click', function() {
                                                        const description = this.parentElement.querySelector('.description');
                                                        description.style.maxHeight = null;
                                                        this.style.display = 'none';
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main>

    @include('partials.footer2')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main2.js')}}"></script>

</body>

</html>