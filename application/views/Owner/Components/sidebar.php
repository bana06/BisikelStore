<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Owner/Home') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-store"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Bisikel Store</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item  <?= ($this->uri->segment(2) == 'Home')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Owner/Home') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading">
    Transaksi
  </div>

  <li class="nav-item  <?= ($this->uri->segment(2) == 'Transaksi')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Owner/Transaksi') ?>">
      <i class="fas fa-fw fa-dollar-sign"></i>
      <span>Transaksi</span></a>
  </li>

  <li class="nav-item  <?= ($this->uri->segment(2) == 'RiwayatTransaksi')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Owner/RiwayatTransaksi') ?>">
      <i class="fas fa-fw fa-check"></i>
      <span>Riwayat Transaksi</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Management
  </div>

  <li class="nav-item <?= ($this->uri->segment(2) == 'Barang')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Owner/Barang') ?>">
      <i class="fas fa-fw fa-boxes"></i>
      <span>Barang saya</span></a>
  </li>

  <li class="nav-item <?= ($this->uri->segment(2) == 'Brand')? 'active' : '' ?>">
    <a class="nav-link" href="<?= site_url('Owner/Brand') ?>">
      <i class="fas fa-fw fa-box"></i>
      <span>Management Brand</span></a>
  </li>

  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('Owner/Home/myprofile') ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Profil saya</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('Owner/Home/reset_password') ?>">
      <i class="fas fa-fw fa-key"></i>
      <span>Ubah Kata Sandi</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Keluar</span></a>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="buttons.html">Buttons</a>
        <a class="collapse-item" href="cards.html">Cards</a>
      </div>
    </div>
  </li> -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>