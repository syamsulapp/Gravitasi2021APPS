<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        @if(Auth::user()->role == 'admin')
        <div class="sidebar-brand-text mx-3">Admin gravitasi<sup>{{ now()->year }}</sup></div>
        @elseif (Auth::user()->role == 'keuangan')
        <div class="sidebar-brand-text mx-3">Admin Keuangan<sup>{{ now()->year }}</sup></div>
        @else
        <div class="sidebar-brand-text mx-3">Users Gravitasi<sup>{{ now()->year }}</sup></div>
        @endif
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    @if(Auth::user()->role == 'admin')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Data Users
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa fa-users"></i>
            <span>Users Management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ url('admin/users-management') }}">List Akun Admin</a>
                <a class="collapse-item" href="{{ url('admin/users/peserta') }}">List Akun Peserta</a>
                <a class="collapse-item" href="{{ url('admin/view-tambah-users') }}">Tambah Users</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Lomba
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa fa-rocket"></i>
            <span>lomba</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Lomba:</h6>
                <a class="collapse-item" href="{{ url('admin/lomba-view') }}">Daftar Lomba</a>
                <a class="collapse-item" href="{{ url('admin/lomba-tambah') }}">Buat Lomba</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa fa fa-calendar"></i>
            <span>Jadwal Lomba</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jadwal Lomba:</h6>
                <a class="collapse-item" href="{{ url('admin/jadwal-lomba-view') }}">Daftar Jadwal Lomba</a>
                <a class="collapse-item" href="{{ url('admin/jadwal-form') }}">Buat Jadwal Lomba</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa fa fa fa-bell"></i>
            <span>Pengumuman Lomba</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengumuman :</h6>
                <a class="collapse-item" href="login.html">Daftar Pengumuman Lomba</a>
                <a class="collapse-item" href="login.html">Buat Pengumuman Lomba</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    @elseif (Auth::user()->role == 'keuangan')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('adminkeuangan/keuangan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <div class="sidebar-heading">
        Management Keuangan Lomba
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('adminkeuangan/konfirmasi_pembayaran') }}" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa fa-money"></i>
            <span>konfirmasi pembayaran</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('adminkeuangan/sudah_membayar') }}" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa fa-money"></i>
            <span>sudah membayar</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    @else
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('users/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Aktifitas Peserta
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/users/jadwal_lomba') }}">
            <i class="fas fa-fw fa fa-calendar"></i>
            <span>jadwal lomba</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa fa-rocket"></i>
            <span>Lomba Yang Di Ikuti</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa fa-bell"></i>
            <span>Pengumuman Lomba Yang Di Ikuti</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    @endif

</ul>