<?php

class Data_rule extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_rule_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            
            ['field' => 'nama_rule', 'label' => '', 'rules' => 'required']
        ];
    }

    public function index()
    {
        $data['data_rule'] = $this->Data_rule_model->getAll();
        $data['contents'] = 'admin/data_rule/data_rule_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/data_rule/data_rule_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
            
            $data['nama_rolep'] = $this->input->post('nama_rule');
            $this->Data_rule_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/data_rule'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["data_rule"] = $this->Data_rule_model->getID($id);
            $data['contents'] = 'admin/data_rule/data_rule_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
            
            $data['nama_rolep'] = $this->input->post('nama_rule');
            $this->Data_rule_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil diubah")</script>');
            redirect(base_url('index.php/admin/data_rule'));
        }
    }

    public function delete($id)
    {
        $this->Data_rule_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/data_rule'));
    }
}
