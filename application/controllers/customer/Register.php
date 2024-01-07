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
        $this->load->view('customer/register', $tmp);
    }

    public function insert(){
       

        if ($this->form_validation->run() === TRUE) {
            $data['contents'] = 'customer/register';
            $tmp['title'] = 'Register';
            $this->load->view('customer/register', $tmp);
        } else {
            
            $data['nama_member'] = $this->input->post('ip-username');
            $data['password_member'] = $this->input->post('ip-pass');
            $data['no_kontakt_member'] = $this->input->post('ip-nokntk');
            $data['ttl_member'] = $this->input->post('ip-ttl_m');
            $data['email_member'] = $this->input->post('ip-email_m');
            $data['jenis_kelamin_m'] = $this->input->post('ip-jenis_kelamin');
            $data['ktp_member'] = $this->input->post('ip-ktp_member');
            $data['pass_photo_m'] = $photo_member;
            $this->Register_model->insert($data);
            $this->session->set_flashdata('pesan', '<script>alert("Berhasil disimpan")</script>');
            redirect('customer/register','refresh');
        }

        
    }
    
}