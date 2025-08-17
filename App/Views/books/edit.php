<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/library-ms/public/books/update">
        <input type="hidden" name="id" value="<?= isset($book['id']) ? htmlspecialchars($book['id']) : '' ?>">
        <input type="text" name="title" placeholder="Enter your Title" value="<?= isset($book['title']) ? htmlspecialchars($book['title']) : '' ?>"><br>
        <input type="text" name="author" placeholder="Enter author name" value="<?= isset($book['author']) ? htmlspecialchars($book['author']) : '' ?>"><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>
