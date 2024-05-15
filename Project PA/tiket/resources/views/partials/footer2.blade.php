<body>
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .col-md-4 a i {
            font-size: 30px;
            /* Ubah ukuran ikon sesuai kebutuhan */
            margin-right: 10px;
            /* Berikan margin kanan antara ikon */
        }
    </style>
</body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Menu</h5>
                <ul class="list-unstyled">
                    <li class="nav-item flex-fill" role="presentation">
                        <a class="nav-link w-100" href="{{ route('users.tiket') }}">PESAN SEKARANG</a>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <a class="nav-link w-100" href="{{ route('users.pemesanan') }}">CARA PEMESANAN &amp; PEMBAYARAN</a>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <a class="nav-link w-100" href="{{ route('users.cek_pesanan') }}">CEK PESANAN</a>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <a class="nav-link w-100" href="{{ route('users.history') }}">HISTORY</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Tentang Kami</h5>
                <a href="https://www.facebook.com/groups/202854083764182/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/explore/locations/618581213/loket-koperasi-bintang-tapanuli/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@bintangtapanuli1?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i></a>
                <a href="tel:+6282289836079"><i class="fas fa-phone"></i></a>
            </div>
            <div class="col-md-4">
                <h5>Lokasi</h5>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15945.80610629538!2d99.1250477!3d2.3539643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0100003e6489%3A0x48d6d60797f5821e!2sLoket%20kbt%20laguboti!5e0!3m2!1sid!2sid!4v1714651268575!5m2!1sid!2sid" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <p class="text-center">&copy; <?php echo date('Y'); ?> KBT Ticketing. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>