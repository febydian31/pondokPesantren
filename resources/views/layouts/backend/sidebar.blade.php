<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #006400;">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text text-center" style="font-size: 0.9rem; line-height: 1.2;">
            Pondok Pesantren<br><strong>Zuhriyah</strong>
        </div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ request()->routeIs('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-home fa-fw"></i>
            <span>Beranda</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin/article*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('article.index') }}">
            <i class="fas fa-newspaper fa-fw"></i>
            <span>Artikel</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin/activity*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('activity.index') }}">
            <i class="fas fa-folder fa-fw"></i>
            <span>Kegiatan</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin/achievement*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('achievement.index') }}">
            <i class="fas fa-trophy fa-fw"></i>
            <span>Prestasi</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin/student*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('student.index') }}">
            <i class="fas fa-users fa-fw"></i>
            <span>Santri</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin/donation*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('donation.index') }}">
            <i class="fas fa-hand-holding-usd fa-fw"></i>
            <span>Donasi</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>
