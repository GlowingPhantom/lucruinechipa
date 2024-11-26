<!DOCTYPE html>
<html>
<head>
    <title><?= $product->name; ?></title>
</head>
<body>
    <h1><?= $product->name; ?></h1>
    <p><?= $product->description; ?></p>
    <p>Preț: <?= $product->price; ?> lei</p>
    <p>Stoc: <?= $product->stock; ?> buc</p>
    <p>Tip: <?= $product->type; ?></p>
    <p>Beneficii: <?= $product->benefits; ?></p>
    <a href="/products">Înapoi la produse</a>
</body>
</html>
