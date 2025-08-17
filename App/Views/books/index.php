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
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>" . $book['title'] . " - - - " . "<a href='/library-ms/public/books/" . $book['id'] . "/edit'>Edit</a>" . "</li>";
        }
        ?>

    </ul>
</body>

</html>
