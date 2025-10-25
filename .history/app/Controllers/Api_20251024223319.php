<?php
namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\TransactionModel;
use CodeIgniter\RESTful\ResourceController;

class Api extends ResourceController {

    // GET: /api/products
    public function products() {
        $productModel = new ProductModel();
        return $this->respond($productModel->findAll());
    }

    // GET: /api/transactions
    public function transactions() {
        $transactionModel = new TransactionModel();
        return $this->respond($transactionModel->getTransactionDetails());
    }
}
