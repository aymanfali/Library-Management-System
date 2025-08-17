<?php

namespace App\Controllers;

use App\Models\Book;

class BookController
{
    function delete()
    {
        $id = $_POST['id'] ?? null;
        if ($id) {
            $book = new Book();
            $book->delete($id);
        }
        header('Location: /library-ms/public/books');
        exit;
    }

    function index()
    {
        $book = new Book();
        if (isset($_GET['search']) && $_GET['search'] !== '') {
            $books = $book->search($_GET['search']);
        } else {
            $books = $book->all();
        }
        require '../app/views/books/index.php';
    }

    function show() {}

    function create()
    {
        require '../app/views/books/create.php';
    }

    function store()
    {
    $book = new Book();
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $book->create($title, $author);
    $this->index();
    }

    function edit()
    {
        $id = $_GET['id'] ?? null;
        $bookModel = new Book();
        $book = null;
        if ($id) {
            $book = $bookModel->find($id);
        }
        require __DIR__ . "/../views/books/edit.php";
    }

    function update()
    {
        $id = $_POST['id'] ?? null;
        $title = $_POST['title'] ?? '';
        $author = $_POST['author'] ?? '';
        $book = new Book();
        if ($id) {
            $book->update($id, $title, $author);
            header('Location: /library-ms/public/books');
            exit;
        }
    }
}
