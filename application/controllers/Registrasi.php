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