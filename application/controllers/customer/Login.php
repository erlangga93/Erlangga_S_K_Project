<?php
class Login extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $tmp['title'] = 'Login';
        $this->load->view('customer/login', $tmp);
    }

    public function auth(){
        echo $this->input->post('ip-username');
        echo $this->input->post('ip-pass');
        if($this->input->post('ip-username')=='' || $this->input->post('ip-pass')==''){
            $this->session->set_userdata('message', "Data Masukkan tidak boleh kosong");
            redirect('customer/login', 'refresh');
        } 
        else {
            $this->form_validation->set_rules('ip-username','username','trim|required|xss_clean');
            $this->form_validation->set_rules('ip-pass','password_konsumen','trim|required|xss_clean');

            if ($this->form_validation->run()==FALSE){
                $this->session->set_userdata('message', "Username/Password tidak valid");
                redirect('customer/login', 'refresh');
            }
            else {
                // $encrypt_pass = md5($this->input->post('ip-pass'));


                $username = $this->input->post('ip-username');
                $password = $this->input->post('ip-pass');

                $result = $this->Login_s_model->login($username, $password);


                if($result){
                    foreach ($result as $row){
                        $sess_array=array(
                            'username'=>$row->username
                        );
                        $this->session->set_userdata('login', $sess_array);
                        $this->session->set_userdata('username', $row->username);
                    }
                    $this->session->unset_userdata('message');
                    redirect('customer/dashboard', 'location');
                } else {
                    $this->session->set_userdata('message', "username/password salah");
                    redirect('customer/login', 'refresh');
                }
            }
        }
    }
    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('onlocat');
        redirect('customer/login', 'refresh');
    }

    
}