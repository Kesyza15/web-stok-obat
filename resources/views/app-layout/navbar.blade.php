<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <!-- User Profile -->
      <li class="nav-item">
          {{-- <a class="nav-link" href="#" role="button"> --}}
              <i class="fas fa-user"></i> <!-- Ikon Profil -->
              <span class="ml-2">{{ Auth::user()->name }}</span> <!-- Nama Pengguna -->
          </a>
      </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Logout -->
      <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" 
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> <!-- Ikon Logout -->
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </li>
  </ul>
</nav>
<!-- /.navbar -->
