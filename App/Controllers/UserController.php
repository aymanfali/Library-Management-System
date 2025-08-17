<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    function index()
    {
        $user = new User();

        $users = $user->all();

        require '../app/views/users/index.php';
    }

    function show() {}

    function create()
    {
        require '../app/views/users/create.php';
    }

    function store()
    {
        $user = new User();

        $user->create(
            $_POST['name'],
            $_POST['email'],
        );

        $this->index();
    }

    function edit($id)
    {
        $user = new User();
        $user = $user->find($id);
        require __DIR__ . './../views/users/edit.php';
    }

    function update($id)
    {
        $user = new User();

        $user->update(
            $id,
            $_POST['name'],
            $_POST['email']
        );
    }
}
