<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><img src="{{ asset('dashboard/img/logo1.png') }}" alt="Logo" style="width: 100px;">
            {{-- {{ config('app.name', 'Laravel') }} --}}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard.grafik') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard Grafik</p>
                    </a>
                </li>
                <li class="nav-header">MANAGEMENT KEMUNING</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Kemuning
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('artikel.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Artikel</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dokumen.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Dokumen</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('event.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Event</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Kegiatan</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('member.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Member</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('report.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data Report</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="fa fa-file-alt"></i>
                                <p> Data User</p>
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>