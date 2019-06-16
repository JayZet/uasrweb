<?php
class Registrasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('registrasi_model');

    }

    public function index(){
        
        $data['judul'] = "Pendaftaran Siswa Baru";

        /* form validasi Registrasi identitas siswa */
        $this->form_validation->set_rules('nama_lengkap','Nama lengkap','required');
        $this->form_validation->set_rules('tempat_lahir','Tempat lahir','required');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal lahir','required');
        $this->form_validation->set_rules('asal_sekolah','Asal Sekolah','required');
        $this->form_validation->set_rules('agama','agama','required');
        $this->form_validation->set_rules('no_hp','Nomor Telepon','required|numeric');
        $this->form_validation->set_rules('jumlah_saudara','Jumlah Saudara','required');

        /* form validasi registrasi identitas ayah */
        $this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
        $this->form_validation->set_rules('tempat_lahir_ayah','Tempat lahir','required');
        $this->form_validation->set_rules('tanggal_lahir_ayah','Tanggal lahir','required');
        $this->form_validation->set_rules('pekerjaan_ayah','Pekerjaan','required');
        
        /* form validasi registrasi identitas ibu */
        $this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
        $this->form_validation->set_rules('tempat_lahir_ibu','Tempat lahir','required');
        $this->form_validation->set_rules('tanggal_lahir_ibu','Tanggal lahir','required');
        $this->form_validation->set_rules('pekerjaan_ibu','Pekerjaan','required');
        
        /* form validasi registrasi persyaratan */
        $this->form_validation->set_rules('path_akta','Akta Kelahiran','required');
        $this->form_validation->set_rules('path_kk','kartu keluarga','required');
        $this->form_validation->set_rules('path_ijazah','Ijazah TK/SD/SMP','required');
        $this->form_validation->set_rules('path_pas_foto','Pas Foto 3x4','required');
        
        //set message form validation
        $this->form_validation->set_message('required', 
        '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle">
        </i> {field}</b> harus diisi</div></div>');
        $this->form_validation->set_message('numeric', 
        '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle">
        </i> {field}</b> harus angka</div></div>');

        if($this->form_validation->run() == TRUE){
            $this->registrasi_model->registrasi($this->registrasi_model->upload_file_akta(),
                                                $this->registrasi_model->upload_file_kk(),
                                                $this->registrasi_model->upload_file_ijazah(),
                                                $this->registrasi_model->upload_file_pas_foto()
                                               );
            
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('pendaftaran/registrasi');
            $this->load->view('templates/footer');
        }else{
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pendaftaran/registrasi');
        $this->load->view('templates/footer');
        }
        
    }
}
?>