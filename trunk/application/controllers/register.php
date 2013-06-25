<?php

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index() {

        if (!empty($_POST)) {
            if ($_POST['Email'] != null && $_POST['Password'] != null && $_POST['FirstName'] != null && $_POST['Phone'] != null && $_POST['StreetAddress'] != null && $_POST['StateProvinceId'] != null && $district_id = $_POST['FrtDistrictId'] != null) {
                $email = $_POST['Email'];
                $password = $_POST['Password'];
                $full_name = $_POST['FirstName'];
                $phone = $_POST['Phone'];
                $street_address = $_POST['StreetAddress'];
                $city_id = $_POST['StateProvinceId'];
                $district_id = $_POST['FrtDistrictId'];
                $password = strtoupper(sha1($password));
                
                echo $email.$password;
            } else {
                $this->load->view('register_view');
            }
        } else {
            $this->load->view('register_view');
        }
    }

}

?>