<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link">
    <img src="{{asset('AdminLTE/dist')}}/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Klinik Pratama Hegar</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
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
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.suppliers.index') }}" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
            <p>
              Supplier
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.jenis.index') }}" class="nav-link">
            <i class="nav-icon fas fa-pills"></i>
            <p>
              Jenis Obat
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.obat.index') }}" class="nav-link">
            <i class="nav-icon fas fa-capsules"></i>
            <p>
              Nama Obat
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.s_masuk.index') }}" class="nav-link">
            <i class="nav-icon fas fa-inbox"></i>
            <p>
              Stok Masuk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.s_keluar.index') }}" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Stok Keluar
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.users.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>
              User 
            </p>
          </a>
        </li>  
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
