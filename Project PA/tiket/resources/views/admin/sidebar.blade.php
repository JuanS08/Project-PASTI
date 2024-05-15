<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#components-nav">
                <i class="bi bi-info-square"></i>
                <span>Informasi</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.informasi') }}">
                        <i class="bi bi-layout-text-sidebar"></i>
                        <span>Overview Informasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tabel_informasi') }}">
                        <i class="bi bi-table"></i>
                        <span>Tabel Informasi</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#forms-nav">
                <i class="bi bi-ticket"></i>
                <span>Tiket</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.kendaraan_kbt') }}">
                        <i class="bi bi-truck"></i>
                        <span>Detail Kendaraan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.create_tiket') }}">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Overview Tiket</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tabel_tiket') }}">
                        <i class="bi bi-table"></i>
                        <span>Tabel-Informasi Tiket KBT</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pelanggan') }}">
                        <i class="bi bi-people"></i>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.approval_tiket') }}">
                        <i class="bi bi-clipboard-check"></i>
                        <span>Approval Tiket</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#tables-nav">
                <i class="bi bi-cash"></i>
                <span>Payments</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.tabel_payments') }}">
                        <i class="bi bi-table"></i>
                        <span>Tabel Payments</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#charts-nav">
                <i class="bi bi-box"></i>
                <span>Paket</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.tabel_paket') }}">
                        <i class="bi bi-table"></i>
                        <span>Tabel Paket</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.payment_paket') }}">
                        <i class="bi bi-cash-coin"></i>
                        <span>Payment Paket</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
    </ul>

</aside><!-- End Sidebar-->