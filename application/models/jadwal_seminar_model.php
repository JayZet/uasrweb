<?php
class Jadwal_seminar_model extends CI_Model{
    function tampilsemua(){
        $query = "SELECT * FROM `seminar` join judul_metopen on seminar.nim = judul_metopen.nim JOIN mahasiswa on judul_metopen.nim = mahasiswa.username";
        return $this->db->query($query)->result_array();
        
    }
    function tampilbynim($nim){
        $this->db->select('*');
        $this->db->from('seminar');
        $this->db->where('nim',$nim);
        return $this->db->get()->result_array();
    }
    function tampilbydosen_penguji($niy){
        $query = "SELECT * FROM `seminar` join judul_metopen on seminar.nim = judul_metopen.nim 
        JOIN mahasiswa on judul_metopen.nim = mahasiswa.username where judul_metopen.niy = '$niy'";
        return $this->db->query($query)->result_array();
    }
    function tampilpps($nim){
        $this->db->select('*');
        $this->db->from('pps_seminar');
        $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
        $this->db->where('pps_seminar.nim_id',$nim);
        $this->db->order_by('pps_seminar.id','DESC');
        return $this->db->get()->result_array();
      }
    function tampilptta(){
        $this->db->select('*');
        $this->db->from('ptta_seminar');
        $this->db->join('judul_metopen','ptta_seminar.nim_id = judul_metopen.nim');
        $this->db->join('mahasiswa','mahasiswa.username = judul_metopen.nim');
        $this->db->order_by('ptta_seminar.id','DESC');
        return $this->db->get()->result_array();
    }
    function tampilsemuapps(){
        $this->db->select('*');
        $this->db->from('pps_seminar');
        $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
        $this->db->order_by('pps_seminar.id','DESC');
        return $this->db->get()->result_array();
    }
    function ubahstatuspps($nim){
        $this->db->set('status_pps','terkonfirmasi');
        $this->db->where('nim_id',$nim);
        return $this->db->update('pps_seminar');
    }
    function ubahstatusptta($nim){
        $this->db->set('status_ptta','terkonfirmasi');
        $this->db->where('nim_id',$nim);
        return $this->db->update('ptta_seminar');
    }
}
?>