<?php

namespace App\Models;

use App\Core\App;

class User
{
    function search($query)
    {
        $stm = App::db()->prepare("SELECT * FROM users WHERE name LIKE :q OR email LIKE :q");
        $stm->execute(['q' => "%$query%"]);
        return $stm->fetchAll();
    }

    function all()
    {
        $stm = App::db()->prepare("SELECT * FROM users");

        $stm->execute();

        return $stm->fetchAll();
    }

    function find($id)
    {
        $stm = App::db()->prepare("SELECT * FROM users WHERE id=:id");
        $stm->execute(['id' => $id]);
        return $stm->fetch();
    }

    function create($name, $email)
    {
        $stm = App::db()->prepare("INSERT INTO users(name, email) VALUES (:name, :email)");
        $stm->execute(['name' => $name, 'email' => $email]);
    }

    function update($id, $name, $email)
    {
        $stm = App::db()->prepare("UPDATE users SET name=:name, email=:email WHERE id = :id");
        $stm->execute(['id' => $id, 'name' => $name, 'email' => $email]);
    }

    function delete($id)
    {
        $stm = App::db()->prepare("DELETE FROM users WHERE id=:id");
        $stm->execute(['id' => $id]);
    }
}
