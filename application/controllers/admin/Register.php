<?php
class Register extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->library('Form_validation');

    }
    public function index(){
        
        $tmp['title'] = 'Register';
        $this->load->view('admin/register', $tmp);
    }

    public function insert(){
       

        if ($this->form_validation->run() === TRUE) {
            $data['contents'] = 'admin/register';
            $tmp['title'] = 'Register';
            $this->load->view('admin/register', $tmp);
        } else {
            
            $data['username'] = $this->input->post('ip-username');
            $data['nik_admin'] = $this->input->post('ip-nikadm');
            $data['nama_admin'] = $this->input->post('ip-namaadm');
            $data['alamat_admin'] = $this->input->post('ip-alamatadm');
            $data['kontakt_admin'] = $this->input->post('ip-kontaktadm');
            $data['password_admin'] = $this->input->post('ip-pass');
            $this->Register_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect('admin/register','refresh');
        }

        
    }
    
}