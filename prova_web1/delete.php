<?php 

session_start();

$tempfile = tempnam('.', '');

$fp = fopen($tempfile, 'w');

$fp_csv = fopen('user.csv', 'r');

while ($row = fgetcsv($fp_csv)) {
    if ($row[0] != $_SESSION['auth']) {
        fputcsv($fp, $row);
    }
}

fclose($fp_csv);
fclose($fp);

rename($tempfile, 'user.csv');

header('location: login.php');

?>