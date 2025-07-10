<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form action="/signup/save" method="post">
        <?= csrf_field() ?>
        <label for="firstname">FirstName</label>
        <input type="text" name="firstname" required>
        <br>
        <label for="lastname">LastName</label>
        <input type="text" name="lastname" required> 
        <br>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <label for="password_confirm">Confirm Password:</label>
        <input type="password" name="password_confirm" required>
        <br>
        <button type="submit">Signup</button>
    </form>
    <?php if(isset($validation)): ?>
        <div>
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
</body>
</html>
