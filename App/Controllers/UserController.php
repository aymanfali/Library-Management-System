<?php

namespace App\Controllers;

use App\Models\Borrow;
use App\Models\User;

class UserController
{

    function index()
    {
        $user = new User();
        if (isset($_GET['search']) && $_GET['search'] !== '') {
            $users = $user->search($_GET['search']);
        } else {
            $users = $user->all();
        }
        require '../app/views/users/index.php';
    }

    function create()
    {
        require '../app/views/users/create.php';
    }

    function store()
    {
        $user = new User();
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $user->create(
            $name,
            $email
        );
        $this->index();
    }

    function edit()
    {
        $id = $_GET['id'] ?? null;
        $userModel = new User();
        $user = null;
        if ($id) {
            $user = $userModel->find($id);
        }
        require __DIR__ . '/../views/users/edit.php';
    }

    function update()
    {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $user = new User();
        if ($id) {
            $user->update($id, $name, $email);
            header('Location: /library-ms/public/users');
            exit;
        }
    }

    function delete()
    {
        $id = $_POST['id'] ?? null;

        if ($id) {
            $user = new User();
            $user->delete($id);
        }
        header('Location: /library-ms/public/users');
        exit;
    }

    public function borrow()
    {
        $userId = $_POST['user_id'] ?? null;
        $bookId = $_POST['book_id'] ?? null;
        
        if ($userId && $bookId) {
            $success = Borrow::borrowBook($userId, $bookId);
            if ($success) {
                header('Location: /library-ms/public/users');
                exit;
            } else {
                echo "Borrow failed. Please try again.";
            }
        }
    }
}
