<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {

        if (!empty($_POST)) {
            if ($_POST['Email'] != null && $_POST['Password'] != null) {
                $email = $_POST['Email'];
                $password = $_POST['Password'];
                $data = array(
                    "email" => $email,
                    "password" => $password
                );

                $this->load->Model('Muser');
                $login_ok = $this->Muser->login($data);
                if ($login_ok) {
                    $user = array(
                        'email' => $login_ok['email'],
                        'full_name' => $login_ok['fullname']
                    );
                    $data = array(
                        'user' => $user
                    );
                    $this->session->set_userdata($data);
                    redirect(site_url('home'));
                    //$this->load->view('home_view', $data);
                } else {
                    $data = array('msg' => 'Email hoặc mật khẩu không hợp lệ. Vui lòng thử lại.');
                    $this->load->view('login_view', $data);
                }
            } else {
                $this->load->view('login_view', array('msg' => ''));
            }
        } else {
            $this->load->view('login_view', array('msg' => ''));
        }
    }

}

?>