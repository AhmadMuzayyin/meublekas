<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Karunia Meuble</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('kategori.index') }}">
            <i class="fas fa-bars"></i>
            <span>Kategori</span>
        </a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->routeIs('produk.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('produk.index') }}">
            <i class="fab fa-product-hunt"></i>
            <span>Produk</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->routeIs('profil.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('profil.index') }}">
            <i class="fas fa-house"></i>
            <span>Profil Toko</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->
