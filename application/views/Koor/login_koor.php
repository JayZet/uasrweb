<div class="container">
<h1 class="text-center my-3" style="color: teal;padding-top:60px">HALAMAN LOGIN</h1>
<div class="row mt-4">
		<div class="col-lg-4 col-md-12 col-sm-12"></div>
		<div class="col-lg-4 col-md-12 col-sm-12">
            <hr>
            <?php if(isset($error)) { echo $error; }; ?>
			<form action="<?= base_url('Koor/Login_koor/aksi_login') ?>" method="post">
			
				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Username</label>
					<input type="text" class="form-control form-control-user" id="id" name="id">
					<input type="hidden" class="form-control form-control-user" id="nama" name="nama">
                        <?php echo form_error('id'); ?>
						
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1" style="color: teal;">Password</label>
					<input type="password" class="form-control form-control-user" id="password" name="password">		
                    <?php echo form_error('password'); ?>
                </div>
				<button type="submit" class="btn btn-success align-right" style="color: white;">Login</button>
            </form>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12"></div>
	</div>
</div>