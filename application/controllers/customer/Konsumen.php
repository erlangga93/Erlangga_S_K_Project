<?php
class Customer extends CI_Controller {

    public function index(){
        $tmp['title'] = 'Customer';
        $tmp['contents'] = 'admin/customer/customer_view';
        $this->load->view('admin/layout/template', $tmp);
    }
}