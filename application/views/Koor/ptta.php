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
            <th>NIM</th>
            <th>Judul</th>
            <th>Dosen Pembimbing</th>
            <th>Bukti pembayaran</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot></tfoot>
        <tbody>
          <?php
            foreach($seminar as $d){
                echo '
                <tr>
                <td>'.$d['nama'].'</td>
                <td>'.$d['nim'].'</td>
                <td>'.$d['judul'].'</td>
                <td>'.$d['dosen'].'</td>
                <td><a href="'.base_url().'gambar/'.$d['foto'].'">'.$d['foto'].'</a></td>
                <td>'.$d['status_ptta'].'</td>
                <td><a href="'.base_url('Koor/Login_koor/ubahptta/'.$d['nim']).'" class="btn btn-primary" type="submot">Konfirmasi</a></td>
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