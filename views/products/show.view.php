<!DOCTYPE html>
<html>
<head>
    <title><?= $product->name; ?></title>
</head>
<body>
    <h1><?= $product->nume; ?></h1>
    <p><?= $product->descriere; ?></p>
    <p>Preț: <?= $product->pret; ?> lei</p>
    <p>Stoc: <?= $product->stoc; ?> buc</p>
    <p>Tip: <?= $product->tip; ?></p>
    <p>Beneficii: <?= $product->beneficii; ?></p>
    <a href="/products">Înapoi la produse</a>
</body>
</html>
