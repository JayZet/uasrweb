<?php
class login_model extends CI_Model
{
    function login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $query = $this->db->get()->row_array();
        if($query) {
           return true;
        } else {
            return false;
        }
    }
    function login_dosen($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $query = $this->db->get()->row_array();
        if($query) {
           return true;
        } else {
            return false;
        }
    }
    function login_koor($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $query = $this->db->get()->row_array();
        if($query) {
           return true;
        } else {
            return false;
        }
    }
    function tampil($username)
    {
        return $this->db->get_where('mahasiswa', ["username" => $username])->row();
    }
    function tampil_dosen($niy)
    {
        return $this->db->get_where('dosen', ["niy" => $niy])->row();
    }
    function tampil_koor($id)
    {
        return $this->db->get_where('koor', ["id" => $id])->row();
    }
    
    function tampil_sesuaidosen($nama){
        $this->db->select('*');
        $this->db->from('judul_metopen');
        $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
        $this->db->where('dosen',$nama);
        return $this->db->get()->result_array();
}
    function tampil_sesuaidosenpps($nama){
        $this->db->select('*');
        $this->db->from('pps_seminar');
        $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
        $this->db->where('dosen_pps',$nama);
        return $this->db->get()->result_array();
}
       public function rules()
       {
         return[
           [ 'field' => 'keterangan',
             'label' => 'keterangan',
             'rules' => 'required',]
         ];
       }
       public function ruless()
       {
        return[
          [ 'field' => 'judul',
            'label' => 'judul',
            'rules' => 'required',],
          [ 'field' => 'niy',
            'label' => 'niy',
            'rules' => 'required',]
        ];
       }
       public function upload_gambar() {
           
        $config['upload_path'] = 'berkas/';
        $config['allowed_types'] = 'txt|doc|docx|pdf|xls|xlsx';
       // $config['max_size']  = '10000';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
        if($this->upload->do_upload('foto')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
    public function upload_ptta() {
      
      $config['upload_path'] = 'gambar/';
      $config['allowed_types'] = 'jpg|jpeg|png';
      // $config['max_size']  = '10000';
      $config['remove_space'] = TRUE;
        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
        if($this->upload->do_upload('foto')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
      }
      
      public function save_gambar($upload)
      {
        $this->load->library('upload');
        $data = array(
          'keterangan'=>$this->session->userdata('keterangan'),
          'foto' => $upload['file']['orig_name'],
      );
      
      // $this->db->set('gambar', $upload['file']['orig_name']);
      // $this->db->where('kode_unik', $kode);
      // $this->db->update('transaksi');
      
      $this->db->insert('berkas', $data);
    }
    public function upload_pps() {
        
     $config['upload_path'] = 'gambar/';
     $config['allowed_types'] = 'jpg|png|jpeg';
    // $config['max_size']  = '10000';
     $config['remove_space'] = TRUE;
     $this->load->library('upload', $config); 
     $this->upload->initialize($config);
     if($this->upload->do_upload('foto')){ 
       $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
       return $return;
     }else{
       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
       return $return;
     }
 }
    public function uppps($pps,$nim){
      $this->load->library('upload');
     $data = array(
       'judul'=>$this->session->userdata('judul'),
       'dosen_pps'=>$this->session->userdata('dosen_pps'),
       'bidang_minat'=>$this->session->userdata('bidang_minat'),
       'uts' => 0,
       'uas' => 0,
       'niy'=>$this->session->userdata('niy'),
       'nim_id' => $nim,
       'foto' => $pps['file']['orig_name'],
       'status_pps' => 'menunggu konfirmasi',
     );
  
     return $this->db->insert('pps_seminar',$data);
    }
    
    public function upptta($ptta,$nim){
      $this->load->library('upload');
     $data = array(
       'keterangan'=>$this->session->userdata('keterangan'),
       'nim_id' => $nim,
       'foto' => $ptta['file']['orig_name'],
       'status_ptta' => 'menunggu konfirmasi',
     );
     $this->db->insert('ptta_seminar',$data);
    }
}
?>