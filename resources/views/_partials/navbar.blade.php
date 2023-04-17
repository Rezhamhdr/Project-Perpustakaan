<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

  <li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('home') }}">
  <i class="fas fa-fw fa-tachometer-alt"></i>
  <span>Dashboard</span></a>
</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('rack.index') }}">
      <i class="fas fa-fw fa-archive"></i>
      <span>Rak Buku</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('book.index') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Buku</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('member.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Anggota</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('user.index') }}">
      <i class="fas fa-fw fa-user-secret"></i>
      <span>Petugas</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('loan.index') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Peminjaman</span>
    </a>
  </li>


    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 text-gray-600 small">{{ auth()->user()->name }}</span>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ route('setting') }}">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Settings
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>