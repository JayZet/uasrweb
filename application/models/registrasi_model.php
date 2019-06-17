<?php
class registrasi_model extends CI_Model{
    public function upload_file_akta() {
        $config['upload_path'] = 'file/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('path_akta')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
    public function upload_file_kk() {
        $config['upload_path'] = 'file/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('path_kk')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
    public function upload_file_ijazah() {
        $config['upload_path'] = 'file/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('path_ijazah')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
    public function upload_file_pas_foto() {
        $config['upload_path'] = 'file/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); 
        if($this->upload->do_upload('path_pas_foto')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
      }
      public function registrasi($upload_akta, $upload_kk, $upload_ijazah, $upload_pas_foto){
        $insert_alamat_ibu = array(
            'rt' => $this->input->post("rt_ibu"),
            'rw' => $this->input->post("rw_ibu"),
            'dusun' => $this->input->post("dusun_ibu"),
            'desa' => $this->input->post("desa_ibu"),
            'kecamatan' => $this->input->post("kecamatan_ibu"),
            'kabupaten' => $this->input->post("kabupaten_ibu"),
            'lainnya' => $this->input->post("lainnya_ibu")
          );
          $insert = $this->db->insert("alamat", $insert_alamat_ibu);
          
          $insert_alamat_ayah = array(
              'rt' => $this->input->post("rt_ayah"),
              'rw' => $this->input->post("rw_ayah"),
              'dusun' => $this->input->post("dusun_ayah"),
              'desa' => $this->input->post("desa_ayah"),
              'kecamatan' => $this->input->post("kecamatan_ayah"),
              'kabupaten' => $this->input->post("kabupaten_ayah"),
              'lainnya' => $this->input->post("lainnya_ayah")
          );
          $insert = $this->db->insert("alamat", $insert_alamat_ayah);

        $this->db->select('*');
        $this->db->from('alamat');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $alamat_ibu = $this->db->get()->row_array();

        $this->db->select('*');
        $this->db->from('alamat');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $alamat_ayah = $this->db->get()->row_array();
        
        $insert_orangtua = array(
          'nama_ibu' => $this->input->post("nama_ibu"),
          'pendidikan_terakhir_ibu' => $this->input->post("pendidikan_terakhir_ibu"),
          'tempat_lahir_ibu' => $this->input->post("tempat_lahir_ibu"),
          'tanggal_lahir_ibu' => $this->input->post("tanggal_lahir_ibu"),
          'alamat_id_ibu' => $alamat_ibu['id'],
          'pekerjaan_ibu' => $this->input->post("pekerjaan_ibu"),

          'nama_ayah' => $this->input->post("nama_ayah"),
          'pendidikan_terakhir_ayah' => $this->input->post("pendidikan_terakhir_ayah"),
          'tempat_lahir_ayah' => $this->input->post("tempat_lahir_ayah"),
          'tanggal_lahir_ayah' => $this->input->post("tanggal_lahir_ayah"),
          'alamat_id_ayah' => $alamat_ayah['id'],
          'pekerjaan_ayah' => $this->input->post("pekerjaan_ayah")
        );
        $insert = $this->db->insert("orangtua", $insert_orangtua);
        
        $insert_alamat_murid = array(
            'rt' => $this->input->post("rt_siswa"),
            'rw' => $this->input->post("rw_siswa"),
            'dusun' => $this->input->post("dusun_siswa"),
            'desa' => $this->input->post("desa_siswa"),
            'kecamatan' => $this->input->post("kecamatan_siswa"),
            'kabupaten' => $this->input->post("kabupaten_siswa"),
            'lainnya' => $this->input->post("lainnya_siswa")
        );
        $insert = $this->db->insert("alamat", $insert_alamat_murid);

        $this->db->select('*');
        $this->db->from('alamat');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $alamat_murid = $this->db->get()->row_array();
        
        $this->db->select('*');
        $this->db->from('persyaratan');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $persyaratan_murid = $this->db->get()->row_array();
        
        $this->db->select('*');
        $this->db->from('orangtua');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $orangtua_murid = $this->db->get()->row_array();

        $this->db->select('*');
        $this->db->from('wali');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $wali_murid = $this->db->get()->row_array();
     
        $insert_murid = array(
            'nama_lengkap' => $this->input->post("nama_lengkap"),
            'jenis_kelamin' => $this->input->post("jenis_kelamin"),
            'tempat_lahir' => $this->input->post("tempat_lahir"),
            'tanggal_lahir' => $this->input->post("tanggal_lahir"),
            'alamat_id' => $alamat_murid['id'],
            'agama' =>$this->input->post("agama"),
            'no_hp' =>$this->input->post("no_hp"),
            'asal_sekolah' =>$this->input->post("asal_sekolah"),
            'tinggal_bersama' =>$this->input->post("tinggal_bersama"),
            'jumlah_saudara' =>$this->input->post("jumlah_saudara"),
            'orangtua_id' =>$orangtua_murid['id'],
            'wali_id' =>$wali_murid['id'],
            'persyaratan_id' =>$persyaratan_murid['id']
        );
        
        $insert = $this->db->insert("murid", $insert_murid);

        $insert_alamat_wali = array(
            'rt' => $this->input->post("rt_wali"),
            'rw' => $this->input->post("rw_wali"),
            'dusun' => $this->input->post("dusun_wali"),
            'desa' => $this->input->post("desa_wali"),
            'kecamatan' => $this->input->post("kecamatan_wali"),
            'kabupaten' => $this->input->post("kabupaten_wali"),
            'lainnya' => $this->input->post("lainnya_wali")
        );
        $insert = $this->db->insert("alamat", $insert_alamat_wali);

        $this->db->select('*');
        $this->db->from('alamat');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $alamat_wali = $this->db->get()->row_array();

        $insert_wali = array(
            'nama_wali' => $this->input->post("nama_wali"),
            'pendidikan_terakhir_wali' => $this->input->post("pendidikan_terakhir_wali"),
            'tempat_lahir_wali' => $this->input->post("tempat_lahir_wali"),
            'tanggal_lahir_wali' => $this->input->post("tanggal_lahir_wali"),
            'alamat_id_wali' => $alamat_wali['id'],
            'pekerjaan_wali' => $this->input->post("pekerjaan_wali")
        );
        $insert = $this->db->insert("wali", $insert_wali);
        
        $insert_persyaratan = array(
            'path_akta' => $upload_akta['file']['orig_name'],
            'path_kk' => $upload_kk['file']['orig_name'],
            'path_ijazah' => $upload_ijazah['file']['orig_name'],
            'path_pas_foto' => $upload_pas_foto['file']['orig_name']
        );
        $insert = $this->db->insert("persyaratan", $insert_persyaratan);
        var_dump($insert_murid,$insert_persyaratan);
        die;
        return true;
    }
}
?>