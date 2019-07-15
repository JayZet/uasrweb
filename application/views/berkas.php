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
            <th>Nama Berkas</th>
            <th>Keterangan</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach($data as $d){
            echo' 
            <tr>
                <td>'.$d->foto.'</td>
                <td>'.$d->keterangan.'</td>
                <td><a href="'.base_url().'Login_mhs/download/'.$d->foto.'" class="btn btn-success">Download</a></td>
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