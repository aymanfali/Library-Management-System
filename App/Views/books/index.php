<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="/library-ms/public/books">
        <input type="text" name="search" placeholder="Search by title or author">
        <input type="submit" value="Search">
    </form>
    <p>Here is your books:</p>
    <a href='/library-ms/public/books/create'>Create</a>
    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>author</th>
            <th>copies</th>
            <th>actions</th>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['author']; ?></td>
                    <td><?php echo $book['copies']; ?></td>
                    <td><a href="/library-ms/public/books/edit?id=<?php echo $book['id']; ?>">Edit</a></td>
                    <td>
                        <form method="POST" action="/library-ms/public/books/delete" style="display:inline;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($book['id']) ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
