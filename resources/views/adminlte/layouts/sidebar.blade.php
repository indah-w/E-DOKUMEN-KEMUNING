<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 170px;">
            {{-- {{ config('app.name', 'Laravel') }} --}}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard v</p>
                    </a>
                </li>
<<<<<<< HEAD
                <li class="nav-header">MANAGEMENT KEMUNING</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Data Member
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('member.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{ route('crud.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('crud.edit') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
=======
>>>>>>> ec1ed9ca30df616d992bda0b1c175b88401b9779
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>