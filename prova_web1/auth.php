<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$fp = fopen('user.csv', 'r');

while (($row = fgetcsv($fp))) {
    if($email == $row[0] && $password == $row[2]) {
        $_SESSION['auth'] = $email;
        $_SESSION['name'] = $row[1];
        header('location: home.php');
        exit;
    }
}

fclose($fp);

header('location: login.php?err=invalid email or password');



?>