 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Bidang Minat</th>
            <th>Judul</th>
            <th>Persetujuan</th>
            <th>Action</th>
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
                <td>'.$d['status_pps'].'</td>
                <td><a href="'.base_url('Koor/Login_koor/jadwalpps/'.$d['nim_id']).'" class="btn btn-primary" type="submot">Jadwal</a></td>
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