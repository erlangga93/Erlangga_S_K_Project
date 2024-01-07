<?php
class Dashboard extends CI_Controller {
    
    public function index(){
        $tmp['title'] = 'Dashboard';
        // $tmp['contents] = $this->load->view('admin/dashboard/home', null, true);
        $tmp['contents'] = 'customer/dashboard/home';
        $this->load->view('customer/layout/template', $tmp);
    }
}