<?php
class Pembayaran extends CI_Controller{


    public function index(){
        
        $data['judul'] = "Pembayaran";

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pembayaran/pembayaran');
        $this->load->view('templates/footer');
    }
}
?>