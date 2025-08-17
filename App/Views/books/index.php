<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Here is your books:</p>
    <a href='/library-ms/public/books/create'>Create</a>
      <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>actions</th>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['title']; ?></td>
                    <td><a href="/library-ms/public/books/<?php echo $book['id']; ?>/edit">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
