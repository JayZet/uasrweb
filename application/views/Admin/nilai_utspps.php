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
            <th>Nilai UTS</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Bidang Minat</th>
            <th>Judul</th>
            <th>Nilai UTS</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            foreach($data as $d){
                echo '
                <tr>
                <td>'.$d['nama'].'</td>
                <td>'.$d['bidang_minat'].'</td>
                <td>'.$d['judul'].'</td>
                <td>
                    <form action="'.base_url().'Admin/Login_dosen/aksiutspps/'.$dosen->niy.'/'.$d['nim_id'].'" method="post">
                    <div class="form-group">
                    <input type="text" class="form-control" name="uts" value="'.$d['uts'].'">
                    </div>
                </td>
                <td><button type="submit" class="btn btn-primary">Edit</button></td>
                </form>
                </tr>';
            }
            ?>
        </tbody>
      </table>
   
  </div>
</div>

</div>
<!-- /.container-fluid -->