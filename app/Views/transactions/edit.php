<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Edit Transaction</h2>
    <form action="/transactions/update/<?= $transaction['id'] ?>" method="post">
        <div class="mb-3">
            <label>Product ID</label>
            <input type="number" name="product_id" class="form-control" value="<?= $transaction['product_id'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" value="<?= $transaction['quantity'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Total Price</label>
            <input type="number" name="total_price" class="form-control" value="<?= $transaction['total_price'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Transaction Date</label>
            <input type="date" name="transaction_date" class="form-control" value="<?= $transaction['transaction_date'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/transactions" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
