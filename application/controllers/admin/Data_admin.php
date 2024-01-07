<?php

class Data_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_admin_model');
        $this->load->model('Data_rule_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            
            ['field' => 'username', 'label' => 'username', 'rules' => 'required'],
            ['field' => 'nik_admin', 'label' => 'nik_admin', 'rules' => 'required'],
            ['field' => 'nama_admin', 'label' => 'nama_admin', 'rules' => 'required'],
            ['field' => 'alamat_admin', 'label' => 'alamat_admin', 'rules' => 'required'],
            ['field' => 'kontakt_admin', 'label' => 'kontakt_admin', 'rules' => 'required'],
            ['field' => 'password_admin', 'label' => 'password_admin', 'rules' => 'required']
            
        ];
    }

    

    public function index()
    {
        //getAll( diambil dari model yang digunakan untuk view)
        $data['data_admin'] = $this->Data_admin_model->tampilan_admin();
        $data['contents'] = 'admin/data_admin/data_admin_view';
        $this->load->view('admin/layout/template', $data);
    }

    private function listData_rule(){
        $data_ruleadmin = $this->Data_rule_model->getAll();
        foreach ($data_ruleadmin as $a) {
            $list_ruleadmin[$a->id_rolep] = $a->nama_rolep;
            // $list_ruleadmin[$a->id dari tbl admin] = $a->nama dari tbl role;
        }
        return $list_ruleadmin;
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['id_rolep']= $this->listData_rule();
            $data['contents'] = 'admin/data_admin/data_admin_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            
            $data['username'] = $this->input->post('username');
            $data['nik_admin'] = $this->input->post('nik_admin');
            $data['nama_admin'] = $this->input->post('nama_admin');
            $data['alamat_admin'] = $this->input->post('alamat_admin');
            $data['kontakt_admin'] = $this->input->post('kontakt_admin');
            $data['id_rolep'] = $this->input->post('id_rolep');
            $data['password_admin'] = $this->input->post('password_admin');
            $this->Data_admin_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/data_admin'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['id_rolep']= $this->listData_rule();
            $data["data_admin"] = $this->Data_admin_model->getID($id);
            $data['contents'] = 'admin/data_admin/data_admin_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            
            $data['username'] = $this->input->post('username');
            $data['nik_admin'] = $this->input->post('nik_admin');
            $data['nama_admin'] = $this->input->post('nama_admin');
            $data['alamat_admin'] = $this->input->post('alamat_admin');
            $data['kontakt_admin'] = $this->input->post('kontakt_admin');
            $data['id_rolep'] = $this->input->post('id_rolep');
            $data['password_admin'] = $this->input->post('password_admin');
            $this->Data_admin_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil diubah")</script>');
            redirect(base_url('index.php/admin/data_admin'));
        }
    }

    public function delete($id)
    {
        $this->Data_admin_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/data_admin'));
    }
}
