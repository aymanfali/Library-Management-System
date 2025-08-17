<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/library-ms/public/books/update/<?php echo $book['id']; ?>">
        <input type="text" name="title" id="" placeholder="Enter your Title" value="<?php echo htmlspecialchars($book['title']); ?>">
        <input type="submit" value="Send">
    </form>
</body>

</html>
