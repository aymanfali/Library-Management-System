<?php

use App\Controllers\BookController;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Core\Router;


$router=new Router();

$router->get('/library-ms/public/home',[HomeController::class,'index']);

$router->get('/library-ms/public/users', [UserController::class, 'index']);
$router->get('/library-ms/public/users/create', [UserController::class, 'create']);
$router->post('/library-ms/public/users', [UserController::class, 'store']);

$router->get('/library-ms/public/books',[BookController::class,'index']);
$router->get('/library-ms/public/books/create',[BookController::class,'create']);
$router->post('/library-ms/public/books',[BookController::class,'store']);
$router->get('/library-ms/public/books/1/edit',[BookController::class,'edit']);
$router->post('/library-ms/public/books/{id}/update',[BookController::class,'update']);
