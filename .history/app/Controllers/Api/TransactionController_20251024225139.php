<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use CodeIgniter\Database\Exceptions\DatabaseException;

class TransactionController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('transactions');
        $builder->select('transactions.*, products.name as product_name');
        $builder->join('products', 'products.id = transactions.product_id');
        $query = $builder->get()->getResultArray();

        return $this->response->setJSON($query);
    }
}
