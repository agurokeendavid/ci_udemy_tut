<?php

class Home extends CI_Controller {
    public function index()
    {
//        echo "this is the home controller";
        $this->load->view('home_view');
    }

    public function delete()
    {
        $id = 3;
        $this->user_model->delete_users(3);
    }
}