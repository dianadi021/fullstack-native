<?php

class Controller {
    public function view($view, $data = []) {
        extract($data);
        ob_start();
        require_once "../App/Views/" . $view . ".php";
        $title = "Home";
        $content = ob_get_clean();
        require_once "../App/Views/layouts/index.php";
    }

    public function model($model) {
        require_once "../App/Models/" . $model . ".php";
        return new $model;
    }
}