<?php

use App\Controllers\BookController;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Core\Router;


$router=new Router();

$router->get('/library-ms/public/',[HomeController::class,'index']);

$router->get('/library-ms/public/users', [UserController::class, 'index']);
$router->get('/library-ms/public/users/create', [UserController::class, 'create']);
$router->post('/library-ms/public/users', [UserController::class, 'store']);
$router->get('/library-ms/public/users/edit', [UserController::class, 'edit']);
$router->post('/library-ms/public/users/update', [UserController::class, 'update']);
$router->post('/library-ms/public/users/delete', [UserController::class, 'delete']);
$router->post('/library-ms/public/users/borrow', [UserController::class, 'borrow']);

$router->get('/library-ms/public/books',[BookController::class,'index']);
$router->get('/library-ms/public/books/create',[BookController::class,'create']);
$router->post('/library-ms/public/books',[BookController::class,'store']);
$router->get('/library-ms/public/books/edit',[BookController::class,'edit']);
$router->post('/library-ms/public/books/update',[BookController::class,'update']);
$router->post('/library-ms/public/books/delete', [BookController::class, 'delete']);
