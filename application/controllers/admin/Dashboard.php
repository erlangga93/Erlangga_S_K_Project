<?php
class Dashboard extends CI_Controller {
    
    public function index(){
        $tmp['title'] = 'Dashboard';
        // $tmp['contents] = $this->load->view('admin/dashboard/home', null, true);
        $tmp['contents'] = 'admin/dashboard/home';
        $this->load->view('admin/layout/template', $tmp);
    }
}