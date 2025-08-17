<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/library-ms/public/users/{$user['id']}/update<?php echo $user['id']; ?>">
        <input type="text" name="name" id="" placeholder="Enter your name" value="<?php echo htmlspecialchars($user['name']); ?>">
        <input type="email" name="email" id="" placeholder="Enter your email" value="<?php echo htmlspecialchars($user['email']); ?>">
        <input type="submit" value="Send">
    </form>
</body>

</html>
