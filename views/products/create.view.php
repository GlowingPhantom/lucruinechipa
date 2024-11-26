<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Produs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Adaugă un produs nou</h1>
        <form method="POST" action="/products/store">
            <div class="mb-3">
                <label for="nume" class="form-label">Nume:</label>
                <input type="text" name="nume" id="nume" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descriere" class="form-label">Descriere:</label>
                <textarea name="descriere" id="descriere" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="pret" class="form-label">Preț:</label>
                <input type="number" name="pret" id="pret" class="form-control" required step="0.01">
            </div>

            <div class="mb-3">
                <label for="stoc" class="form-label">Stoc:</label>
                <input type="number" name="stoc" id="stoc" class="form-control" required step="1">
            </div>

            <div class="mb-3">
                <label for="tip" class="form-label">Tip:</label>
                <input type="text" name="tip" id="tip" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="beneficii" class="form-label">Beneficii:</label>
                <textarea name="beneficii" id="beneficii" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Adaugă</button>
        </form>
    </div>

    <!-- Include Bootstrap JS for any interactive components (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>