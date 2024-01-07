<?php
class User extends CI_Controller {

    public function index(){
        $tmp['title'] = 'User';
        $tmp['contents'] = 'admin/user/user_view';
        $this->load->view('admin/layout/template', $tmp);
    }
}