<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/category/{id}', [CategoryController::class, 'show']);