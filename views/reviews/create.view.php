<!DOCTYPE html>
<html>
<head>
    <title>Adaugă Produs</title>
</head>
<body>
    <h1>Adaugă un produs nou</h1>
    <form method="POST" action="/orders/store">
        <label for="name">Nume:</label>
        <input type="text" name="name" required><br>
        <label for="description">Descriere:</label>
        <textarea name="description"></textarea><br>
        <label for="price">Preț:</label>
        <input type="number" name="price" required><br>
        <label for="stock">Stoc:</label>
        <input type="number" name="stock" required><br>
        <label for="type">Tip:</label>
        <input type="text" name="type" required><br>
        <label for="benefits">Beneficii:</label>
        <textarea name="benefits"></textarea><br>
        <button type="submit">Adaugă</button>
    </form>
</body>
</html>
