<?php
class Login_mhs extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->model('daftar_judul_model');
        $this->load->model('jadwal_seminar_model');

    }
    public function index(){
        $data['judul'] = "Login";
        $this->load->view('templates/header',$data);
        $this->load->view('Login/login_mhs');
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
             $checking = $this->login_model->login('mahasiswa', array('username' => $username),
             array('password' => $password));
            
             if ($checking) {

                $session_data = array(
                    'username' => $username,
                    'password' => $password,
                    'status' => "Login",
                );
                $this->session->set_userdata($session_data);

                redirect('Login_mhs/dashboard/'.$username);
            }else{
                $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle">
                </i> ERROR</b> username atau password salah!</div></div>';

                $judul['judul'] = "Login";
                $this->load->view('templates/header',$judul);
                $this->load->view('Login/login_mhs',$data);
                $this->load->view('templates/footer');
            }
            }else{
                $data['judul'] = "Login";
                $this->load->view('templates/header',$data);
                $this->load->view('Login/login_mhs');
                $this->load->view('templates/footer');
            }

    }
    public function Home($username){
 
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->tampil();
        $data['card'] = $this->daftar_judul_model->tampil_card($username);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }
    public function dashboard($username){
 
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->tampil();
        $data['card'] = $this->daftar_judul_model->tampil_card($username);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('dashboard',$data);
        $this->load->view('templates/footer');
    }
    public function pps_seminar($username){
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['seminarpps'] = $this->jadwal_seminar_model->tampilpps($username);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('pps_seminar',$data);
        $this->load->view('templates/footer');
    }
    public function pps($username){
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->tampil();
        $validation = $this->form_validation;
        $validation->set_rules($this->login_model->ruless());
        $dataku = [
            "judul" => $this->input->post('judul'),
            "dosen_pps" => $this->input->post('dosen_pps'),
            "bidang_minat" => $this->input->post('bidang_minat'),
            "niy" => $this->input->post('niy'),
        ];

        $this->session->set_userdata($dataku);
     
        if($validation->run()){
            $this->login_model->uppps($this->login_model->upload_pps(),$username);
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            redirect('Login_mhs/pps/'.$username);
        }
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('pps',$data);
            $this->load->view('templates/footer');
        
    }
    public function ptta($username){
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->tampil();
        $validation = $this->form_validation;
        $validation->set_rules($this->login_model->rules());
        $dataku = [
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->session->set_userdata($dataku);
        if($validation->run()){
            $this->login_model->upptta($this->login_model->upload_ptta(),$username);
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            redirect('Login_mhs/ptta/'.$username);
        }
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('ptta',$data);
            $this->load->view('templates/footer');
    }
    public function jadwal($username){
 
        $data['judul'] = "Metopen";
        $data['seminar'] = $this->jadwal_seminar_model->tampilbynim($username);
        
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->tampil();
        $data['nim'] = $this->daftar_judul_model->tampilbynim($username);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('jadwal',$data);
        $this->load->view('templates/footer');
    }
    function download(){
        $this->load->helper('download');
        $data = file_get_contents(APPPATH . 'berkas/'.$this->uri->segment(3)); // Read the file's contents
        $name = $this->uri->segment(3);
        force_download($name, $data);
    }
    public function berkas($username){
 
        $data['judul'] = "Metopen";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        $data['data'] = $this->daftar_judul_model->berkas();
        $data['card'] = $this->daftar_judul_model->tampil_card($username);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('berkas',$data);
        $this->load->view('templates/footer');
    }

    public function Registrasi($username){
        
        $data['judul'] = "Pendaftaran Siswa Baru";
        $data['mahasiswa'] = $this->login_model->tampil($username);
        /* form validasi Registrasi identitas siswa */
        $this->form_validation->set_rules('bidang_minat','Bidang Minat','required');
        $this->form_validation->set_rules('dosen','Dosen','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('niy','niy','required');

       
        //set message form validation
        $this->form_validation->set_message('required', 
        '<div class="alert alert-danger" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle">
        </i> {field}</b> harus diisi</div></div>');

        if($this->form_validation->run() == TRUE){
            $data['data'] = $this->daftar_judul_model->tambah($username);
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('pendaftaran/registrasi',$data);
            $this->load->view('templates/footer',$data);
        }else{
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('pendaftaran/registrasi',$data);
        $this->load->view('templates/footer',$data);
        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login_mhs'));
    }
}
?>