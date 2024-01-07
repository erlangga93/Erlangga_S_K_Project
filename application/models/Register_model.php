<?php
class Register_model extends CI_Model
{
    private $table = 'tabel_admin';
    private $primary_key = 'id_admin';

    function __construct()
    {
        
        parent::__construct();
    }


    public function insert($data){
     $this->db->insert($this->table, $data);
    }



    
}
