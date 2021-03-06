<?php

class Users extends CI_Controller
{

    public function show($user_id)
    {
//        $this->load->model('user_model');
        $data['results'] = $this->user_model->get_users($user_id, 'keen');

        $this->load->view('user_view', $data);

//        foreach ($result as $row) {
//            echo $row->username . '<br>';
//        }
    }

    public function insert()
    {
        $username = 'peter';
        $password = 'secret';
        $this->user_model->create_users([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function update()
    {
        $id = 3;
        $username = 'william';
        $password = 'not so secret';

        $this->user_model->update_users([
           'username' => $username,
           'password' => $password
        ], $id);
    }

    public function delete()
    {
        $id = 3;
        $this->user_model->delete_users($id);
    }
}