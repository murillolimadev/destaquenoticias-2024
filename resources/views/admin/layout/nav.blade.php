<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>

    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt=""
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Destaque notícias</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ auth()->user()->name }}</a> --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Buscar"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.pages.categoria.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Categorias
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.classificados.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Classificados
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.noticias.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Notícias
                            {{-- <span class="right badge badge-danger">{{ count($totalnews) }}</span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.publicidade.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Publicidade
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.denuncia.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Denuncias
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.parceiros.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-urses"></i> --}}
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Parceiros
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.rifa.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-urses"></i> --}}
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Rifas
                        </p>
                    </a>
                </li>

                {{-- @endif --}}
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-block btn-dark btn-sm" btn-xs" btn-dark btn-xs">Sair</button>
                    </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
