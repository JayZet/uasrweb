<?php
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');

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
             //checking data via model
             $checking = $this->login_model->login('user', array('username' => $username),
             array('password' => $password));
            
             if ($checking) {

                $session_data = array(
                    'username' => $username,
                    'password' => $password,
                    'status' => "Login",
                );
                $this->session->set_userdata($session_data);

                redirect('Home');
            }else{
                $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle">
                </i> ERROR</b> username atau password salah!</div></div>';

                $judul['judul'] = "Login";
                $this->load->view('templates/header',$judul);
                $this->load->view('Login/login',$data);
                $this->load->view('templates/footer');
            }
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
       $this->form_validation->set_rules('nama_awal','First Name','required');
       $this->form_validation->set_rules('nama_akhir','Last Name','required');
       $this->form_validation->set_rules('email','Email','required|valid_email');
       $this->form_validation->set_rules('username','Username','required|is_unique[user.username]');
       $this->form_validation->set_rules('password','Password','required');
       $this->form_validation->set_rules('confirm_pass','Password','required|matches[password]');

       //set message form validation
       $this->form_validation->set_message('required', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> {field}</b> harus diisi</div></div>');
       $this->form_validation->set_message('matches', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> Password</b> tidak sama</div></div>');
       $this->form_validation->set_message('is_unique', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> {field}</b> sudah digunakan</div></div>');

        if($this->form_validation->run() == TRUE){
            if( $query =  $this->login_model->register() )  {
                
                $data['judul'] = "Login";
                $this->load->view('templates/header',$data);
                $this->load->view('Login/login');
                $this->load->view('templates/footer');
             }
             else {
                $data['judul'] = "Pendaftaran Akun";
                $this->load->view('templates/header',$data);
                $this->load->view('Login/signup');
                $this->load->view('templates/footer');
             }
        }else{
            $data['judul'] = "Pendaftaran Akun";
            $this->load->view('templates/header',$data);
            $this->load->view('Login/signup');
            $this->load->view('templates/footer');
        }

    }
}
?>