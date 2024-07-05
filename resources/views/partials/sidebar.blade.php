<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-white" href="#">Apotek NO</a>
        <a class="sidebar-brand brand-logo-mini text-white" href="#"><img src="{{ asset('assets/dashboard/template/assets/images/logoku1.png') }}" alt="" srcset=""></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="{{ asset('assets/dashboard/template/assets/images/gambar1.jpg') }}"
                            alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Krisna Putra</h5>
                        <span>Admin</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link {{ Route::is('pegawai.index') || Route::is('pegawai.create') || Route::is('pegawai.edit') }}" href="{{route('pegawai')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple-outline"></i>
                </span>
                <span class="menu-title">Data Pegawai</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link {{ Route::is('pelanggan.index') || Route::is('pelanggan.create') || Route::is('pelanggan.edit') }}" href="{{route('pelanggan.index')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-search"></i>
                </span>
                <span class="menu-title">Data Pelanggan</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link {{ Route::is('obat.index') || Route::is('obat.create') || Route::is('obat.edit') }}" href="{{route('obat.index')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-pill"></i>
                </span>
                <span class="menu-title">Data Obat</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link {{ Route::is('transaksi.index') || Route::is('transaksi.create') || Route::is('transaksi.edit') }}" href="{{route('transaksi.index')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Transaksi</span>
            </a>
        </li>
    </ul>
</nav>
<div class="container-fluid page-body-wrapper">