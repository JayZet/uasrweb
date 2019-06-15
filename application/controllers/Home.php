<?php
class Home extends CI_Controller{
    public function index(){

        $data['judul'] = "Sekolah";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}
?>