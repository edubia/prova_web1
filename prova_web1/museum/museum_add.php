<?php

$museum_name = $_POST['name'];
$museum_address = $_POST['address'];
$museum_price = $_POST['price'];
$museum_time = $_POST['time'];
$museum_category = $_POST['category'];


// if (!(empty($museum_name) && empty($museum_address) && empty($$museum_price) && empty($museum_time) && empty($museum_category))) {

//     $fp = fopen('museu.csv', 'r');

//     while ($row = fgetcsv($fp)) {
//         if ($row[0] == $museum_name){
//             header('location: museu_page.php?err=This museum already exist.');
//             exit();
//         }
//     }
// }

$fp = fopen('museu.csv', 'a');

fputcsv($fp, [$museum_name, $museum_address, $museum_price, $museum_time, $museum_category]);

fclose($fp);

header('location: museum_page.php');


?>
