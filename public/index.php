<?php
require_once '../vendor/autoload.php'; // Caso use Composer para autoload

use App\core\Router;


$url = isset($_GET['url']) ? $_GET['url'] : '';

$router = new Router();
$router->route($url);
