<?php

$name = $_GET['name'];

$tempfile = tempnam('.', '');

$fp = fopen($tempfile, 'w');

$fp_csv = fopen('museu.csv', 'r');

while ($row = fgetcsv($fp_csv)) {
    if ($row[0] != $name) {
        fputcsv($fp, $row);
    }
}

fclose($fp_csv);
fclose($fp);

rename($tempfile, 'museu.csv');

header('location: museum_page.php');




?>