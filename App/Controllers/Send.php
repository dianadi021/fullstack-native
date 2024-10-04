<?php

class Send extends Controller {
    public function index() {
        // $datas['users'] = $this->model('UserModel')->getUsers();
        $this->view('Send/index');
    }
}