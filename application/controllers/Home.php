<?php
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login_mhs"));
        }
        $this->load->model('login_model');
    }
    public function index(){

        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
     
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar',$data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}
?>