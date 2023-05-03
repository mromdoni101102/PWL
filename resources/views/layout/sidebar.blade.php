<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin-bottom: 400px;">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">M. Rom doni </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/artkel') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Artikel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <li class="nav-item">
                        <a href="{{ url('/hobi') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Hobi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <li class="nav-item">
                            <a href="{{ url('/keluarga') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Keluarga
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <li class="nav-item">
                                <a href="{{ url('/matakuliah') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Mata Kuliah
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>

                                <li class="nav-item">
                                    <a href="{{ url('/mahasiswa') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            Mahasiswa
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>

                                    <li class="nav-item">
                                        <a href="{{ url('/buku') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>
                                                Buku
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>