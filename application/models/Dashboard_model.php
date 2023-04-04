<?php
class Dashboard_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getProductAll() {
        $sql = "SELECT * FROM product";

        $result = $this->db->query($sql);

        if ($result->num_rows() > 0)
            return $result->result_array();
        else
            return [];

        //$result->result();
        //$result->result_array();
        //$result->row();
    }
}

?>