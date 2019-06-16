<div class="container">
 <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Formulir Pendaftaran Siswa Baru</h1>
    </div>
<!-- form -->
<?php if(isset($error)) { echo $error; }; ?>
 <form action="<?= base_url('Registrasi') ?>" method="post">
 <h5 class="text-center bg-dark" style="color:white;border-radius:25px;padding:4px;" >Identitas Calon Siswa &nbsp<i
			class="fas fa-user-circle"></i></h5>
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="nama">Nama Lengkap calon Siswa</label>
					<input type="text" class="form-control" id="nama" name='nama_lengkap'>
                    <?php echo form_error('nama_lengkap'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label for="ttl">Tempat, Tanggal lahir</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" id="ttl" name="tempat_lahir" placeholder="tempat lahir">
                        <?php echo form_error('tempat_lahir'); ?>
                        </div>
                        <div class="col">
                        <input type="date" class="form-control" name="tanggal_lahir" >
                        <?php echo form_error('tanggal_lahir'); ?>
                        </div>
                    </div>
				</div>
			</div>
	</div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="row">
                        <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="lk" name="jenis_kelamin"  value="laki-laki" checked>
                            <label class="form-check-label" for="lk">
                                Laki-laki
                            </label>
                        </div>
                        </div>
                        <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="pr" name="jenis_kelamin" value="perempuan" checked>
                            <label class="form-check-label" for="pr">
                                Perempuan
                            </label>
                        </div>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="asal_sekolah">Asal Sekolah</label>
					<input type="text" class="form-control" id="asal_sekolah" name='asal_sekolah'>
                    <?php echo form_error('asal_sekolah'); ?>
				</div>
			</div>
	</div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <label for="alamat">Alamat Tempat Tinggal</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="alamat" name="rt_siswa" placeholder='RT'>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="alamat" name="rw_siswa" placeholder='RW'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="alamat" name="dusun_siswa" placeholder='Dusun'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="alamat" name="desa_siswa" placeholder='Desa'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="alamat" name="kecamatan_siswa" placeholder='Kecamatan'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="alamat" name="kabupaten_siswa" placeholder='Kabupaten'>
                        </div>
                        
                    </div>
				</div>
			</div>
	</div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <input type="text" class="form-control" id="alamat" name="lainnya_siswa" placeholder='Alamat lainnya'>
                </div>
			</div>
	</div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="agama">Agama</label>
					<input type="text" class="form-control" id="agama" name='agama'>
                    <?php echo form_error('agama'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="tinggal">Tinggal Bersama</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tinggal_bersama" id="orangtua" value="Orang Tua" checked>
                                <label class="form-check-label" for="orangtua">
                                    Orang Tua
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tinggal_bersama" id="wali" value="Wali" checked>
                                <label class="form-check-label" for="wali">
                                    Wali
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tinggal_bersama" id="pondok" value="Pondok" checked>
                                <label class="form-check-label" for="pondok">
                                    Pondok
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tinggal_bersama" id="panti_asuhan" value="Panti Asuhan" checked>
                                <label class="form-check-label" for="panti_asuhan">
                                    Panti Asuhan
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="tinggal_bersama" name="tinggal_bersama" placeholder='Lainnya'>
                        </div>
                    </div>
				</div>
			</div>
    </div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="no_hp">Telp yang dapat dihubungi</label>
					<input type="text" class="form-control" id="no_hp" name='no_hp'>
                    <?php echo form_error('no_hp'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label for="jml_saudara">Jumlah Saudara</label>
                    <input type="text" class="form-control" id="jml_saudara" name='jumlah_saudara'>
                    <?php echo form_error('jumlah_saudara'); ?>
				</div>
			</div>
    </div>
    <h5 class="text-center bg-dark" style="color:white;border-radius:25px;padding:4px;" >Identitas Orang Tua &nbsp<i
			class="fas fa-user-circle"></i></h5>
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="nama_ayah">Nama Ayah</label>
					<input type="text" class="form-control" id="nama_ayah" name='nama_ayah'>
                    <?php echo form_error('nama_ayah'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label>Tempat, Tanggal lahir</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" name="tempat_lahir_ayah" placeholder="tempat lahir">
                        <?php echo form_error('tempat_lahir_ayah'); ?>
                        </div>
                        <div class="col">
                        <input type="date" class="form-control" name="tanggal_lahir_ayah" >
                        <?php echo form_error('tanggal_lahir_ayah'); ?>
                        </div>
                    </div>
				</div>
			</div>
    </div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="tidak_sekolah_ayah" value="tidak_sekolah" checked>
                                <label class="form-check-label" for="tidak_sekolah_ayah">
                                    Tidak Sekolah
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="sd_ayah" value="SD" checked>
                                <label class="form-check-label" for="sd_ayah">
                                    SD
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="smp_ayah" value="SMP" checked>
                                <label class="form-check-label" for="smp_ayah">
                                    SMP
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="sma_ayah" value="SMA" checked>
                                <label class="form-check-label" for="sma_ayah">
                                    SMA
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="diploma_ayah" value="Diploma" checked>
                                <label class="form-check-label" for="diploma_ayah">
                                    Diploma
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ayah" id="sarjana_ayah" value="Sarjana" checked>
                                <label class="form-check-label" for="sarjana_ayah">
                                    Sarjana
                                </label>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" class="form-control" id="pekerjaan" name='pekerjaan_ayah'>
                    <?php echo form_error('pekerjaan_ayah'); ?>
				</div>
            </div>
    </div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <label>Alamat Tempat Tinggal</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rt_ayah" placeholder='RT'>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rw_ayah" placeholder='RW'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="dusun_ayah" placeholder='Dusun'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="desa_ayah" placeholder='Desa'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kecamatan_ayah" placeholder='Kecamatan'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kabupaten_ayah" placeholder='Kabupaten'>
                        </div>
                        
                    </div>
				</div>
			</div>
	</div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <input type="text" class="form-control" name="lainnya_ayah" placeholder='Alamat lainnya'>
                </div>
			</div>
    </div>
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="nama_ibu">Nama Ibu</label>
					<input type="text" class="form-control" id="nama_ibu" name='nama_ibu'>
                    <?php echo form_error('nama_ibu'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label>Tempat, Tanggal lahir</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" name="tempat_lahir_ibu" placeholder="tempat lahir">
                        <?php echo form_error('tempat_lahir_ibu'); ?>
                        </div>
                        <div class="col">
                        <input type="date" class="form-control" name="tanggal_lahir_ibu" >
                        <?php echo form_error('tanggal_lahir_ibu'); ?>
                        </div>
                    </div>
				</div>
			</div>
    </div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>Pendidikan Terakhir</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="tidak_sekolah_ibu" value="tidak_sekolah" checked>
                                <label class="form-check-label" for="tidak_sekolah_ibu">
                                    Tidak Sekolah
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="sd_ibu" value="SD" checked>
                                <label class="form-check-label" for="sd_ibu">
                                    SD
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="smp_ibu" value="SMP" checked>
                                <label class="form-check-label" for="smp_ibu">
                                    SMP
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="sma_ibu" value="SMA" checked>
                                <label class="form-check-label" for="sma_ibu">
                                    SMA
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="diploma_ibu" value="Diploma" checked>
                                <label class="form-check-label" for="diploma_ibu">
                                    Diploma
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_ibu" id="sarjana_ibu" value="Sarjana" checked>
                                <label class="form-check-label" for="sarjana_ibu">
                                    Sarjana
                                </label>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" class="form-control" id="pekerjaan" name='pekerjaan_ibu'>
                    <?php echo form_error('pekerjaan_ibu'); ?>
				</div>
            </div>
    </div>
    <div class="row">
            <div class="col-sm">
            <div class="form-group">
                    <label>Alamat Tempat Tinggal</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rt_ibu" placeholder='RT'>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rw_ibu" placeholder='RW'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="dusun_ibu" placeholder='Dusun'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="desa_ibu" placeholder='Desa'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kecamatan_ibu" placeholder='Kecamatan'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kabupaten_ibu" placeholder='Kabupaten'>
                        </div>
                        
                    </div>
				</div>
			</div>
	</div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <input type="text" class="form-control" name="lainnya_ibu" placeholder='Alamat lainnya'>
                </div>
			</div>
    </div>
    <h5 class="text-center bg-dark" style="color:white;border-radius:25px;padding:4px;" >Identitas Wali (kosongkan jika orang tua) &nbsp<i
			class="fas fa-user-circle"></i></h5>
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="nama_wali">Nama Wali</label>
					<input type="text" class="form-control" id="nama_wali" name='nama_wali'>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
                    <label>Tempat, Tanggal lahir</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" name="tempat_lahir_wali" placeholder="tempat lahir">
                        </div>
                        <div class="col">
                        <input type="date" class="form-control" name="tanggal_lahir_wali" >
                        </div>
                    </div>
				</div>
			</div>
    </div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label>Pendidikan Terakhir</label>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="tidak_sekolah_wali" value="tidak_sekolah" checked>
                                <label class="form-check-label" for="tidak_sekolah_wali">
                                    Tidak Sekolah
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="sd_wali" value="SD" checked>
                                <label class="form-check-label" for="sd_wali">
                                    SD
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="smp_wali" value="SMP" checked>
                                <label class="form-check-label" for="smp_wali">
                                    SMP
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="sma_wali" value="SMA" checked>
                                <label class="form-check-label" for="sma_wali">
                                    SMA
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="diploma_wali" value="Diploma" checked>
                                <label class="form-check-label" for="diploma_wali">
                                    Diploma
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan_terakhir_wali" id="sarjana_wali" value="Sarjana" checked>
                                <label class="form-check-label" for="sarjana_wali">
                                    Sarjana
                                </label>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" class="form-control" id="pekerjaan" name='pekerjaan_wali'>
				</div>
            </div>
    </div>
    <div class="row">
            <div class="col-sm">
            <div class="form-group">
                    <label>Alamat Tempat Tinggal</label>
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rt_wali" placeholder='RT'>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="rw_wali" placeholder='RW'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="dusun_wali" placeholder='Dusun'>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="desa_wali" placeholder='Desa'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kecamatan_wali" placeholder='Kecamatan'>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kabupaten_wali" placeholder='Kabupaten'>
                        </div>
                        
                    </div>
				</div>
			</div>
	</div>
    <div class="row">
            <div class="col-sm">
				<div class="form-group">
                    <input type="text" class="form-control" name="lainnya" placeholder='Alamat lainnya'>
                </div>
			</div>
    </div>
    <h5 class="text-center bg-dark" style="color:white;border-radius:25px;padding:4px;" >Persyaratan Pendaftaran &nbsp</h5>
    <hr>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
            <label>Akta Kelahiran</label>
                <div class="custom-file">
					<input type="file" class="custom-file-input" id="akta" name="path_akta">
					<label class="custom-file-label" for="akta"></label>
                    <?php echo form_error('path_akta'); ?>
				</div>
            </div>
			</div>
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
            <label>Kartu Keluarga</label>
                <div class="custom-file">
					<input type="file" class="custom-file-input" id="kk" name="path_kk">
					<label class="custom-file-label" for="kk"></label>
                    <?php echo form_error('path_kk'); ?>
				</div>
            </div>
			</div>
	</div>
    <div class="row">
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
            <label>Ijazah TK/SD/SMP</label>
                <div class="custom-file">
					<input type="file" class="custom-file-input" id="ijazah" name="path_ijazah">
					<label class="custom-file-label" for="ijazah"></label>
                    <?php echo form_error('path_ijazah'); ?>
				</div>
            </div>
			</div>
			<div class="col-lg-6 col-sm-12">
            <div class="form-group">
            <label>Pas Foto 3x4</label>
                <div class="custom-file">
					<input type="file" class="custom-file-input" id="pas_foto" name="path_pas_foto">
					<label class="custom-file-label" for="pas_foto"></label>
                    <?php echo form_error('path_pas_foto'); ?>
				</div>
            </div>
			</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <button type="submit" class="btn btn-block btn-success">Simpan</button>

        </div>
        <div class="col-lg-6 col-sm-12">
        <button type="reset" class="btn btn-block btn-danger">Batal</button>
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