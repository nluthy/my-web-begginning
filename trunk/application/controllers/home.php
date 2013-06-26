<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('user')) {
            $suser = $this->session->userdata('user');
            
            
            $user = array(
                'email' => $suser['email'],
                'full_name' => $suser['full_name']
            );
            
            $data = array(
              'user' => $user  
            );
            $this->load->view('home_view', $data);
        } else {
            $this->load->view('home_view', array('user' => ''));
        }
    }

}

?>