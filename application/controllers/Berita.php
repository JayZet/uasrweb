<?php
class Berita extends CI_Controller{
    public function index(){

        $data['judul'] = " Berita Sekolah";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('Berita/berita1');
        $this->load->view('templates/footer');
    }
}
?>