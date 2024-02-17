<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Produit</title>
</head>
<body>
    <h1>Tableau Produit</h1>
    <table>
        <tr>
            <td>Nom produit</td>
            <td>Prix</td>
            <td>Stock</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td><?= $_POST["nom"]; ?></td>
            <td><?= $_POST["prix"]; ?></td>
            <td><?= $_POST["stock"]; ?></td>
            <td><?= $_POST["stock"] * $_POST["prix"]; ?></td>
        </tr>
    </table>
</body>
</html>