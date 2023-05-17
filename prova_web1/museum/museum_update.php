<?php

$museum_name = $_POST['name'];
$museum_address = $_POST['address'];
$museum_price = $_POST['price'];
$museum_time = $_POST['time'];
$museum_category = $_POST['category'];

$tempfile = tempnam('.', '');

$fp = fopen($tempfile, 'w');

$fp_csv = fopen('museu.csv', 'r');

while ($row = fgetcsv($fp_csv)) {
    if ($row[0] != $museum_name) {
        fputcsv($fp, $row);
    } else {
        fputcsv($fp, [$row[0], $museum_address, $museum_price, $museum_time, $museum_category]);
    }
}

fclose($fp_csv);
fclose($fp);

rename($tempfile, 'museu.csv');

header('location: museum_page.php');

?>