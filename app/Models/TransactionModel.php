<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'product_id',
        'quantity',
        'total_price',
        'transaction_date'
    ];

    // Tambahkan method ini 👇👇👇
    public function getAllTransactions()
    {
        return $this->select('transactions.*, products.name as product_name')
                    ->join('products', 'products.id = transactions.product_id', 'left')
                    ->findAll();
    }
}
