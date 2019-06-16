<?php
class login_model extends CI_Model
{
    function login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $query = $this->db->get()->row_array();
        // var_dump($field2); die;
        if($query) {
            if(password_verify($field2['password'], $query['password'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    function register()  {
        $insert_data = array(        
            'nama_awal' => $this->input->post("nama_awal"),
            'nama_akhir' => $this->input->post("nama_akhir"),    
            'username' => $this->input->post("username"),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'created_at' => date('Y-m-d',time()),
            'updated_at' => date('Y-m-d',time()),
            'email'    => $this->input->post("email")                 
        );

        $insert = $this->db->insert("user", $insert_data);

        return true;
    }
}
?>