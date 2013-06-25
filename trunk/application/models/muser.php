<?php

class Muser extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_user($data){
        $this->db->insert("user",$data);
    }
}

?>
