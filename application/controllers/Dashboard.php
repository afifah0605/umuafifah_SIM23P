<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{
    public function index(){
        $data['content']='<h1><i class="fas fa-user-shield"></i> Welcome, Admin!</h1>';
        $this->load->view('templates/header');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
