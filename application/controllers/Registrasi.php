<?php
class Registrasi extends CI_Controller{


    public function index(){
        
        $data['judul'] = "Pendaftaran Siswa Baru";

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('registrasi');
        $this->load->view('templates/footer');
    }
}
?>