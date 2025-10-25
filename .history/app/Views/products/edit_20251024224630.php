<!DOCTYPE html>
<html>
<head>
    <title>Edit products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Edit products</h2>
    <form action="/productss/update/<?= $products['id'] ?>" method="post">
        <div class="mb-3">
            <label>Product ID</label>
            <input type="number" name="product_id" class="form-control" value="<?= $products['product_id'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" value="<?= $products['quantity'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Total Price</label>
            <input type="number" name="total_price" class="form-control" value="<?= $products['total_price'] ?>" required>
        </div>
        <div class="mb-3">
            <label>products Date</label>
            <input type="date" name="products_date" class="form-control" value="<?= $products['products_date'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/productss" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
