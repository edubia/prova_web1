<?php 

session_start();

if (!isset($_SESSION['auth'])) {
    header('location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Bom dia, <?= $_SESSION['name'] ?></h1>
    <div style="display:flex; flex-direction:column; width: 500px; gap: 10px; padding-bottom: 15px">    
        <a href="account_page.php">
            <button style="width: 100%; height: 100%; cursor: pointer">Your account</button>
        </a>
    </div>
    <div style="display:flex; flex-direction:column; width: 500px; gap: 10px">
        <a href="museum/museum_page.php">
        <button style="width: 100%; height: 100%; cursor: pointer">Register your museum</button>
        </a>
    </div>
</body>
</html>