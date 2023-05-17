<?php

session_start();

$name = $_POST['name'];
$password = $_POST['password'];


$tempfile = tempnam('.', '');

$fp = fopen($tempfile, 'w');

$fp_csv = fopen('user.csv', 'r');

while ($row = fgetcsv($fp_csv)) {
    if ($row[0] != $_SESSION['auth']) {
        fputcsv($fp, $row);
    } else {
        fputcsv($fp, [$row[0], $name, $password]);
        $_SESSION['name'] = $name;
    }
}

fclose($fp_csv);
fclose($fp);

rename($tempfile, 'user.csv');

header('location: home.php');

?>