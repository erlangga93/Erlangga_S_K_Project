<?php
class Login_model extends CI_Model {
    function _construct(){
        parent::_construct();
    }

    //$username dan $password untuk controller
    function proseslogin($username, $password){
        $this->db->select('username, password_admin');
        $this->db->from('tbl_admin');
        $this->db->where('username', $username);
        $this->db->where('password_admin', $password);

        $query=$this->db->get();

        if($query->num_rows()==1){
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }
}