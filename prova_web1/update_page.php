<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <a href="../home.php">Back to home</a>
    <h1>Edit Your Account</h1>
    <form action="update.php" method="POST" style="display:flex; flex-direction:column; width: 500px; gap: 10px">
        <input type="text" name="name" placeholder="New Name">
        <input type="password" name="password" placeholder="New Password">
        <button>update</button>
    </form>
</body>
</html>