<?php

use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\PostController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/category/{id}', [CategoryController::class, 'show']);
$router->get('/post/{id}', [PostController::class, 'show']);