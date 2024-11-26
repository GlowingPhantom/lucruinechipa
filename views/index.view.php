<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produse Apicole</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff8e1; /* Fundal crem deschis */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 40px;
        }
        h1 {
            color: #6d4c41; /* Maro închis */
            font-weight: bold;
        }
        .btn-add {
            background-color: #ffd54f; /* Galben apicol */
            color: #4e342e; /* Maro */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-add:hover {
            background-color: #ffca28; /* Galben mai intens */
        }
        .product-list li {
            margin-bottom: 15px;
            padding: 15px;
            background-color: #ffecb3; /* Galben deschis */
            border: 1px solid #ffe082;
            border-radius: 5px;
        }
        .product-list a {
            text-decoration: none;
            color: #6d4c41; /* Maro închis */
            font-weight: bold;
        }
        .product-list a:hover {
            text-decoration: underline;
        }
        .btn-edit {
            background-color: #81c784; /* Verde deschis */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-edit:hover {
            background-color: #66bb6a; /* Verde mai închis */
        }
        .btn-delete {
            background-color: #e57373; /* Roșu deschis */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-delete:hover {
            background-color: #d32f2f; /* Roșu mai închis */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Lista de Produse Apicole</h1>
        <!-- Buton centrat sub titlu -->
        <div class="text-center mb-4">
            <a href="/products/create" class="btn btn-add">Adaugă un produs nou</a>
        </div>
        <ul class="list-unstyled product-list">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <li class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="/products/<?= $product->id; ?>"><?= htmlspecialchars($product->name); ?></a>
                            - <span><?= htmlspecialchars($product->price); ?> lei</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="/products/<?= $product->id; ?>/edit" class="btn btn-edit btn-sm">Editează</a>
                            <form method="POST" action="/products/<?= $product->id; ?>/delete" style="display:inline;">
                                <button type="submit" class="btn btn-delete btn-sm">Șterge</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-muted">Nu există produse disponibile.</p>
            <?php endif; ?>
        </ul>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
