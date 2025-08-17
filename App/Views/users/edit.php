<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/library-ms/public/users/update">
        <input type="hidden" name="id" value="<?= isset($user['id']) ? htmlspecialchars($user['id']) : '' ?>">
        <input type="text" name="name" placeholder="Enter your name" value="<?= isset($user['name']) ? htmlspecialchars($user['name']) : '' ?>"><br>
        <input type="email" name="email" placeholder="Enter your email" value="<?= isset($user['email']) ? htmlspecialchars($user['email']) : '' ?>"><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>
