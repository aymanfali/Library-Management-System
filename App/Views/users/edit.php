<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>edit user with id : <?= isset($user['id']) ? htmlspecialchars($user['id']) : '' ?></h1>
    <form method="POST" action="/library-ms/public/users/update">
        <input type="hidden" name="id" value="<?= isset($user['id']) ? htmlspecialchars($user['id']) : '' ?>">
        <label for="">name</label>
        <input type="text" name="name" placeholder="Enter your name" value="<?= isset($user['name']) ? htmlspecialchars($user['name']) : '' ?>"><br>
        <label for="">email</label>
        <input type="email" name="email" placeholder="Enter your email" value="<?= isset($user['email']) ? htmlspecialchars($user['email']) : '' ?>"><br>
        <label for="">No. borrowed books</label>
        <input type="text" name="borrowed_books" readonly placeholder="Enter no. borrowed books" value="1"><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>
