<div class="container">
<h1 class="text-center my-3" style="color: teal;padding-top:60px">BUAT AKUN</h1>
<div class="row mt-4">
		<div class="col-lg-3 col-md-12 col-sm-12"></div>
		<div class="col-lg-6 col-md-12 col-sm-12">
			<hr>
      <?php if(isset($error)) { echo $error; }; ?>
			<form action="<?= base_url('Login/aksi_registrasi') ?>" method="post">
			
            <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nama_awal" id="exampleFirstName" placeholder="First Name">
                    <?php echo form_error('nama_awal'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="nama_akhir" id="exampleLastName" placeholder="Last Name">
                    <?php echo form_error('nama_akhir'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                  <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" id="exampleInputName" placeholder="Username">
                  <?php echo form_error('username'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    <?php echo form_error('password'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" id="exampleRepeatPassword" placeholder="Repeat Password">
                    <?php echo form_error('password2'); ?>
                  </div>
                </div>
                <div class="form-group">
                    <small>Sudah punya akun ? <a href="<?= base_url('Login') ?>"> Login Sekarang</a></small>
                    </div>
				<button type="submit" class="btn btn-success align-right" style="color: white;">Register Account</button>
			</form>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12"></div>
	</div>
</div>