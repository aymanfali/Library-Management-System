<?php

namespace App\Models;

use App\Core\App;

class Book
{
    
    function all()
    {
        $stm = App::db()->prepare("SELECT * FROM books");
        $stm->execute();
        return $stm->fetchAll();
    }

    function search($query)
    {
        $stm = App::db()->prepare("SELECT * FROM books WHERE title LIKE :q OR author LIKE :q");
        $stm->execute(['q' => "%$query%"]);
        return $stm->fetchAll();
    }

    function create($title, $author)
    {
        $stm = App::db()->prepare("INSERT INTO books(title, author) VALUES (:title, :author)");
        $stm->execute(['title' => $title, 'author' => $author]);
    }

    function update($id, $title, $author)
    {
        $stm = App::db()->prepare("UPDATE books SET title=:title, author=:author WHERE id = :id");
        $stm->execute(['id' => $id, 'title' => $title, 'author' => $author]);
    }

    function find($id)
    {
        $stm = App::db()->prepare("SELECT * FROM books WHERE id=:id");
        $stm->execute(['id' => $id]);
        return $stm->fetch(); // Return single book record
    }

    function delete($id)
    {
        $stm = App::db()->prepare("DELETE FROM books WHERE id=:id");
        $stm->execute(['id' => $id]);
    }
}
