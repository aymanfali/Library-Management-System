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

    function find($id)
    {
        $stm = App::db()->prepare("SELECT * FROM books WHERE id=:id");
        $stm->execute(['id' => $id]);
        $stm->fetchAll();
    }

    function create($title)
    {
        $stm = App::db()->prepare("INSERT INTO books(title) VALUES (:title)");
        $stm->execute(['title' => $title]);
    }

    function update($id, $title)
    {
        $stm = App::db()->prepare("UPDATE books SET title=:title WHERE id = :id");
        $stm->execute(['id' => $id, 'title' => $title]);
    }

    function delete($id)
    {
        $stm = App::db()->prepare("DELETE FROM books WHERE id=:id");
        $stm->execute(['id' => $id]);
    }
}
