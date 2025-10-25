<?php
namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model {
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_id', 'product_id', 'quantity', 'total_price', 'created_at'];

    public function getTransactionDetails() {
        return $this->select('transactions.*, customers.name AS customer_name, products.name AS product_name')
                    ->join('customers', 'customers.id = transactions.customer_id')
                    ->join('products', 'products.id = transactions.product_id')
                    ->findAll();
    }
}
