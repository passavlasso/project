<?php
use App\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

require_once __DIR__ . '/../routes/web.php';

$router->dispatch();