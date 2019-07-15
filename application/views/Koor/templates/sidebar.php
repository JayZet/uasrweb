<!-- sidebar user panel -->
<div class="user-panel">
  
</div>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
      <i class="fas fa-fw fa-school"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Metopen</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('Koor/Login_koor/Home') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Users
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Koor/Login_koor/aksi_upload') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Upload Berkas</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Koor/Login_koor/seminar') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengolahan Seminar</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Koor/Login_koor/seminarpps') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengolahan Seminar PPS</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Koor/Login_koor/tampil_jadwal') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Jadwal Seminar</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Koor/Login_koor/ptta') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Konfirmasi PTTA</span></a>
    </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('Koor/Login_koor/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Keluar</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->