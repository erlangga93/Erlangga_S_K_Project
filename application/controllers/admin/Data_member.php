<?php

class Data_member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_member_model');
        $this->load->model('Data_rule_model');
        $this->load->library('Form_validation');
    }

    public function rules()
    {
        return [
            
            ['field' => 'nama_member', 'label' => 'nama_member', 'rules' => 'required'],
            ['field' => 'password_member', 'label' => 'password_member', 'rules' => 'required'],
            ['field' => 'no_kontakt_member', 'label' => 'no_kontakt_member', 'rules' => 'required'],
            ['field' => 'ttl_member', 'label' => 'ttl_member', 'rules' => 'required'],
            ['field' => 'email_member', 'label' => 'email_member', 'rules' => 'required'],
            ['field' => 'jenis_kelamin_m', 'label' => 'jenis_kelamin_m', 'rules' => 'required'],
            ['field' => 'ktp_member', 'label' => 'ktp_member', 'rules' => 'required'],
            ['field' => 'pass_photo_m', 'label' => 'pass_photo_m', 'rules' => 'required']
            
        ];
    }

    

    public function index()
    {
        //getAll( diambil dari model yang digunakan untuk view)
        $data['data_member'] = $this->Data_member_model->getAll();
        $data['contents'] = 'admin/data_member/data_member_view';
        $this->load->view('admin/layout/template', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data['contents'] = 'admin/data_member/data_member_insert';
            $this->load->view('admin/layout/template', $data);
        } else {
               //fungsi foto
               $photo_member = '';
               $this->load->library('upload');
               $config['upload_path'] = './upload/member/'; // Sesuaikan sama folder dimana foto akan d simpan
               $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
               $config['file_ext_tolower'] = TRUE;
               $config['overwrite'] = TRUE;
               $config['max_size'] = '3840';
               $config['max_width']  = '3840';
               $config['max_height']  = '2160';
               $this->upload->initialize($config);
               if (!$this->upload->do_upload('pass_photo_m')) {
                   $photo_member = "";
               } else {
                   $photo_member = $this->upload->file_name;
               }
            $data['nama_member'] = $this->input->post('nama_member');
            $data['password_member'] = $this->input->post('password_member');
            $data['no_kontakt_member'] = $this->input->post('no_kontakt_member');
            $data['ttl_member'] = $this->input->post('ttl_member');
            $data['email_member'] = $this->input->post('email_member');
            $data['jenis_kelamin_m'] = $this->input->post('jenis_kelamin_m');
            $data['ktp_member'] = $this->input->post('ktp_member');
            $data['pass_photo_m'] = $photo_member;
            $this->Data_member_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect(base_url('index.php/admin/data_member'));
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules());

        if ($this->form_validation->run() === FALSE) {
            $data["data_member"] = $this->Data_member_model->getID($id);
            $data['contents'] = 'admin/data_member/data_member_edit';
            $this->load->view('admin/layout/template', $data);
        } else {
               //fungsi foto
               $photo_member = '';
               $this->load->library('upload');
               $config['upload_path'] = './upload/member/'; // Sesuaikan sama folder dimana foto akan d simpan
               $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
               $config['file_ext_tolower'] = TRUE;
               $config['overwrite'] = TRUE;
               $config['max_size'] = '3840';
               $config['max_width']  = '3840';
               $config['max_height']  = '2160';
               $this->upload->initialize($config);
               if (!$this->upload->do_upload('pass_photo_m')) {
                   $photo_member = "";
               } else {
                   $photo_member = $this->upload->file_name;
               }

            $data['nama_member'] = $this->input->post('nama_member');
            $data['password_member'] = $this->input->post('password_member');
            $data['no_kontakt_member'] = $this->input->post('no_kontakt_member');
            $data['ttl_member'] = $this->input->post('ttl_member');
            $data['email_member'] = $this->input->post('email_member');
            $data['jenis_kelamin_m'] = $this->input->post('jenis_kelamin_m');
            $data['ktp_member'] = $this->input->post('ktp_member');
            $data['pass_photo_m'] = $photo_member;
            $this->Data_member_model->edit($id, $data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil diubah")</script>');
            redirect(base_url('index.php/admin/data_member'));
        }
    }

    public function delete($id)
    {
        $this->Data_member_model->delete($id);
        $this->session->set_flashdata('pesan', '<script>alert("Berhasil dihapus")</script>');
        redirect(base_url('index.php/admin/data_member'));
    }
}
