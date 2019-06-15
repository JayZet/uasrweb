<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index(){
 
        $data['judul'] = "Login";
        $this->load->view('templates/header',$data);
        $this->load->view('Login/login');
        $this->load->view('templates/footer');
    }
    public function aksi_login(){
       /* form validasi login */
       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('password','Password','required');

       //set message form validation
       $this->form_validation->set_message('required', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> {field}</b> harus diisi</div></div>');

           if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => $password
            );
            $data['judul'] = "Login";
            $this->load->view('templates/header',$data);
            $this->load->view('Login/login');
            $this->load->view('templates/footer');
            }else{
                $data['judul'] = "Login";
                $this->load->view('templates/header',$data);
                $this->load->view('Login/login');
                $this->load->view('templates/footer');
            }

    }
    public function registrasi(){
        $data['judul'] = "Pendaftaran Akun";
        $this->load->view('templates/header',$data);
        $this->load->view('Login/signup');
        $this->load->view('templates/footer');
    }
    public function aksi_registrasi(){
       /* form validasi Registrasi */
       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('password','Password','required');

    }
}
?>