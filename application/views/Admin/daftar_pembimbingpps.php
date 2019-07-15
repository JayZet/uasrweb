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
            <th>Bukti Prmbayaran</th>
            <th>Persetujuan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($data as $d){
                echo '
                <tr>
                <td>'.$d['nama'].'</td>
                <td>'.$d['bidang_minat'].'</td>
                <td>'.$d['judul'].'</td>
                <td><a href="'.base_url().'gambar/'.$d['foto'].'">'.$d['foto'].'</a></td>
                ';if($d['status_pps'] == "menunggu konfirmasi"){
                  echo '
                    <td>
                    <a href="'.base_url().'Admin/Login_dosen/setujupps/'.$dosen->niy.'/'.$d['nim_id'].'" type="submit" class="btn btn-primary">setuju</a></td>
                  ';
                    
                }else if($d['status_pps'] == "judul diterima"){
                    echo '
                    <td>
                    <a href="'.base_url().'Admin/Login_dosen/seminarpps/'.$dosen->niy.'/'.$d['nim_id'].'" type="submit" class="btn btn-primary">Seminar</a></td>
                  ';
                }else{
                    echo'<td>Selesai</td>';
                }
                echo '<td><a href="'.base_url().'Admin/Login_dosen/hapuspps/'.$dosen->niy.'/'.$d['nim_id'].'" class="btn btn-danger" type="submit">Hapus</a></td>
                </tr>';
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->