<head>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
</head>
<nav id="header" class="navbar navbar-expand-lg navbar-dark fixed-top">
    @if(session('success'))
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <!-- Navbar Logo -->
                <li class="nav-item flex-fill" role="presentation">
                    <a class="navbar-brand" href="#"><img src="{{ url('assets/img/kbt.jpeg') }}" alt="" style="height: 100px; margin-right: 30px;"></a>
                </li>

                <!-- Menu Pesan Sekarang -->
                <li class="nav-item flex-fill" role="presentation">
                    <a class="nav-link w-100 {{ request()->is('guest/login*') ? 'active' : '' }}" href="{{ route('guest.login') }}" role="tab" aria-controls="Pesan sekarang" aria-selected="true">PESAN SEKARANG</a>
                </li>

                <!-- Menu Cara Pemesanan -->
                <li class="nav-item flex-fill" role="presentation">
                    <a class="nav-link w-100 {{ request()->is('guest/pemesanan*', 'guest/pembayaran*') ? 'active' : '' }}" href="{{ route('guest.pemesanan') }}" role="tab" aria-controls="cara pemesanan dan pembayaran" aria-selected="false">CARA PEMESANAN &amp; PEMBAYARAN</a>
                </li>

                <!-- Menu Cek Pesanan -->
                @if (Auth::check())
                <li class="nav-item flex-fill" role="presentation">
                    <a class="nav-link w-100" href="#" role="tab" aria-controls="cek pesanan" aria-selected="false">CEK PESANAN</a>
                </li>
                @endif

                <!-- Menu Login Member -->
                @if (!Auth::check())
                <li class="nav-item flex-fill" role="presentation">
                    <a class="nav-link w-100" href="{{ route('guest.login') }}" role="tab" aria-controls="login member" aria-selected="false">LOGIN MEMBER</a>
                </li>
                @endif

                <!-- Menu Kirim Barang -->
                <li class="nav-item">
                    <a class="nav-link fs-8 {{ request()->is('guest/login*') ? 'active' : '' }}" href="{{ route('guest.login') }}"><img src="{{ url('assets/img/barang.jpg') }}" alt="" style="height: 60px;">KIRIM BARANG</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    // Ambil alert yang memiliki id 'alert'
    var alert = document.getElementById('alert');

    // Setelah 3 detik, sembunyikan alert secara otomatis
    setTimeout(function() {
        alert.classList.add('d-none');
    }, 1500); // 3000 milidetik = 3 detik
</script>