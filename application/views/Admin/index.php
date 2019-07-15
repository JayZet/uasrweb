<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Pendaftar PTTA</h6>
  </div>
  <div class="card-body">
    <div class="x">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Mahasiswa</th>
            <th>Bidang Minat</th>
            <th>Judul</th>
            <th>Bukti Pembayaran</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($ptta as $d){
                echo '
                <tr>
                <td>'.$d['nama'].'</td>
                <td>'.$d['bidang_minat'].'</td>
                <td>'.$d['keterangan'].'</td>
                <td>
                <a href="'.base_url().'gambar/'.$d['foto'].'">'.$d['foto'].'</a>
                </td>
                <td>'.$d['status_ptta'].'</td>
                </tr>';
            }
            ?>
        </tbody>
      </table>
   
  </div>
</div>

</div>
<!-- /.container-fluid -->
</body>
</html>