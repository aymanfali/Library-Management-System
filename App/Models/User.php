<?php

namespace App\Models;

use App\Core\App;

class User
{

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
        $stm->fetchAll();
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
