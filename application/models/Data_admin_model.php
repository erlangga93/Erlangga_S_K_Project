<?php
class Data_admin_model extends CI_Model
{
    private $table = 'tbl_admin';
    private $primary_key = 'id_admin';

    function __construct()
    {
        parent::__construct();
    }

    //modal view all 
    //fungsi getall untuk ngambil semua data semua larinya ke arah controller di folder admin bagian Data_admin.php
        public function getAll(){
        return $this->db->get($this->table)->result();
    }
    //-------------------------------------------------------------------

    public function tampilan_admin(){
        $this->db->select('tbl_admin.id_admin, 
        tbl_admin.username, 
        tbl_admin.nik_admin,
        tbl_admin.nama_admin, 
        tbl_admin.alamat_admin, 
        tbl_admin.kontakt_admin,
        role_pekerja.nama_rolep as a, 
        tbl_admin.password_admin');
        $this->db->from('tbl_admin');
        $this->db->join('role_pekerja','role_pekerja.id_rolep = tbl_admin.id_rolep');
        $query = $this->db->get();
        return $query->result();
       
    }   

    public function getID($id){
        return $this->db->get_where($this->table, array($this->primary_key => $id)) ->result();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function edit($id, $data){
        $this->db->update($this->table, $data, array($this->primary_key => $id));
    }

    public function delete($id){
        $this->db->delete($this->table, array($this->primary_key => $id));
    }

    
}
