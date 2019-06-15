<div class="container">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
<div class="row">
    <!-- Card status pembayaran -->
    <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Status Pembayaran</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">belum bayar</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-info fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
    <!-- card uang registrasi -->
    <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Biaya Registrasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 215,000</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
    <!-- card uang pangkal -->
   <!--  <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Biaya Uang pangkal</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 215,000</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div> -->
       <!-- Card tgl tes seleksi-->
       <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tanggal Seleksi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12 Desember 1945</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
        <!-- Card status diterima-->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Status Penerimaan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">tidak diterima</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-info fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
</div>
<!-- Page berita -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Berita</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <!-- Default Card Example -->
            <a href="<?= base_url('Berita') ?>"> 
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Default Card Example</h6>
                </div>
                <div class="card-body text-gray-800">
                    This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-6">
            <!-- Default Card Example -->
            <a href="<?= base_url('Berita') ?>">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Default Card Example</h6>
                </div>
                <div class="card-body text-gray-800">
                    This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>
            </a>
        </div>
    </div>
</div>