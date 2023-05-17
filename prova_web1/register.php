<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!(empty($name) && empty($email) && empty($password))) {

    $fp = fopen('user.csv', 'r');
    
    while ($row = fgetcsv($fp)) {
        if ($row[0] == $email) {
            header('location: register_page.php?err=Email already registered');
            exit();            
        }
    }
    
    $fp = fopen('user.csv', 'a');

    fputcsv($fp, [$email, $name, $password]);
    
    fclose($fp);
    
    header('location: login.php');
    exit;
}

header('location: register_page.php?err=fill in all fields');

?>