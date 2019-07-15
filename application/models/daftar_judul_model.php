<?php
class daftar_judul_model extends CI_Model{
  public function rules()
  {
    return[
      [ 'field' => 'keterangan',
        'label' => 'keterangan',
        'rules' => 'required',]
    ];
  }

 function tambah($username){
 
  $insert_judul = array(
    'bidang_minat' => $this->input->post("bidang_minat"),
    'nim' => $username,
    'dosen' => $this->input->post("dosen"),
    'judul' => $this->input->post("judul"),
    'niy' => $this->input->post("niy"),
    'uts' => 0,
    'uas' => 0,
    'status'=> "menunggu konfirmasi"
    );

    $insert = $this->db->insert("judul_metopen", $insert_judul);
    return true;
 }

 function tampil(){
   $this->db->select('*');
   $this->db->from('judul_metopen');
   $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
   $this->db->order_by('judul_metopen.id','DESC');
   return $this->db->get()->result_array();
 }
 function tampilpps(){
   $this->db->select('*');
   $this->db->from('pps_seminar');
   $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
   $this->db->order_by('pps_seminar.id','DESC');
   return $this->db->get()->result_array();
 }
 function tampilbynim($nim){
   $this->db->select('*');
   $this->db->from('judul_metopen');
   $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
   $this->db->where('judul_metopen.nim',$nim);
   return $this->db->get()->result_array();
 }
 function tampilseminar(){
   $this->db->select('*');
   $this->db->from('judul_metopen');
   $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
   $this->db->where('judul_metopen.status','siap seminar');
   $this->db->order_by('judul_metopen.id','DESC');
   return $this->db->get()->result_array();
 }
 function tampilseminarpps(){
   $this->db->select('*');
   $this->db->from('pps_seminar');
   $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
   $this->db->where('pps_seminar.status_pps','siap seminar');
   $this->db->order_by('pps_seminar.id','DESC');
   return $this->db->get()->result_array();
 }
 function tampilseminarbynim($nim){
   $this->db->select('*');
   $this->db->from('judul_metopen');
   $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
   $this->db->where('judul_metopen.status','siap seminar');
   $this->db->where('judul_metopen.nim',$nim);
   $this->db->order_by('judul_metopen.id','DESC');
   return $this->db->get()->result_array();
 }
 function tampilseminarbynimpps($nim){
   $this->db->select('*');
   $this->db->from('pps_seminar');
   $this->db->join('mahasiswa','pps_seminar.nim_id = mahasiswa.username');
   $this->db->where('pps_seminar.status_pps','siap seminar');
   $this->db->where('pps_seminar.nim_id',$nim);
   $this->db->order_by('pps_seminar.id','DESC');
   return $this->db->get()->result_array();
 }
 function tambah_jadwal($nim){
      $insert = array(
        'dosen_penguji' => $this->input->post('dosen_penguji'),
        'tempat' => $this->input->post('tempat'),
        'tanggal' => $this->input->post('tanggal'),
        'nim' => $nim
      );
      return $this->db->insert("seminar",$insert);
 }
 function tampil_card($nim){
   $this->db->select('*');
   $this->db->from('judul_metopen');
   $this->db->join('mahasiswa','judul_metopen.nim = mahasiswa.username');
   $this->db->where('nim',$nim);
   $this->db->order_by('judul_metopen.id','DESC');
   return $this->db->get()->result_array();
 }
 function ubahstatussetuju($niy,$nim){
  $this->db->set('status', 'judul diterima');
  $this->db->where('niy',$niy);
  $this->db->where('nim',$nim);
  return $this->db->update('judul_metopen');
 }
 function ubahstatussetujupps($niy,$nim){
  $this->db->set('status_pps', 'judul diterima');
  $this->db->where('niy',$niy);
  $this->db->where('nim_id',$nim);
  return $this->db->update('pps_seminar');
 }
 function ubahstatusseminar($niy,$nim){
  $this->db->set('status', 'siap seminar');
  $this->db->where('niy',$niy);
  $this->db->where('nim',$nim);
  return $this->db->update('judul_metopen');
 }
 function ubahstatusseminarpps($niy,$nim){
  $this->db->set('status_pps', 'siap seminar');
  $this->db->where('niy',$niy);
  $this->db->where('nim_id',$nim);
  return $this->db->update('pps_seminar');
 }
 function getbynim($nim){
  return $this->db->get_where('judul_metopen', ["nim" => $nim])->row();
 }
 function getbynimpps($nim){
  return $this->db->get_where('pps_seminar', ["nim_id" => $nim])->row();
 }
 function ubahuts($niy,$nim){
  $post = $this->input->post();
  $this->uts = $post["uts"];
  $this->db->set('uts', $this->uts);
  $this->db->where('niy',$niy);
  $this->db->where('nim',$nim);
  return $this->db->update('judul_metopen');
 }
 function ubahuas($niy,$nim){
  $post = $this->input->post();
  $this->uas = $post["uas"];
  $this->db->set('uas', $this->uas);
  $this->db->where('niy',$niy);
  $this->db->where('nim',$nim);
  return $this->db->update('judul_metopen');
 }
 function ubahutspps($niy,$nim){
  $post = $this->input->post();
  $this->uts = $post["uts"];
  $this->db->set('uts', $this->uts);
  $this->db->where('niy',$niy);
  $this->db->where('nim_id',$nim);
  return $this->db->update('pps_seminar');
 }
 function ubahuaspps($niy,$nim){
  $post = $this->input->post();
  $this->uas = $post["uas"];
  $this->db->set('uas', $this->uas);
  $this->db->where('niy',$niy);
  $this->db->where('nim_id',$nim);
  return $this->db->update('pps_seminar');
 }
 public function hapus($niy,$nim){
  return $this->db->delete('judul_metopen',['nim' =>$nim],['niy'=>$niy]);
}
 public function hapuspps($niy,$nim){
  return $this->db->delete('pps_seminar',['nim_id' =>$nim],['niy'=>$niy]);
}
public function berkas(){
  $this->db->select('*');
  $this->db->from('berkas');
  return $this->db->get()->result();
}

}
?>