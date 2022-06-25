<?php

class User_model extends CI_Model {
    public function get_users($user_id, $username) {
        $this->db->where([
            'id' => $user_id,
            'username' => $username
        ]);
        $query = $this->db->get('users');
        return $query->result();

//        $query = $this->db->get('users');
//        $query = $this->db->query("SELECT * FROM users;");
//        return $query->num_fields(); // this will give me the columns count
//        return $query->num_rows(); // this will give me the rows count

//        $config['hostname'] = 'localhost';
//        $config['username'] = 'root';
//        $config['password'] = '';
//        $config['database'] = 'errand_db';
//
//        $config_2['hostname'] = 'localhost';
//        $config_2['username'] = 'root';
//        $config_2['password'] = '';
//        $config_2['database'] = 'errand_db_2';
//
//        $connection = $this->load->database($config);
    }

    public function create_users($data) {
        $this->db->insert('users', $data);
    }

    public function update_users($data, $id) {
        $this->db->where(['id' => $id]);
        $this->db->update('users', $data);
    }

    public function delete_users($id) {
        $this->db->where(['id' => $id]);
        $this->db->delete('users');
    }
}