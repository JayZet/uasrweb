<div class="container">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Upload Berkas Metopen</h1>
    </div>
<!-- form -->
<?= $this->session->flashdata('sukses'); ?>
<?php if(isset($error)) { echo $error; }; ?>
 <form action="<?php echo base_url(); ?>Koor/Login_koor/aksi_upload" method="post" enctype="multipart/form-data">
    <hr>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <div class="form-group">
                <label for="berkas">Berkas</label>
                <div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="foto">
					<label class="custom-file-label" for="customFile" name="foto">Upload File Berkas</label>
				</div>
        </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="berkas">Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
                <?php echo form_error('keterangan'); ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <input class="btn btn-block btn-danger" type="reset" value="Batal">
        </div>
        <div class="col-lg-6 col-sm-12">
            <input class="btn btn-block btn-primary" type="submit" Value="Simpan">
        </div>
    </div>
 </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
				$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
</script>