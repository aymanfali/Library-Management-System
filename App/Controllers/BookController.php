<?php

namespace App\Controllers;

use App\Models\Book;

class BookController
{

    function index()
    {
        $book = new Book();

        $books = $book->all();

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

        $book->create($_POST['title']);

        $this->index();
    }

    function edit($id)
    {
        $book = new Book();
        $book = $book->find($id);
        require __DIR__ . './../views/books/edit.php';
    }

    function update($id)
    {
        $book = new Book();

        $book->update($id, $_POST['title']);
    }
}
