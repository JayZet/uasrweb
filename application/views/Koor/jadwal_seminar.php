<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div style="margin:50px">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Jadwal Seminar</h1>
    </div>
<!-- form -->
<?= $this->session->flashdata('sukses'); ?>
<?php if(isset($error)) { echo $error; }; ?>
 <form action="<?= base_url('Koor/Login_koor/jadwal/'.$nim->nim) ?>" method="post">
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				    <div class="form-group">
					<label for="nama">Nama Mahasiswa :</label>
                    <?php
                        foreach($seminar as $hh){
                            echo $hh['nama'];
                        }
                    ?>
				    </div>
				    <div class="form-group">
					<label for="nama">Judul Metopen :</label>
                    <?php
                        foreach($seminar as $hh){
                            echo $hh['judul'];
                        }
                    ?>
				    </div>
			</div>
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
					<label for="nama">Dosen Pembimbing :</label>
                    <?php
                        foreach($seminar as $hh){
                            echo $hh['dosen'];
                        }
                    ?>
				    </div>
				    <div class="form-group">
					<label for="nama">Bidang Minat :</label>
                    <?php
                        foreach($seminar as $hh){
                            echo $hh['bidang_minat'];
                        }
                    ?>
				    </div>
            </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="dosen_penguji">Dosen Penguji</label>
                <select name="dosen_penguji"  class="custom-select" id="dosen_penguji">
                <?php
                    foreach($seminar as $hh){
                        if($hh['bidang_minat']=='Machine Learning'){
                            echo'
                            <option value="Dewi Normawati">Dewi Normawati</option>
                            <option value="Dewi Pramudi Ismi">Dewi Pramudi Ismi</option>             
                            ';
                        }else if($hh['bidang_minat']=='Multimedia'){
                            echo'
                            <option value="Ika Arfiani">Ika Arfiani</option>
                            <option value="Adhi Prahara">Adhi Prahara</option>
                            <option value="Ahmad Azhari">Ahmad Azhari</option>
                            <option value="Wahyu Pujiono">Wahyu Pujiono</option>
                            ';
                        }else if($hh['bidang_minat']=='AI Game'){
                            echo'      
                            <option value="Adhi Prahara">Adhi Prahara</option>
                            <option value="Ahmad Azhari">Ahmad Azhari</option>            
                            ';
                            
                        }else if($hh['bidang_minat']=='Pengenalan Pola'){                           
                            echo'      
                            <option value="Ahmad Azhari">Ahmad Azhari</option>          
                            ';
                        }else{
                            echo'      
                            <option value="tidak diketahui">tidak diketahui</option>          
                            ';
                        }
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="tempat" >

                        </div>
                        <div class="col">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" >
                        </div>
                    </div>
				</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <button class="btn btn-block btn-danger" type="reset">BATAL</button>
        </div>
        <div class="col-lg-6 col-sm-12">
            <button class="btn btn-block btn-primary" type="submit">SIMPAN</button>
        </div>
    </div>
 </form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
				$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
</script>