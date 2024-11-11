<?php
namespace App\Core;

use App\Controllers\HomeController;

class Router {
    public function route($url) {
        switch ($url) {
            case '':
                $controller = 'HomeController';
                $method = 'index';
                break;
            case 'sobre':
                $controller = 'AboutController';
                $method = 'index';
            break;    
            
            default:
                # code...
                break;
        }

       
        $action = $method;
        $controllerClass = "App\\Controllers\\$controller";
        
        if (!class_exists($controllerClass)){
            http_response_code(404);
            echo '404 não encontrado';
        }
        
        $controllerInstance = new $controllerClass();
        if(!method_exists($controllerInstance, $action)){
            http_response_code(404);
            echo '404 não encontrado';
        }
        
            $controllerInstance->$action();
            
        
        
        
    }
}
