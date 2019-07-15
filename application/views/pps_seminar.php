<div class="container">
<div class="row">
    <!-- Card status pembayaran -->
    <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Status Metopen</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        foreach($seminarpps as $d ){ 
                          echo $d['status_pps'];
                          }
                          ?></div>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nilai UTS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        foreach($seminarpps as $d){
                          if(($d['uts']>80) && ($d['uts']<=100)){
                            echo 'A ( Lulus )';
                          }else if(($d['uts']>60) && ($d['uts']<=80)){
                            echo 'B ( Lulus )';
                          }else if(($d['uts']>40) && ($d['uts']<=60)){
                            echo 'C ( Lulus )';
                          }else if(($d['uts']>20) && ($d['uts']<=40)){
                            echo 'D ( Tidak Lulus )';
                          }else if(($d['uts']>0) && ($d['uts']<=20)){
                            echo 'E ( Tidak Lulus )';   
                          }else if($d['uts']==0){
                            echo 'belum UTS';
                          }
                        }
                        ?>
                        </div>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nilai UAS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        foreach($seminarpps as $d){
                          if(($d['uas']>80) && ($d['uas']<=100)){
                            echo 'A ( Lulus )';
                          }else if(($d['uas']>60) && ($d['uas']<=80)){
                            echo 'B ( Lulus )';
                          }else if(($d['uas']>40) && ($d['uas']<=60)){
                            echo 'C ( Lulus )';
                          }else if(($d['uas']>20) && ($d['uas']<=40)){
                            echo 'D ( Tidak Lulus )';
                          }else if(($d['uas']>0) && ($d['uas']<=20)){
                            echo 'E ( Tidak Lulus )';   
                          }else if($d['uas']==0){
                            echo 'belum UAS';
                          }
                        }
                        ?>
                        </div>
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
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Judul Metopen</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        foreach($seminarpps as $d){
                          echo $d['judul'];
                        }
                        ?>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
    </div>

</div>
</div>
 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="x">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Bidang Minat</th>
            <th>Judul</th>
            <th>Pembimbing</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($seminarpps as $d){
                echo '
                <tr>
                <td>'.$d['nama'].'</td>
                <td>'.$d['bidang_minat'].'</td>
                <td>'.$d['judul'].'</td>
                <td>'.$d['dosen_pps'].'</td>
                </tr>
                ';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
