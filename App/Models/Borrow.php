<?php

namespace App\Models;

use App\Core\App;
use Exception;

class Borrow
{
    public static function borrowBook($userId, $bookId)
    {
        $pdo = App::db();
        try {
            $pdo->beginTransaction();

            // Insert borrow record
            $stm = $pdo->prepare("INSERT INTO borrows (user_id, book_id, borrowed_at) VALUES (:user_id, :book_id, NOW())");
            $stm->execute(['user_id' => $userId, 'book_id' => $bookId]);

            // Update user record (example: increment borrowed_books)
            $stm = $pdo->prepare("UPDATE users SET borrowed_books = borrowed_books + 1 WHERE id = :id");
            $stm->execute(['id' => $userId]);

            // Reduce available copies
            $stm = $pdo->prepare("UPDATE books SET copies = copies - 1 WHERE id = :id AND copies > 0");
            $stm->execute(['id' => $bookId]);

            $pdo->commit();
            return true;
        } catch (Exception $e) {
            $pdo->rollBack();
            return false;
        }
    }
}
