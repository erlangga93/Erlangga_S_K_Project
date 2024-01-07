<?php
class Login extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $tmp['title'] = 'Login';
        $this->load->view('admin/login', $tmp);
    }

    public function proses_login()//proses_login diarahkan ke -> view 
    {
        echo $this->input->post('ip-username');
        echo $this->input->post('ip-pass');
        if($this->input->post('ip-username')=='' || $this->input->post('ip-pass')==''){
            $this->session->set_userdata('message', "Data Masukkan tidak boleh kosong");
            redirect('admin/login', 'refresh');
        } 
        else {
            $this->form_validation->set_rules('ip-username','username','trim|required|xss_clean');
            //set_rules('ip-username' (bahan dari atas), 'username' (dari database) bla bla bla
            $this->form_validation->set_rules('ip-pass','password_admin','trim|required|xss_clean');

            if ($this->form_validation->run()==FALSE){
                $this->session->set_userdata('message', "Username/Password tidak valid");
                redirect('admin/login', 'refresh');
            }
            else {
                // $encrypt_pass = md5($this->input->post('ip-pass'));

                //1. $username dan $ password diambil dari model
                //2. ip-username dan ip-pass ini untuk view login

                $username = $this->input->post('ip-username'); 
                $password = $this->input->post('ip-pass');

                $result = $this->Login_model->proseslogin($username, $password);//diambil dari model


                if($result){
                    foreach ($result as $row){
                        $sess_array=array(
                            'username'=>$row->username
                        );
                        $this->session->set_userdata('login', $sess_array);
                        $this->session->set_userdata('username', $row->username);
                    }
                    $this->session->unset_userdata('message');
                    redirect('admin/dashboard', 'location');
                } else {
                    $this->session->set_userdata('message', "username/password salah");
                    redirect('admin/login', 'refresh');
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
        redirect('admin/login', 'refresh');
    }

    
}