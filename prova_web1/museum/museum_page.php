<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum</title>
</head>
<body>
    <a href="../home.php">Back to home</a>
    <h1>Register your museum</h1>
<form action="museum_add.php" method="POST" style="display:flex; flex-direction:column; width: 500px; gap: 10px">
        <div>
        <?php if (isset($_GET['err'])): ?>
            <?= $_GET['err'] ?>
        <?php endif ?> 
        </div>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="address" placeholder="Address">
        <input type="number" name="price" placeholder="Entry's Price">
        <input type="number" name="time" placeholder="Opening Hours">
        <select name="category">
            <option value="science">Ciência</option>
            <option value="history">História</option>
            <option value="art">Arte</option>
        </select>
        <button>register</button>
    </form>

    <h1>Your Museumns</h1>

    <?php $fp = fopen("museu.csv", "r") ?>

    <table style="border-collapse: collapse">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 4px">Museum name</th>
                <th style="border: 1px solid black; padding: 4px">Museum address</th>
                <th style="border: 1px solid black; padding: 4px">Entry's price</th>
                <th style="border: 1px solid black; padding: 4px">Opening Hours</th>
                <th style="border: 1px solid black; padding: 4px">Category</th>
                <th style="border: 1px solid black; padding: 4px">Actions</th>
            </tr>
        </thead>
         
        
        <?php while(($row = fgetcsv($fp)) !== false): ?>
            <tr>
                <td style="border: 1px solid black; padding: 4px"><?= $row[0] ?></td>
                <td style="border: 1px solid black; padding: 4px"><?= $row[1] ?></td>
                <td style="border: 1px solid black; padding: 4px"><?= $row[2] ?></td>
                <td style="border: 1px solid black; padding: 4px"><?= $row[3] ?></td>
                <td style="border: 1px solid black; padding: 4px"><?= $row[4] ?></td>

                <td style="border: 1px solid black; padding: 4px">
                    <a href="delete_museum.php?name=<?= $row[0] ?>">Delete</a>
                </td>
                <td style="border: 1px solid black; padding: 4px">
                    <a href="museum_update_page.php?name=<?= $row[0] ?>">Update</a>
                </td>
            </tr>
            <?php endwhile ?>
    </table>
</body>
</html>