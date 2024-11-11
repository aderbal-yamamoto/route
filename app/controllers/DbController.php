<?php
namespace app\Controllers;

use App\Core\Controller;
use App\Models\Db;

class DbController extends Controller {
    public function index() {
        $user = new Db;
        $data = $user->findAll();
        /*foreach($data as $user){
            //echo "<br>" . $user['nome'] ."<br>\n";
            $nome = $user['nome'];
        }
        
        echo $data[1]['nome'];
        */   
        $this->view('db', $data);   
    }
}
