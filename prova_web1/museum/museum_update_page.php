<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Museum</title>
</head>
<body>
    <a href="museum_page.php">Back to museum register</a>
    <h1>Edit Your Museum</h1>
    <?php 
    
    $fp = fopen("museu.csv", "r");

    $array = [];

    while($row = fgetcsv($fp)) {
        if( $_GET['name'] == $row[0]) {
            array_push($array,$row[0], $row[1], $row[2], $row[3], $row[4]);
        }
    }

    ?>
    <form action="museum_update.php" method="POST" style="display:flex; flex-direction:column; width: 500px; gap: 10px">
        <input type="hidden" name="name" placeholder="New Name" value="<?= $array[0] ?>">
        <input type="text" name="address" placeholder="New Address" value="<?= $array[1] ?>">
        <input type="number" name="price" placeholder="New Entry's Price" value="<?= $array[2] ?>">
        <input type="number" name="time" placeholder="New Opening Hours" value="<?= $array[3] ?>">
        <select name="category">
            <option value="science" <?= $array[4] == "science" ? "selected" : '' ?>>Ciência</option>
            <option value="history" <?= $array[4] == "history" ? "selected" : '' ?>>História</option>
            <option value="art" <?= $array[4] == "art" ? "selected" : '' ?>>Arte</option>
        </select>
        <button>Edit</button>
    </form>
</body>
</html>