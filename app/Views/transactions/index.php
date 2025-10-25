<?= $this->include('layout/header'); ?>

<div class="container mt-5">
    <h3>Daftar Transaksi</h3>
    <a href="/transactions/create" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transactions as $t): ?>
            <tr>
                <td><?= $t['id'] ?></td>
                <td><?= $t['product_name'] ?></td>
                <td><?= $t['quantity'] ?></td>
                <td><?= $t['total_price'] ?></td>
                <td><?= $t['transaction_date'] ?></td>
                <td>
                    <a href="/transactions/edit/<?= $t['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/transactions/delete/<?= $t['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus transaksi ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('layout/footer'); ?>
