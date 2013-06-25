<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('string');
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

                $salt = random_string(alnum, 10);
                $password = strtoupper(sha1($password . $salt));
                $add_date = date('Y-m-d H:i:s', now());
                $data = array(
                    "email" => $email,
                    "password" => $password,
                    "fullname" => $full_name,
                    "phone" => $phone,
                    "address" => $street_address,
                    "city" => $city_id,
                    "district" => $district_id,
                    "salt" => $salt,
                    "add_date" => $add_date
                );
                
                $this->load->Model('Muser');
                $this->Muser->insert_user($data);
                
                $this->load->view('home_view');
            } else {
                $this->load->view('register_view');
            }
        } else {
            $this->load->view('register_view');
        }
    }

}

?>