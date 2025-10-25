<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Product List</h2>
    <a href="/products/create" class="btn btn-primary mb-3">Add Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products) && is_array($products)): ?>
                <?php foreach ($products as $p): ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['name'] ?></td>
                        <td><?= $p['price'] ?></td>
                        <td><?= $p['stock'] ?></td>
                        <td>
                            <a href="/products/edit/<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/products/delete/<?= $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">No products found</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/" class="btn btn-secondary">Back Home</a>
</div>
</body>
</html>
