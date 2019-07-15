 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class="card-body">
  <h3>Jadwal Seminar Proposal</h3>
  <hr>
 
<hr>
    <div class="x">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Judul</th>
            <th>Dosen Pembimbing</th>
            <th>Dosen Penguji</th>
            <th>Tanggal</th>
            <th>Tempat Ujian</th>
          </tr>
        </thead>
    
        <tbody>
            <?php
                foreach($seminar as $d){
                    echo '
                        <tr>
                            <td>'.$d['nama'].'</td>
                            <td>'.$d['judul'].'</td>
                            <td>'.$d['dosen'].'</td>
                            <td>'.$d['dosen_penguji'].'</td>
                            <td>'.$d['tanggal'].'</td>
                            <td>'.$d['tempat'].'</td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
      </table>
   
  </div>
</div>

</div>
<!-- /.container-fluid -->