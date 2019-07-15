<?php
class Login_koor extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $this->load->model('daftar_judul_model');
        $this->load->model('jadwal_seminar_model');
        $this->load->helper(array('form', 'url'));

    }
    public function index(){
        $data['judul'] = "Login";
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/login_koor');
        $this->load->view('Koor/templates/footer');
    }
    public function aksi_upload(){
        $data['judul'] = "Upload Berkas";
        $validation = $this->form_validation;
        $validation->set_rules($this->login_model->rules());
        
        $dataku = [
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->session->set_userdata($dataku);
        
        if($validation->run()){
            $this->login_model->save_gambar($this->login_model->upload_gambar());
         
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            redirect('Koor/Login_koor/aksi_upload');
        }
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar');
        $this->load->view('Koor/templates/topbar');
        $this->load->view('Koor/upload');
        $this->load->view('Koor/templates/footer');
    

}

    public function Home(){
        $data['judul'] = "Admin Koordinator";
   
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar',$data);
        $this->load->view('Koor/templates/topbar',$data);
        $this->load->view('Koor/dashboard',$data);
        $this->load->view('Koor/templates/footer');
    }

    public function jadwal($nim){
        $data['judul'] = "Admin Koordinator";
        $data['seminar'] = $this->daftar_judul_model->tampilseminarbynim($nim);
        $data['nim'] = $this->daftar_judul_model->getbynim($nim);
         /* form validasi Registrasi identitas siswa */
         $this->form_validation->set_rules('dosen_penguji','Dosen Penguji','required');
         $this->form_validation->set_rules('tempat','Tempat','required');
         $this->form_validation->set_rules('tanggal','Tanggal','required');
     
         //set message form validation
         $this->form_validation->set_message('required', 
         '<div class="alert alert-danger" style="margin-top: 3px">
         <div class="header"><b><i class="fa fa-exclamation-circle">
         </i> {field}</b> harus diisi</div></div>');
         if($this->form_validation->run() == TRUE){
            $data['data'] = $this->daftar_judul_model->tambah_jadwal($nim);
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            $this->load->view('Koor/templates/header',$data);
            $this->load->view('Koor/templates/sidebar',$data);
            $this->load->view('Koor/templates/topbar',$data);
            $this->load->view('Koor/jadwal_seminar',$data);
            $this->load->view('Koor/templates/footer');
        }else{
            $this->load->view('Koor/templates/header',$data);
            $this->load->view('Koor/templates/sidebar',$data);
            $this->load->view('Koor/templates/topbar',$data);
            $this->load->view('Koor/jadwal_seminar',$data);
            $this->load->view('Koor/templates/footer');

         }
    }
    public function jadwalpps($nim){
        $data['judul'] = "Admin Koordinator";
        $data['seminarpps'] = $this->daftar_judul_model->tampilseminarbynimpps($nim);
        $data['nimpps'] = $this->daftar_judul_model->getbynimpps($nim);
         /* form validasi Registrasi identitas siswa */
         $this->form_validation->set_rules('dosen_penguji','Dosen Penguji','required');
         $this->form_validation->set_rules('tempat','Tempat','required');
         $this->form_validation->set_rules('tanggal','Tanggal','required');
     
         //set message form validation
         $this->form_validation->set_message('required', 
         '<div class="alert alert-danger" style="margin-top: 3px">
         <div class="header"><b><i class="fa fa-exclamation-circle">
         </i> {field}</b> harus diisi</div></div>');
         if($this->form_validation->run() == TRUE){
            $data['data'] = $this->daftar_judul_model->tambah_jadwal($nim);
            $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">Berhasil Disimpan</div>');
            $this->load->view('Koor/templates/header',$data);
            $this->load->view('Koor/templates/sidebar',$data);
            $this->load->view('Koor/templates/topbar',$data);
            $this->load->view('Koor/jadwal_seminarpps',$data);
            $this->load->view('Koor/templates/footer');
        }else{
            $this->load->view('Koor/templates/header',$data);
            $this->load->view('Koor/templates/sidebar',$data);
            $this->load->view('Koor/templates/topbar',$data);
            $this->load->view('Koor/jadwal_seminarpps',$data);
            $this->load->view('Koor/templates/footer');

         }
    }
    public function seminar(){
        $data['judul'] = "Admin Koordinator";
        $data['seminar'] = $this->daftar_judul_model->tampilseminar();
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar',$data);
        $this->load->view('Koor/templates/topbar',$data);
        $this->load->view('Koor/seminar',$data);
        $this->load->view('Koor/templates/footer');
    }
    public function seminarpps(){
        $data['judul'] = "Admin Koordinator";
        $data['seminarpps'] = $this->daftar_judul_model->tampilseminarpps();
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar',$data);
        $this->load->view('Koor/templates/topbar',$data);
        $this->load->view('Koor/seminarpps',$data);
        $this->load->view('Koor/templates/footer');
    }
    public function tampil_jadwal(){
        $data['judul'] = "Admin Koordinator";
        $data['seminar'] = $this->jadwal_seminar_model->tampilsemua();
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar',$data);
        $this->load->view('Koor/templates/topbar',$data);
        $this->load->view('Koor/tampil_jadwal',$data);
        $this->load->view('Koor/templates/footer');
    }
    public function ubahpps($nim){
        $data['nim'] = $this->daftar_judul_model->getbynim($nim);
        $this->jadwal_seminar_model->ubahstatuspps($nim);
        redirect('Koor/Login_koor/pps');
    }
    public function ubahptta($nim){
        $data['nim'] = $this->daftar_judul_model->getbynim($nim);
        $this->jadwal_seminar_model->ubahstatusptta($nim);
        redirect('Koor/Login_koor/ptta');
    }
    public function ptta(){
        $data['judul'] = "Admin Koordinator";
        $data['seminar'] = $this->jadwal_seminar_model->tampilptta();
        $this->load->view('Koor/templates/header',$data);
        $this->load->view('Koor/templates/sidebar',$data);
        $this->load->view('Koor/templates/topbar',$data);
        $this->load->view('Koor/ptta',$data);
        $this->load->view('Koor/templates/footer');
    }
    public function aksi_login(){
       /* form validasi login */
       $this->form_validation->set_rules('id','id','required');
       $this->form_validation->set_rules('password','Password','required');

       //set message form validation
       $this->form_validation->set_message('required', 
       '<div class="alert alert-danger" style="margin-top: 3px">
           <div class="header"><b><i class="fa fa-exclamation-circle">
           </i> {field}</b> harus diisi</div></div>');

           if ($this->form_validation->run() == TRUE) {
                $id = $this->input->post('id');
                $password = $this->input->post('password');
                $where = array(
                    'id' => $idy,
                    'password' => $password
                );
             //checking data via model
             $checking = $this->login_model->login_koor('koor', array('id' => $id),
             array('password' => $password));
            
             if ($checking) {

                $session_data = array(
                    'id' => $id,
                    'password' => $password,
                    'status' => "Login",
                );
                $this->session->set_userdata($session_data);

                redirect('Koor/Login_koor/Home/'.$id);
            }else{
                $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle">
                </i> ERROR</b> niy atau password salah!</div></div>';

                $judul['judul'] = "Login";
                $this->load->view('Koor/templates/header',$judul);
                $this->load->view('Koor/login_koor',$data);
                $this->load->view('Koor/templates/footer');
            }
            }else{
                $data['judul'] = "Login";
                $this->load->view('Koor/templates/header',$data);
                $this->load->view('Koor/login_koor');
                $this->load->view('Koor/templates/footer');
            }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Koor/Login_koor'));
    }
}
?>