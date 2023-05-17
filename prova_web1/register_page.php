<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create your account</h1>
    <form action="register.php" method="POST" style="display:flex; flex-direction:column; width: 500px; gap: 10px">
        <?php if (isset($_GET['err'])): ?>
            <span><?= $_GET['err'] ?></span>
        <?php endif ?>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <button>register</button>
    </form>
    <a href="login.php">acess your account</a>
</body>
</html>