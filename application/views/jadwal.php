 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class="card-body">
  <h3>Jadwal Seminar Proposal</h3>
  <hr>
  <div class="row">
			<div class="col-lg-6 col-sm-12">
				    <div class="form-group">
					<label for="nama">Nama Mahasiswa :</label>
                    <?php
                        foreach($nim as $hh){
                            echo $hh['nama'];
                        }
                    ?>
				    </div>
				    <div class="form-group">
					<label for="nama">Judul Metopen :</label>
                    <?php
                        foreach($nim as $hh){
                            echo $hh['judul'];
                        }
                    ?>
				    </div>
			</div>
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
					<label for="nama">Dosen Pembimbing :</label>
                    <?php
                        foreach($nim as $hh){
                            echo $hh['dosen'];
                        }
                    ?>
				    </div>
				    <div class="form-group">
					<label for="nama">Bidang Minat :</label>
                    <?php
                        foreach($nim as $hh){
                            echo $hh['bidang_minat'];
                        }
                    ?>
				    </div>
            </div>
    </div>
<hr>
    <div class="x">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
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