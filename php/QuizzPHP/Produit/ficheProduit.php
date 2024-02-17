<?php 
    $_GET;
    //$_POST;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: #123;
        }
    </style>
</head>
<body>
    <h1>Fiche produit</h1>
    <table border="1">
        <thead>
            <tr>
                <th>
                    Nom 
                </th>
                <th>
                    Prix
                </th>
                <th>
                    Stock
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $_GET["nom"]; ?>
                </td>
                <td>
                    <?php echo $_GET["prix"]; ?>
                </td>
                <td>
                    <?= $_GET["stock"]; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>