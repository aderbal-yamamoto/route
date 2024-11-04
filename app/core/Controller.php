<?php
namespace App\Core;
//faz a requisicao das paginas atravez da views
class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once "../app/views/$view.php";
    }
}
