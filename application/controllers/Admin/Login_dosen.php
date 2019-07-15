<?php
class Login_dosen extends CI_Controller{
    
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
        $this->load->view('Admin/login/login_dosen');
        $this->load->view('templates/footer');
    }
    public function aksi_login(){
       /* form validasi login */
       $this->form_validation->set_rules('niy','Niy','required');
       $this->form_validation->set_rules('password','Password','required');

       //set message form validation
       $this->form_validation->set_message('required', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> {field}</b> harus diisi</div></div>');

           if ($this->form_validation->run() == TRUE) {
                $niy = $this->input->post('niy');
                $password = $this->input->post('password');
                $where = array(
                    'niy' => $niy,
                    'password' => $password
                );
             //checking data via model
             $checking = $this->login_model->login_dosen('dosen', array('niy' => $niy),
             array('password' => $password));
            
             if ($checking) {

                $session_data = array(
                    'niy' => $niy,
                    'password' => $password,
                    'status' => "Login",
                );
                $this->session->set_userdata($session_data);

                redirect('Admin/Login_dosen/Home/'.$niy);
            }else{
                $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle">
                </i> ERROR</b> niy atau password salah!</div></div>';

                $judul['judul'] = "Login";
                $this->load->view('templates/header',$judul);
                $this->load->view('Admin/login/login_dosen',$data);
                $this->load->view('templates/footer');
            }
            }else{
                $data['judul'] = "Login";
                $this->load->view('templates/header',$data);
                $this->load->view('Admin/login/login_dosen');
                $this->load->view('templates/footer');
            }

    }
    public function Home($niy){
 
        $data['judul'] = "Dosen";
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['pps'] = $this->jadwal_seminar_model->tampilsemuapps();
        $data['ptta'] = $this->jadwal_seminar_model->tampilptta();
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/index',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function tampil_jadwal($niy){
        
        $data['judul'] = "Metopen";
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['jadwal'] = $this->jadwal_seminar_model->tampilbydosen_penguji($niy);
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/seminar',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function pembimbing($niy){
        $data['judul'] = "Metopen";
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $dosen =  $this->db->get_where('dosen', ["niy" => $niy])->result_array();
        foreach($dosen as $d){
            $nama = $d['nama'];
            
        }
        $data['data'] = $this->login_model->tampil_sesuaidosen($nama);
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/daftar_pembimbing',$data);
        $this->load->view('Admin/templates/footer');

    }
    public function pembimbingpps($niy){
        $data['judul'] = "Metopen";
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $dosen =  $this->db->get_where('dosen', ["niy" => $niy])->result_array();
        foreach($dosen as $d){
            $nama = $d['nama'];
            
        }
        $data['data'] = $this->login_model->tampil_sesuaidosenpps($nama);
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/daftar_pembimbingpps',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function setuju($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->ubahstatussetuju($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbing/'.$niy);
        }
    }
    public function setujupps($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->ubahstatussetujupps($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbingpps/'.$niy);
        }
    }
    public function seminar($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->ubahstatusseminar($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbing/'.$niy);
        }
    }
    public function seminarpps($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->ubahstatusseminarpps($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbingpps/'.$niy);
        }
    }
    public function hapus($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->hapus($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbing/'.$niy);
        }
    }
    public function hapuspps($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if (!isset($nim)) show_404();
        
        if($this->daftar_judul_model->hapuspps($niy,$nim))
        {
            redirect('Admin/Login_dosen/pembimbingpps/'.$niy);
        }
    }
    public function uts($niy){
        $data['judul'] = 'Edit Nilai UTS';
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['data'] = $this->daftar_judul_model->tampil();
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/nilai_uts',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function uas($niy){
        $data['judul'] = 'Edit Nilai UTS';
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['data'] = $this->daftar_judul_model->tampil();
        $data['card'] = $this->jadwal_seminar_model->tampilptta();
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/nilai_uas',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function utspps($niy){
        $data['judul'] = 'Edit Nilai UTS';
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['data'] = $this->daftar_judul_model->tampilpps();
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/nilai_utspps',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function uaspps($niy){
        $data['judul'] = 'Edit Nilai UTS';
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        $data['data'] = $this->daftar_judul_model->tampilpps();
        $this->load->view('Admin/templates/header',$data);
        $this->load->view('Admin/templates/sidebar',$data);
        $this->load->view('Admin/templates/topbar',$data);
        $this->load->view('Admin/nilai_uaspps',$data);
        $this->load->view('Admin/templates/footer');
    }
    public function aksiuts($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if(!isset($nim)) redirect('Admin/Login_dosen/uts/'.$niy);

        $uts = $this->daftar_judul_model;
    
        if($this->daftar_judul_model->ubahuts($niy,$nim)){

            redirect(site_url('Admin/Login_dosen/uts/'.$niy));
        }
  
        $data["uts"] = $uts->getbynim($nim);
     
        if(!$data["uts"]) show_404();

        redirect(site_url('Admin/Login_dosen/uts/'.$niy));
    }
    public function aksiutspps($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if(!isset($nim)) redirect('Admin/Login_dosen/utspps/'.$niy);

        $uts = $this->daftar_judul_model;
    
        if($this->daftar_judul_model->ubahutspps($niy,$nim)){

            redirect(site_url('Admin/Login_dosen/utspps/'.$niy));
        }
  
        $data["uts"] = $uts->getbynimpps($nim);
     
        if(!$data["uts"]) show_404();

        redirect(site_url('Admin/Login_dosen/utspps/'.$niy));
    }
    public function aksiuas($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if(!isset($nim)) redirect('Admin/Login_dosen/uas/'.$niy);

        $uas = $this->daftar_judul_model;
    
        if($this->daftar_judul_model->ubahuas($niy,$nim)){

            redirect(site_url('Admin/Login_dosen/uas/'.$niy));
        }
  
        $data["uas"] = $uas->getbynim($nim);
     
        if(!$data["uas"]) show_404();

        redirect(site_url('Admin/Login_dosen/uas/'.$niy));
    }
    public function aksiuaspps($niy,$nim = NULL){
        $data['dosen'] = $this->login_model->tampil_dosen($niy);
        if(!isset($nim)) redirect('Admin/Login_dosen/uaspps/'.$niy);

        $uas = $this->daftar_judul_model;
    
        if($this->daftar_judul_model->ubahuaspps($niy,$nim)){

            redirect(site_url('Admin/Login_dosen/uaspps/'.$niy));
        }
  
        $data["uas"] = $uas->getbynimpps($nim);
     
        if(!$data["uas"]) show_404();

        redirect(site_url('Admin/Login_dosen/uaspps/'.$niy));
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Admin/Login_dosen'));
    }
}
?>