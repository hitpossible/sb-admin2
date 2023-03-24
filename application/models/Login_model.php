<?php
class Login_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function checkLoginDb($data) {
        // {
        //     username: admin,
        //     password: 1234,
        // }

        // [
        //     "username" => admin,
        //     "password" => 1234
        // ]
        $username = $data["username"];
        $password = $data["password"];

        $result = $this->db->query("SELECT * FROM member 
                                    WHERE username = ? 
                                    AND password = ?", [$username, $password]);

        if ($result->num_rows() > 0) {
            return ['result' => true, 'message' => 'login success'];
        } else {
            return ['result' => false, 'message' => 'invalid username or password'];
        }
    }
}

?>