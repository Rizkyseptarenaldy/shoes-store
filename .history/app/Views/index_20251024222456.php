<!DOCTYPE html>
<html>
<head>
    <title>Products - Shoe Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>🛍️ Product List</h2>
    <a href="/products/create" class="btn btn-primary mb-3">+ Add Product</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Price</th><th>Stock</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td>Rp<?= number_format($p['price'], 0, ',', '.') ?></td>
                <td><?= $p['stock'] ?></td>
                <td>
                    <a href="/products/edit/<?= $p['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/products/delete/<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>
