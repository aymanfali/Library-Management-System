<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Here is your Users:</p>
    <a href='/library-ms/public/users/create'>Create</a>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>actions</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><a href="/library-ms/public/users/edit?id=<?php echo $user['id']; ?>">Edit</a></td>
                    <td><a href="/library-ms/public/users/edit?id=<?php echo $user['id']; ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
