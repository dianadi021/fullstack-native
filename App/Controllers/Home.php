<?php

class Home extends Controller {
    public function index() {
        // $datas['users'] = $this->model('UserModel')->getUsers();
        $this->view('Home/index');
    }
}