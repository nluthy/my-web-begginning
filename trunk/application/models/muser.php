<?php

class Muser extends CI_Model {

    private $_table = "user";

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user($data) {
        if ($this->db->insert($this->_table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function login($data) {
        $info = $this->get_user_by_email($data['email']);
        if ($info) {
            $salt = $info['salt'];
            $pass = strtoupper(sha1($data['password'] . $salt));
            if ($pass == $info['password']) {
                return $info;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    private function get_user_by_email($email) {
        $this->db->where("email", $email);
        $query = $this->db->get($this->_table);
        if ($query) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

}

?>
