<!-- sidebar user panel -->
<div class="user-panel">
  
</div>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

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
    <a class="nav-link" href="<?= base_url('Admin/Login_dosen/Home/'.$dosen->niy) ?>">
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
      <a class="nav-link" href="<?= base_url('Admin/Login_dosen/pembimbing/'.$dosen->niy) ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengolahan Pembimbing</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Admin/Login_dosen/uts/'.$dosen->niy) ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengelolahan nilai UTS</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Admin/Login_dosen/uas/'.$dosen->niy) ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Pengelolahan nilai UAS</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link"collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages" >
        <i class="fas fa-fw fa-user"></i>
        <span>PPS</span></a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="<?= base_url('Admin/Login_dosen/pembimbingpps/'.$dosen->niy) ?>">Pembimbing PPS</a>
            <a class="collapse-item" href="<?= base_url('Admin/Login_dosen/utspps/'.$dosen->niy) ?>">Pengolahan UTS PPS</a>
            <a class="collapse-item" href="<?= base_url('Admin/Login_dosen/uaspps/'.$dosen->niy) ?>">Pengolahan UAS PPS</a>

        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Admin/Login_dosen/tampil_jadwal/'.$dosen->niy) ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Jadwal Seminar</span></a>
    </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
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