<!DOCTYPE html>
<html>
<head>
    <title>Produse Apicole</title>
</head>
<body>
    <h1>Lista de Produse Apicole</h1>
    <a href="/products/create">Adaugă un produs nou</a>
    <ul>
    <ul>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="/products/<?= $product->id; ?>"><?= htmlspecialchars($product->nume); ?></a> 
                - <?= htmlspecialchars($product->pret); ?> lei
                <a href="/products/<?= $product->id; ?>/edit">Editează</a>
                <form method="POST" action="/products/<?= $product->id; ?>/delete" style="display:inline;">
                    <button type="submit">Șterge</button>
                </form>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nu există produse disponibile.</p>
    <?php endif; ?>
</ul>
    </ul>
</body>
</html>
